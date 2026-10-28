<?php

/**
 * Template Name: აბიტურიენტებისთვის
 */
?>

<!DOCTYPE html>
<html lang="ka">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>აბიტურიენტებისთვის</title>
    <?php
    wp_head();
    ?>

</head>

<body>
    <!-- Header -->
    <?php get_header(); ?>

    <div class="abiturienti">
        <div class="component">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/giorgimexute.jpg" alt="" />
            <p class="txt">გიორგი მეხუთე ბრწყინვალე იყო საქართველოს მეფე, რომელმაც მონღოლთა ბატონობის შემდეგ ქვეყანა გაამთლიანა. მისი მმართველობისას საქართველო გაძლიერდა, ეკონომიკა აღდგა და საერთაშორისო კავშირები განმტკიცდა. გიორგი იყო ძლიერი.</p>
            <p class="learn-more" >
            <a href="<?php echo site_url('/giorgi-mexute'); ?>">იხილეთ მეტი</a>    
            
            </p>
        </div>
        <div class="component">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aleqsandre.jpeg" alt="" />
            <p class="txt">ალექსანდრე მაკედონელი (ძვ. წ. 356-323) იყო ლეგენდარული მეფე და მხედართმთავარი, რომელმაც შექმნა ერთ-ერთი უდიდესი იმპერია ისტორიაში. მისი სტრატეგიული გენიოსობა და გამბედაობა დღემდე აღაფრთოვანებს მსოფლიოს.</p>
            <p class="learn-more">
                <a href="<?php echo site_url('/aleqsandre-makedoneli'); ?>">იხილეთ მეტი</a>
            </p>
        </div>
        <div class="component">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/karlos.jpeg" alt="" />
            <p class="txt">კარლოს დიდი, ფრანკების მეფე, შეერთებული ევროპის ერთ-ერთი უდიდესი იმპერიის დამფუძნებელია. მისი მმართველობის დროს მოხდა კულტურული და საგანმანათლებლო აღორძინება, ცნობილი როგორც კაროლინგური რენესანსი.</p>
            <p class="learn-more">
                <a href="<?php echo site_url('/karlos-didi'); ?>">იხილეთ მეტი</a>
            </p>
        </div>
        <div class="component">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/atila.jpeg" alt="" />
            <p class="txt">ატილა, უნების მეფე, იყო ერთ-ერთი ყველაზე მრისხანე და გავლენიანი ლიდერი ძველი ევროპის ისტორიაში. მისი მმართველობის პერიოდში უნები შიშს სცემდნენ რომის იმპერიასა და ევროპის სხვა ხალხებს. ატილა ცნობილი იყო როგორც „ღმერთის რისხვა“.</p>
            <p class="learn-more">
                <a href="<?php echo site_url('/atila'); ?>">იხილეთ მეტი</a>
            </p>
        </div>
        <div class="component">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vikingebi.jpeg" alt="" />
            <p class="txt">ვიკინგები, სკანდინავიელი მეომრები და მეზღვაურები, VIII-XI საუკუნეებში ევროპას შიშს სცემდნენ თავიანთი სწრაფი თავდასხმებით. ისინი ასევე იყვნენ გამოცდილი ვაჭრები და მოგზაურები, რომლებიც ისლანდიასა და გრენლანდიაში კოლონიებს აფუძნებდნენ და ჩრდილოეთ ამერიკასაც მიაღწიეს.</p>
            <p class="learn-more">
                <a href="<?php echo site_url('/vikingebi'); ?>">იხილეთ მეტი</a>
            </p>
        </div>
        <div class="component">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mariam.jpeg" alt="" />
            <p class="txt">მარიამ სტიუარტი, შოტლანდიის დედოფალი, ცნობილია როგორც ერთ-ერთი ყველაზე ტრაგიკული ფიგურა ისტორიაში. მისი მმართველობა სავსე იყო პოლიტიკური ინტრიგებითა და კონფლიქტებით. მარიამი ტახტის დაკარგვის შემდეგ დაპატიმრებულ იქნა და საბოლოოდ სიკვდილით დასაჯეს.</p>
            <p class="learn-more">
                <a href="<?php echo site_url('/mariam-stiuarti'); ?>">იხილეთ მეტი</a>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <?php get_footer(); ?>

    <script src="info.js"></script>
    <script src="home.js"></script>
</body>

</html>