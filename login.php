<?php
require_once 'User.php';

// Beispiel: ein Benutzerobjekt, das bereits existiert (normalerweise aus der Datenbank)
$existingUser = new User("test@example.com", "passwort123", "Max", "Mustermann");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Login-Methode des Benutzers aufrufen
    $existingUser->login($email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Passwort:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <a href="register.php">Noch keinen Account? Hier registrieren</a>
</body>
</html>