<!DOCTYPE html>
<html lang="ka">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>გორგასლიანი</title>
  <?php
  wp_head();
  ?>
</head>

<body>
  <div class="App" id="home">
    <!-- Header -->
    <?php get_header(); ?>

    <!-- Main Home Section -->
    <div class="home">
      <div class="head">
        <h1>დამოუკიდებლობის ფასი</h1>
        <div class="head-ln">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zviadi.png" alt="Zviadi" />
          <div class="head-ln-tx">
            <p class="head-in-tx-txt">
              საქართველოს დამოუკიდებლობის დღე — საქართველოს ეროვნული
              დღესასწაული, რომელიც აღინიშნება ყოველი წლის 26 მაისს, ნიშნად
              საქართველოს სახელმწიფოებრივი დამოუკიდებლობის აღდგენისა რუსეთის
              იმპერიისგან.
            </p>
            <p class="learn-more" ><a href="<?php echo site_url('/damoukideblobis-dge'); ?>">იხილეთ მეტი</a></p>
          </div>
        </div>
        <div class="head-infos" id="infoItems">
          <div class="head-info-item" >
            <p>თამარ მეფე (1160-1213) იყო საქართველოს პირველი ქალი მეფე, რომლის მმართველობის დროს ქვეყანა დიდებულად გაძლიერდა. მისი მმართველობა ქვეყნის პოლიტიკურ, სამხედრო და კულტურულ აღორძინებას უკავშირდება. თამარმა გააფართოვა საქართველოს საზღვრები და დაამარცხა მტრები, რის შედეგადაც ქვეყანა რეგიონული ძალა გახდა.</p>
            <p class="learn-more" >
              <a href="<?php echo site_url('/tamar-mefe'); ?>">იხილეთ მეტი</a>
            </p>
          </div>
          <div class="head-info-item" >
            <p>აფხაზეთის ომი (1992-1993) იყო სისხლიანი კონფლიქტი, რომელმაც გამოიწვია ათასობით ადამიანის დაღუპვა და დევნილობა. ომის შედეგად აფხაზეთი საქართველოს კონტროლიდან გავიდა, ხოლო კონფლიქტი დღემდე დაძაბულობის და პოლიტიკური უთანხმოების მიზეზად რჩება.</p>
            <p class="learn-more" >
              <a href="<?php echo site_url('/afxazetis-omi'); ?>">იხილეთ მეტი</a>
            </p>
          </div>
          <div class="head-info-item" >
            <p>ბალდუინ მეოთხე (1161-1185) იყო იერუსალიმის მეფე, რომელიც ცნობილია ლეპროზით დაავადებული, მაგრამ მაინც მტკიცედ ხელმძღვანელობდა ჯვაროსნულ ლაშქრობებს. მისი მმართველობა მნიშვნელოვანი იყო იერუსალიმის დაცვაში, თუმცა მისი სიკვდილის შემდეგ სამეფო.</p>
            <p class="learn-more">
              <a href="<?php echo site_url('/balduin-meotxe'); ?>">იხილეთ მეტი</a>
            </p>
          </div>
          <div class="head-info-item" >
            <p>დავით აღმაშენებელი (1073-1125) იყო საქართველოს მეფე, რომელმაც ქვეყანა გააერთიანა და გააძლიერა. მისი მმართველობისას მოიპოვა დიდგორის ბრძოლაში გამარჯვება, რომელიც საქართველოს ისტორიაში ერთ-ერთ უდიდეს მიღწევად ითვლება. დავითმა დაიწყო საქართველოს ოქროს ხანა.</p>
            <p class="learn-more" >
              <a href="<?php echo site_url('/davit-agmashenebeli'); ?>">იხილეთ მეტი</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Dynamic Component Container -->
    <div id="dynamicComponent"></div>

    <!-- Footer -->
    <?php get_footer(); ?>
  </div>

  <script src="info.js"></script>
  <script src="home.js"></script>
</body>

</html>