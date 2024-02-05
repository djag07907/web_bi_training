<?php
include("../connection-database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["userid"])) {
    $userid = $_POST["userid"];

    if (!empty($_POST["name"]) && !empty($_POST["groups"]) && !empty($_POST["ticket_assigned"]) && !empty($_POST["location"])) {
        $name = $_POST["name"];
        $groups = $_POST["groups"];
        $ticket_assigned = $_POST["ticket_assigned"];
        $location = $_POST["location"];

        $pgsql = $connect->prepare("UPDATE dim_users SET colleagues_included = ?, idgroup = ?, continente = ?, ciudad = ? WHERE iduser = ?");
        $result = $pgsql->execute([$name, $groups, $ticket_assigned, $location, $userid]);

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
