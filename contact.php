<?php include 'components/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - CTask</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section class="contact">

    <h1>Send Your Task</h1>

    <form action="send-email.php" method="POST">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <input type="text" name="title" placeholder="Task Title" required>

        <textarea name="description" placeholder="Describe your task..." required></textarea>

        <input type="number" name="budget" placeholder="Your Budget (Optional)">

        <button type="submit">Send Task</button>

    </form>

</section>

<?php include 'components/footer.php'; ?>

</body>
</html>
