<?php
require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];

    // Neues Benutzerobjekt erstellen und registrieren
    $user = new User($email, $password, $vorname, $nachname);
    $user->register();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Registrieren</h1>
    <form action="register.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Passwort:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="vorname">Vorname:</label><br>
        <input type="text" id="vorname" name="vorname" required><br>

        <label for="nachname">Nachname:</label><br>
        <input type="text" id="nachname" name="nachname" required><br><br>

        <input type="submit" value="Registrieren">
    </form>

    <a href="login.php">Bereits registriert? Hier einloggen</a>
</body>
</html>