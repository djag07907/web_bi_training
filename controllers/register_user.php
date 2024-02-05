<?php
include("../connection-database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["name"]) && !empty($_POST["groups"]) && !empty($_POST["ticket_assigned"]) && !empty($_POST["location"])) {
        $name = $_POST["name"];
        $groups = $_POST["groups"];
        $ticket_assigned = $_POST["ticket_assigned"];
        $location = $_POST["location"];

        $pgsql = $connect->prepare("INSERT INTO dim_users(colleagues_included, idgroup, continente ,ciudad) VALUES (?, ?, ?, ?)");
        $result = $pgsql->execute([$name, $groups, $ticket_assigned, $location]);

        if ($result) {
            header("Location: ../views/users.php?status=success");
            exit();
        } else {
            header("Location: ../views/users.php?status=error");
            exit();
        }
    } else {
        header("Location: ../views/users.php?status=warning");
        exit();
    }
}
?>
