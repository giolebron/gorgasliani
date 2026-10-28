<?php

/**
 * Template Name: მსოფლიო ისტორია
 */
?>

<!DOCTYPE html>
<html lang="ka">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>მსოფლიო ისტორია</title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/worldHistory.css">
</head>

<body>

  <div class="world-history-container" id="worldHistoryContainer">
    <!-- Navigation Buttons -->
    <button class="home-btn" onclick="location.href='/'">
      <i class="fa fa-home"></i>
    </button>
    <button class="nav-btn left" onclick="prevPage()">
      <i class="fa fa-arrow-left"></i>
    </button>
    <button class="nav-btn right" onclick="nextPage()">
      <i class="fa fa-arrow-right"></i>
    </button>

    <!-- Content will be injected dynamically -->
    <div class="content" id="whContent">
      <!-- Content filled by JS -->
    </div>
  </div>

  <script>
    const pages = [{
        title: "მსოფლიო ომი",
        description: "პირველი მსოფლიო ომი (1914-1918) იყო დიდი კონფლიქტი, რომელშიც მრავალი ქვეყანა ჩაერთო, იწვევს ევროპის პოლიტიკური რუკის გადანაწილებას.",
        images: [
          "<?php echo get_template_directory_uri(); ?>/assets/images/ww1-1.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/ww1-2.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/ww13.png"
        ],
        background: "<?php echo get_template_directory_uri(); ?>/assets/images/ww1.png",
        route: "first-world-war"
      },
      {
        title: "რომის იმპერია",
        description: "რომის იმპერია ათასწლეულზე მეტი ხნის განმავლობაში მართავდა ევროპას და საბოლოოდ დაეცა 476 წელს.",
        images: [
          "<?php echo get_template_directory_uri(); ?>/assets/images/rome-1.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/rome-2.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/rome3.png"
        ],
        background: "<?php echo get_template_directory_uri(); ?>/assets/images/rome.png",
        route: "romis-imperia"
      },
      {
        title: "ინდუსტრიული რევოლუცია",
        description: "ინდუსტრიული რევოლუცია XVIII-XIX საუკუნეებში გარდაქმნა მსოფლიო ეკონომიკა, წარმოება და ტრანსპორტი, გამოიწვია ურბანიზაცია და ტექნოლოგიური პროგრესი.",
        images: [
          "<?php echo get_template_directory_uri(); ?>/assets/images/revolution-1.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/revolution-2.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/revolution3.png"
        ],
        background: "<?php echo get_template_directory_uri(); ?>/assets/images/revolution.png",
        route: "industriuli-revolucia"
      },
      {
        title: "ნაპოლეონი",
        description: "ნაპოლეონ ბონაპარტი საფრანგეთის რევოლუციის შემდეგ აღზევდა და გახდა იმპერატორი, თუმცა დამარცხდა ვატერლოოს ბრძოლაში.",
        images: [
          "<?php echo get_template_directory_uri(); ?>/assets/images/napoleon-1.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/napoleon-2.png",
          "<?php echo get_template_directory_uri(); ?>/assets/images/napoleon3.png"
        ],
        background: "<?php echo get_template_directory_uri(); ?>/assets/images/napoleon.png",
        route: "napoleoni"
      }
    ];

    let currentPage = 0;

    function renderPage() {
      const container = document.getElementById("worldHistoryContainer");
      const content = document.getElementById("whContent");
      const page = pages[currentPage];

      // Background
      container.style.backgroundImage = `url('${page.background}')`;

      // Content
      content.innerHTML = `
        <div class="text-section">
          <h1>${page.title}</h1>
          <p>${page.description}</p>
          <button class="read-more-btn" onclick="location.href='/world-history/${page.route}'">იხილეთ მეტი...</button>
        </div>
        <div class="images-section">
          ${page.images.map(img => `<div class="image-container"><img src="${img}" alt="history" class="history-img"/></div>`).join('')}
        </div>
      `;
    }

    function nextPage() {
      currentPage = (currentPage + 1) % pages.length;
      renderPage();
    }

    function prevPage() {
      currentPage = (currentPage - 1 + pages.length) % pages.length;
      renderPage();
    }

    // Initialize
    window.addEventListener("DOMContentLoaded", renderPage);
  </script>

</body>

</html>