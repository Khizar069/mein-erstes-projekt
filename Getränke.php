<?php
include('db_connection.php'); // Verbindung einbinden

// SQL-Abfrage erstellen
$sql = "SELECT * FROM getränke"; // Abfrage für die Tabelle "vorspeisen"
$result = $conn->query($sql);

// Ergebnisse überprüfen
if ($result->num_rows > 0) {
    // Daten ausgeben
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Preis: " . $row["preis"] . " - Beschreibung: " . $row["beschreibung"] . "<br>";
    }
} else {
    echo "Keine Einträge gefunden.";
}

$conn->close(); // Verbindung schließen
?>