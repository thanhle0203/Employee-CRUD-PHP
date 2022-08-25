<?php
$mysqli = new mysqli('localhost', 'root', 'ella123', 'Employee_CRUD', 3307) or die(mysqli_error($mysqli));
echo "Connected";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')") or
    die($mysqli->error);
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
}