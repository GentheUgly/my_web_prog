<?php
class User {
    private $id;
    private $email;
    private $password;
    private $vorname;
    private $nachname;

    // Constructor für die Klasse User
    public function __construct($id, $email, $password, $vorname, $nachname) {
        $this->id = $id;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT); // Passwort sicher speichern
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    // Methode zum Registrieren eines Benutzers
    public function register() {
        // Hier würde der Code stehen, um die Daten in einer Datenbank zu speichern
        // z.B. INSERT INTO users (id, email, password, vorname, nachname) VALUES (...)
        echo "Benutzer erfolgreich registriert: " . $this->vorname . " " . $this->nachname . " (ID: " . $this->id . ")";
    }

    // Methode zum Einloggen eines Benutzers
    public function login($email, $password) {
        // Hier würde der Code stehen, um die Daten aus der Datenbank zu validieren
        // SELECT * FROM users WHERE email = $email
        // Dann mit password_verify() das eingegebene Passwort mit dem gespeicherten vergleichen
        if ($this->email == $email && password_verify($password, $this->password)) {
            echo "Login erfolgreich! Willkommen zurück, " . $this->vorname . " " . $this->nachname . " (ID: " . $this->id . ")";
        } else {
            echo "Ungültige E-Mail oder Passwort.";
        }
    }

    // Optionale Getter und Setter Methoden, falls benötigt
    public function getId() {
        return $this->id;
    }

    public function getVorname() {
        return $this->vorname;
    }

    public function getNachname() {
        return $this->nachname;
    }

    public function getEmail() {
        return $this->email;
    }
}
?>