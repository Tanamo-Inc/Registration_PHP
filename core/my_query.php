<?php

require_once "../class/config.php";

$conn = new config();

if (ISSET($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $conn->save($username, $password, $firstname, $lastname);

    echo '<script>alert("Registered Successfully!")</script>';

    echo '<script>window.location= "../index.php"</script>';
}
?>