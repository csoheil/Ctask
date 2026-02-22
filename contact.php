<?php include 'components/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - CTask</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section class="contact-section">

    <h2>Send Your Task</h2>

    <form action="send-email.php" method="POST" class="contact-form">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" placeholder="Describe your task..." required></textarea>

        <label>Select Email Provider:</label>
        <select name="provider">
            <option value="gmail">Gmail</option>
            <option value="yahoo">Yahoo</option>
            <option value="default">Default Mail App</option>
        </select>

        <button type="submit" class="btn">Send Task</button>

    </form>

</section>

<?php include 'components/footer.php'; ?>
<script src="assets/js/validate.js"></script>
</body>
</html>