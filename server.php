<?php
$name = $_POST["name"];
$sirname = $_POST["sirname"];
$email = $_POST["email"];

$conn = mysqli_connect("localhost", "root", "", "learningajax");
$sql = "INSERT INTO loaddata (name, sirname, email) VALUES ('$name', '$sirname', '$email')";

$response = mysqli_query($conn, $sql);
