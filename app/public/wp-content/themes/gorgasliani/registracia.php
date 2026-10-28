<?php

/**
 * Template Name: რეგისტრაცია
 */
 
$register_error = '';

if ( is_user_logged_in() ) {
    wp_safe_redirect( home_url( '/chat' ) );
    exit;
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['gorgasliani_register_nonce'] ) ) {
    check_admin_referer( 'gorgasliani_register', 'gorgasliani_register_nonce' );

    $email    = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $password = isset( $_POST['password'] ) ? wp_unslash( $_POST['password'] ) : '';

    if ( empty( $email ) || empty( $password ) ) {
        $register_error = 'გთხოვთ შეავსოთ ყველა ველი.';
    } elseif ( ! is_email( $email ) ) {
        $register_error = 'გთხოვთ მიუთითოთ ვალიდური ემაილი.';
    } elseif ( email_exists( $email ) ) {
        $register_error = 'ამ ემაილით მომხმარებელი უკვე არსებობს.';
    } else {
        $base_username = sanitize_user( strstr( $email, '@', true ), true );
        if ( empty( $base_username ) ) {
            $base_username = 'user';
        }

        $username = $base_username;
        $suffix   = 1;
        while ( username_exists( $username ) ) {
            $username = $base_username . $suffix;
            $suffix++;
        }

        $user_id = wp_create_user( $username, $password, $email );
        if ( is_wp_error( $user_id ) ) {
            $register_error = $user_id->get_error_message();
        } else {
            wp_update_user(
                [
                    'ID'           => $user_id,
                    'display_name' => $email,
                ]
            );
            wp_set_current_user( $user_id );
            wp_set_auth_cookie( $user_id );
            wp_safe_redirect( home_url( '/chat' ) );
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ka">

<head>
    <meta charset="UTF-8">
    <title>რეგისტრაცია</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <?php get_header(); ?>

    <div class="auth">
        <div class="auth-register">
            <?php if ( ! empty( $register_error ) ) : ?>
                <div class="status" style="margin-bottom:12px; color:#b00020;">
                    <?php echo esc_html( $register_error ); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <h1>შექმენით ანგარიში</h1>
                <div class="auth-input-box">
                    <i class="fas fa-envelope auth-icon"></i>
                    <input type="email" name="email" placeholder="email" required />
                </div>
                <div class="auth-input-box">
                    <i class="fas fa-lock auth-icon"></i>
                    <input type="password" name="password" placeholder="password" required />
                </div>
                <?php wp_nonce_field( 'gorgasliani_register', 'gorgasliani_register_nonce' ); ?>
                <button type="submit" class="auth-btn">რეგისტრაცია</button>
            </form>

            <div class="auth-register-link" style="margin-top:16px;">
                <p>უკვე გაქვს ექაუნთი? <a href="<?php echo site_url('/shesvla'); ?>"><span>შესვლა</span></a></p>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</body>

</html>