<?php
class User {
    private $id;
    private $email;
    private $password;
    private $vorname;
    private $nachname;
    
    // Constructor für die Klasse User
    public function __construct($email, $password, $vorname, $nachname) {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT); // Passwort sicher speichern
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }
    
    // Methode zum Registrieren eines Benutzers
    public function register() {
        // Hier würde der Code stehen, um die Daten in einer Datenbank zu speichern
        // z.B. INSERT INTO users (email, password, vorname, nachname) VALUES (...)
        echo "Benutzer erfolgreich registriert: " . $this->email;
    }

    // Methode zum Einloggen eines Benutzers
    public function login($email, $password) {
        // Hier würde der Code stehen, um die Daten aus der Datenbank zu validieren
        // SELECT * FROM users WHERE email = $email
        // Dann mit password_verify() das eingegebene Passwort mit dem gespeicherten vergleichen
        if ($this->email == $email && password_verify($password, $this->password)) {
            echo "Login erfolgreich: " . $this->vorname . " " . $this->nachname;
        } else {
            echo "Ungültige E-Mail oder Passwort.";
        }
    }
}
?>