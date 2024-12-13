<?php include 'header.php'; ?>

<form action="contact-form-handler.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="message">Message:</label>
    <textarea name="message" required></textarea>
    <button type="submit">Send</button>
</form>

<?php include 'footer.php'; ?>
