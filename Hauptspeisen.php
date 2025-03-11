<?php
include 'db_connection.php'; // Stellt die Verbindung zur Datenbank her
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="hauptspeisenstyles.css">
    <link rel="shortcut icon" href="./images/Titel-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Aha Food | Hauptspeisen</title>
</head>
<body>
<?php include 'header.html'; ?> <!-- Header einbinden -->

<div class="hauptspeise">
    <div class="content-container">
        <h1>Unsere Hauptspeisen</h1>
        <p>Genießen Sie die authentische pakistanische Küche!</p>

        <?php
        $sql = "SELECT * FROM hauptspeisen";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="food-items">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="item">';
                echo '</div>';
                echo '<h3>' . htmlspecialchars($row["name"]) . '</h3>';
                echo '<p>' . htmlspecialchars($row["beschreibung"]) . '</p>';
                echo '<p class="fav-price">' . number_format($row["preis"], 2) . ' €</p>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo "<p>Es sind derzeit keine Hauptspeisen verfügbar.</p>";
        }

        $conn->close();
        ?>
    </div>
</div>

<?php include 'footer.html'; ?> <!-- Footer einbinden -->

</body>
</html>