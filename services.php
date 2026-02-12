<?php include 'components/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services - CTask</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section class="services-page">

    <h1>Our Services</h1>

    <div class="services-container">

        <?php
        $services = [
            ["Programming", "All kinds of web & software development."],
            ["Research Writing", "Academic & professional research papers."],
            ["Office products", "Modern presentation design."],
            ["PDF Services", "Create, edit & convert PDFs."],
            ["Video Editing", "Professional video production."],
            ["Image & Logo Design", "Branding & graphics."],
            ["Industrial Design (CATIA)", "3D CAD industrial modeling."]
        ];

        foreach ($services as $service) {
            echo "
            <div class='card'>
                <h3>{$service[0]}</h3>
                <p>{$service[1]}</p>
            </div>
            ";
        }
        ?>

    </div>

</section>

<?php include 'components/footer.php'; ?>

</body>
</html>
