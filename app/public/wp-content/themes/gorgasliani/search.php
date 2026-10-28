<?php

/**
 * Template Name: ძიება
 */

?>

<!DOCTYPE html>
<html lang="ka">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ძიება</title>
    <?php
    wp_head();
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/search.css">
</head>

<body>
    <!-- Header -->
    <?php get_header(); ?>
    <?php
    $history_data = array(
        array(
            'year' => 1783,
            'country' => 'საქართველო',
            'title' => 'გეორგიევსკის ტრაქტატი',
            'description' => 'ქართლ-კახეთმა რუსეთთან ხელი მოაწერა გეორგიევსკის ტრაქტატს, რომელიც რუსულ მფარველობას ითვალისწინებდა.',
            'image' => get_template_directory_uri() . '/assets/images/damoukidebloba1.jpg',
        ),
        array(
            'year' => 1783,
            'country' => 'ამერიკა',
            'title' => 'პარიზის ზავი',
            'description' => 'პარიზის ზავით ბრიტანეთმა ოფიციალურად სცნო ამერიკის დამოუკიდებლობა.',
            'image' => get_template_directory_uri() . '/assets/images/revolutionpage.png',
        ),
        array(
            'year' => 1914,
            'country' => 'საქართველო',
            'title' => 'ომის გავლენა კავკასიაზე',
            'description' => 'პირველი მსოფლიო ომის დაწყებამ კავკასიაში პოლიტიკური და ეკონომიკური გამოწვევები გააძლიერა.',
            'image' => get_template_directory_uri() . '/assets/images/firstworldwar.png',
        ),
        array(
            'year' => 1914,
            'country' => 'ამერიკა',
            'title' => 'პირველი მსოფლიო ომის დაწყება',
            'description' => 'ევროპაში ომის დაწყებამ აშშ-ის საგარეო პოლიტიკაზე დიდი გავლენა იქონია.',
            'image' => get_template_directory_uri() . '/assets/images/ww1-2.png',
        ),
        array(
            'year' => 1945,
            'country' => 'საქართველო',
            'title' => 'ომის შემდგომი რეალობა',
            'description' => 'მეორე მსოფლიო ომის შემდეგ საქართველოში საზოგადოება ახალ გამოწვევებს შეხვდა.',
            'image' => get_template_directory_uri() . '/assets/images/ww1-1.png',
        ),
        array(
            'year' => 1945,
            'country' => 'ამერიკა',
            'title' => 'ომის დასრულება',
            'description' => '1945 წელს დასრულდა მეორე მსოფლიო ომი და აშშ გახდა ერთ-ერთი წამყვანი მსოფლიო ძალა.',
            'image' => get_template_directory_uri() . '/assets/images/ww1-3.png',
        ),
        array(
            'year' => 1991,
            'country' => 'საქართველო',
            'title' => 'დამოუკიდებლობის აღდგენა',
            'description' => '1991 წელს საქართველომ დამოუკიდებლობა აღადგინა, რაც ქვეყნის ისტორიაში გარდამტეხი მომენტი იყო.',
            'image' => get_template_directory_uri() . '/assets/images/damoukidebloba2.jpg',
        ),
        array(
            'year' => 1991,
            'country' => 'ამერიკა',
            'title' => 'ცივი ომის დასრულება',
            'description' => 'საბჭოთა კავშირის დაშლამ აშშ-ის გლობალური როლის გადახედვა მოიტანა.',
            'image' => get_template_directory_uri() . '/assets/images/revolution.png',
        ),
        array(
            'year' => 2008,
            'country' => 'საქართველო',
            'title' => 'აგვისტოს ომი',
            'description' => '2008 წლის აგვისტოს ომმა მნიშვნელოვანი გავლენა მოახდინა ქვეყნის უსაფრთხოებაზე.',
            'image' => get_template_directory_uri() . '/assets/images/afxazeti.jpg',
        ),
        array(
            'year' => 2008,
            'country' => 'ამერიკა',
            'title' => 'ეკონომიკური კრიზისი',
            'description' => '2008 წლის ფინანსურმა კრიზისმა ამერიკის ეკონომიკა ძლიერ შეარყია.',
            'image' => get_template_directory_uri() . '/assets/images/revolution-2.png',
        ),
        array(
            'year' => 2011,
            'country' => 'საქართველო',
            'title' => 'დამოუკიდებლობის 20 წელი',
            'description' => '2011 წელს საქართველო აღნიშნავდა დამოუკიდებლობის აღდგენის 20 წლის იუბილეს.',
            'image' => get_template_directory_uri() . '/assets/images/historio1.jpg',
        ),
        array(
            'year' => 2011,
            'country' => 'ამერიკა',
            'title' => 'ოსამა ბინ ლადენის ოპერაცია',
            'description' => 'აშშ-ის სპეცოპერაციის შედეგად 2011 წელს მოკლეს ოსამა ბინ ლადენი.',
            'image' => get_template_directory_uri() . '/assets/images/historio2.jpg',
        ),
    );
    ?>
    <main class="search-page">
        <div class="search-hero">
            <h1>ერთი წელი - ორი ისტორია</h1>
            <p>აირჩიეთ წელი და ნახეთ, რა მოხდა საქართველოში და ამერიკაში.</p>
        </div>

        <div id="yearButtons" class="year-buttons"></div>

        <div id="searchHint" class="search-hint">აირჩიეთ წელი</div>
        <div id="searchResults" class="search-results"></div>
    </main>

    <!-- Footer -->
    <?php get_footer(); ?>

    <script>
        const historyData = <?php echo wp_json_encode($history_data); ?>;

        const yearButtons = document.getElementById("yearButtons");
        const searchResults = document.getElementById("searchResults");
        const searchHint = document.getElementById("searchHint");

        const uniqueYears = Array.from(new Set(historyData.map(item => item.year))).filter(Boolean);
        const displayYears = uniqueYears.slice(0, 6);

        function renderResults(year) {
            const matches = historyData.filter(item => item.year === year);
            searchHint.textContent = `შედეგები ${year} წლისთვის`;

            if (!matches.length) {
                searchResults.innerHTML = `<div class="no-results">ამ წელს ინფორმაცია არ მოიძებნა.</div>`;
                return;
            }

            searchResults.innerHTML = matches.map(item => `
                <article class="result-card">
                    <div class="result-image">
                        <img src="${item.image}" alt="${item.country} ${item.year}" />
                    </div>
                    <div class="result-content">
                        <span class="result-country">${item.country}</span>
                        <h3>${item.title}</h3>
                        <p>${item.description}</p>
                    </div>
                </article>
            `).join("");
        }

        function renderYearButtons() {
            if (!displayYears.length) {
                yearButtons.innerHTML = `<div class="no-results">ჯერ არ დამატებულა წლები.</div>`;
                return;
            }

            yearButtons.innerHTML = displayYears.map(year => `
                <button class="year-btn" data-year="${year}">${year}</button>
            `).join("");

            const buttons = yearButtons.querySelectorAll(".year-btn");
            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    buttons.forEach(btn => btn.classList.remove("active"));
                    button.classList.add("active");
                    renderResults(parseInt(button.dataset.year, 10));
                });
            });

            const firstButton = buttons[0];
            if (firstButton) {
                firstButton.classList.add("active");
                renderResults(parseInt(firstButton.dataset.year, 10));
            }
        }

        window.addEventListener("DOMContentLoaded", () => {
            renderYearButtons();
        });
    </script>
</body>

</html>