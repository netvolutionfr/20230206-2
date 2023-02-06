<?php
require_once 'db.php';

$code_region = $_GET['code_region'];

$sql = "SELECT * FROM regions WHERE code = :code_region";
$stmt = $db->prepare($sql);
$stmt->execute(['code_region' => $code_region]);
$region = $stmt->fetchObject('Region');

echo "<h1>" . $region->name . "</h1>";
