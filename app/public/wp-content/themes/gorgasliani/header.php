<div class="nav">
  <div class="nav-main"> 
    <ul class="menu">
      <li><a href="<?php echo home_url(); ?>">მთავარი</a></li>
      <li><a href="<?php echo site_url('/msoflio-istoria'); ?>">მსოფლიო ისტორია</a></li>
      <li><a href="<?php echo site_url('/istoriografia'); ?>">ისტორიოგრაფია</a></li>
      <li><a href="<?php echo site_url('/mefeebi'); ?>">მეფეები</a></li>
      <li><a href="<?php echo site_url('/abiturientebistvis'); ?>">აბიტურიენტებისთვის</a></li>

    </ul>
    <div class="login-buttons">
      <?php if ( is_user_logged_in() ) : ?>
        <a class="login-button" href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>">გამოსვლა</a>
      <?php else : ?>
        <a class="login-button" href="<?php echo esc_url( site_url('/shesvla') ); ?>">შესვლა</a>
        <a class="register-button" href="<?php echo esc_url( site_url('/registracia') ); ?>">რეგისტრაცია</a>
      <?php endif; ?>
    </div>
  </div>
</div>