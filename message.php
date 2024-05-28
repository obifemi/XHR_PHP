<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $comment = $_POST["comment"];

    echo "<table>";
    echo "<tr><th>Name</th><th>Comment</th></tr>";
    echo "<tr><td>" . htmlspecialchars($name) . "</td><td>" . htmlspecialchars($comment) . "</td></tr>";
    echo "</table>";
}
?>