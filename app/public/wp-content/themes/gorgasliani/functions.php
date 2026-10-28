<?php
// Enqueue styles and scripts
function gorgasliani_enqueue_styles()
{
    // Styles
    wp_enqueue_style('gorgasliani-style', get_stylesheet_uri());
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css');
    wp_enqueue_style('historiography-style', get_template_directory_uri() . '/assets/css/historiography.css');
    wp_enqueue_style('mefeebi-style', get_template_directory_uri() . '/assets/css/mefeebi.css');
    wp_enqueue_style('abiturienti-style', get_template_directory_uri() . '/assets/css/abiturienti.css');
    wp_enqueue_style('world-history-style', get_template_directory_uri() . '/assets/css/world-history.css');
    wp_enqueue_style('auth-style', get_template_directory_uri() . '/assets/css/auth.css');
    wp_enqueue_style('chat-style', get_template_directory_uri() . '/assets/css/chat.css');

}
add_action('wp_enqueue_scripts', 'gorgasliani_enqueue_styles');

function gorgasliani_register_year_story()
{
    $labels = array(
        'name' => 'წლების ისტორიები',
        'singular_name' => 'წლის ისტორია',
        'add_new' => 'დამატება',
        'add_new_item' => 'ახალი ისტორიის დამატება',
        'edit_item' => 'ისტორიის რედაქტირება',
        'new_item' => 'ახალი ისტორია',
        'view_item' => 'ისტორიის ნახვა',
        'search_items' => 'ისტორიების ძიება',
        'not_found' => 'არ მოიძებნა',
        'not_found_in_trash' => 'ნაგავში არ მოიძებნა',
        'menu_name' => 'წლების ისტორიები',
    );

    register_post_type('year_story', array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'gorgasliani_register_year_story');

function gorgasliani_year_story_metaboxes()
{
    add_meta_box(
        'year_story_details',
        'დამატებითი ინფორმაცია',
        'gorgasliani_year_story_metabox_render',
        'year_story',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'gorgasliani_year_story_metaboxes');

function gorgasliani_year_story_metabox_render($post)
{
    $year = get_post_meta($post->ID, 'year_story_year', true);
    $country = get_post_meta($post->ID, 'year_story_country', true);

    wp_nonce_field('year_story_meta_save', 'year_story_meta_nonce');
    ?>
    <p>
        <label for="year_story_year"><strong>წელი</strong></label><br>
        <input type="number" id="year_story_year" name="year_story_year" value="<?php echo esc_attr($year); ?>" style="width: 200px;">
    </p>
    <p>
        <label for="year_story_country"><strong>ქვეყანა</strong></label><br>
        <input type="text" id="year_story_country" name="year_story_country" value="<?php echo esc_attr($country); ?>" style="width: 300px;">
    </p>
    <p style="margin-top: 10px;">
        <em>სურათის დასაყენებლად გამოიყენეთ "Featured image".</em>
    </p>
    <?php
}

function gorgasliani_save_year_story_meta($post_id)
{
    if (!isset($_POST['year_story_meta_nonce']) || !wp_verify_nonce($_POST['year_story_meta_nonce'], 'year_story_meta_save')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['year_story_year'])) {
        update_post_meta($post_id, 'year_story_year', absint($_POST['year_story_year']));
    }

    if (isset($_POST['year_story_country'])) {
        update_post_meta($post_id, 'year_story_country', sanitize_text_field($_POST['year_story_country']));
    }
}
add_action('save_post_year_story', 'gorgasliani_save_year_story_meta');
