<?php
// Verbindungsdaten zur Datenbank
$servername = "localhost"; // Hostname
$username = "Khizar"; // Standard-Benutzername in XAMPP
$password = ""; // Standard-Passwort (leer in XAMPP)
$dbname = "ahafood"; // Name deiner Datenbank

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
// if ($conn->connect_error) {
//     die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
// } else {
//     echo "Erfolgreich mit der Datenbank verbunden!";
// }
?>