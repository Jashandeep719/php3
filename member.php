<?php
include 'header.php';
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Welcome to the Member Area</h2>
<p>Your details:</p>
<ul>
    <li>Name: <?php echo $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name']; ?></li>
    <li>Email: <?php echo $_SESSION['user']['email']; ?></li>
</ul>

<?php include 'footer.php'; ?>
