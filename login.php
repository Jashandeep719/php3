<?php include 'header.php'; ?>
<?php include 'dbconfig.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;
        header("Location: member.php");
        exit;
    } else {
        echo "<p>Invalid credentials!</p>";
    }
}
?>

<form action="" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
<?php include 'footer.php'; ?>
