<?php

$name = $_POST['name'];
$location = $_POST['location'];
$crime = $_POST['crime'];
$details = $_POST['details'];

echo "<h1>Report Submitted Successfully</h1>";

echo "Name: ".$name."<br>";
echo "Location: ".$location."<br>";
echo "Crime Type: ".$crime."<br>";
echo "Details: ".$details."<br>";

?>