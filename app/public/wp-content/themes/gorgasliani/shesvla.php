<?php

/**
 * Template Name: შესვლა
 */
 
$login_error = '';

if ( is_user_logged_in() ) {
    wp_safe_redirect( home_url( '/chat' ) );
    exit;
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['gorgasliani_login_nonce'] ) ) {
    check_admin_referer( 'gorgasliani_login', 'gorgasliani_login_nonce' );

    $email    = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $password = isset( $_POST['password'] ) ? wp_unslash( $_POST['password'] ) : '';

    if ( empty( $email ) || empty( $password ) ) {
        $login_error = 'გთხოვთ შეავსოთ ყველა ველი.';
    } elseif ( ! is_email( $email ) ) {
        $login_error = 'გთხოვთ მიუთითოთ ვალიდური ემაილი.';
    }

    if ( empty( $login_error ) ) {
    $user = wp_signon(
        [
            'user_login'    => $email,
            'user_password' => $password,
            'remember'      => true,
        ],
        false
    );

    if ( is_wp_error( $user ) ) {
        $login_error = $user->get_error_message();
    } else {
        wp_safe_redirect( home_url( '/chat' ) );
        exit;
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>შესვლა</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <?php get_header(); ?>

    <div class="auth">
        <div class="auth-login">
            <?php if ( ! empty( $login_error ) ) : ?>
                <div class="status" style="margin-bottom:12px; color:#b00020;">
                    <?php echo esc_html( $login_error ); ?>
                </div>
            <?php endif; ?>
            <form method="POST" action="">
                <h1>ავტორიზაცია</h1>
                <div class="auth-input-box">
                    <i class="fas fa-envelope auth-icon"></i>
                    <input type="email" name="email" placeholder="email" required />
                </div>
                <div class="auth-input-box">
                    <i class="fas fa-lock auth-icon"></i>
                    <input type="password" name="password" placeholder="password" required />
                </div>
                <?php wp_nonce_field( 'gorgasliani_login', 'gorgasliani_login_nonce' ); ?>
                <button type="submit" class="auth-btn">შესვლა</button>
            </form>

            <div class="auth-register-link">
                <p>არ გაქვს ექაუნთი? <a href="<?php echo site_url('/registracia'); ?>"><span>რეგისტრაცია</span></a></p>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>
</body>

</html>