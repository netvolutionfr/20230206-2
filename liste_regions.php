<?php
require_once 'db.php';

// Récupération des régions
$sql = "SELECT * FROM regions ORDER BY name";
$stmt = $db->query($sql);
$regions = $stmt->fetchAll(PDO::FETCH_CLASS, 'Region');

echo "<h1>Liste des régions</h1>";

foreach ($regions as $region) {
    echo $region->name . "<br>";
}