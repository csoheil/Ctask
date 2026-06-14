<?php include 'components/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="manifest" href="manifest.json">
    <title>FAQ - CTask</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section class="faq-section">

    <h1>Frequently Asked Questions</h1>

    <?php

    $question = "How fast is task delivery?";
    $answer = "Most tasks are completed within a few hours to 3 days depending on complexity.";
    include 'components/faq-item.php';

    $question = "How do I contact CTask?";
    $answer = "You can contact us through the contact page and send your request using your preferred email provider.";
    include 'components/faq-item.php';

    $question = "What services do you provide?";
    $answer = "We provide programming, research writing, office document creation, presentation design, logo editing, video editing, and industrial design services.";
    include 'components/faq-item.php';

    $question = "Do you support urgent tasks?";
    $answer = "Yes. Urgent and high-priority tasks are accepted depending on availability.";
    include 'components/faq-item.php';

    $question = "Which technologies do you use?";
    $answer = "We work with PHP, Python, HTML, CSS, JavaScript, CATIA, and office tools.";
    include 'components/faq-item.php';

    ?>

</section>

</body>
<?php include 'components/footer.php'; ?>
</html>