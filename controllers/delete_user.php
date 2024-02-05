<?php
include("../connection-database/connection.php");

if (!empty($_GET["iduser"])) {
    $iduser = $_GET["iduser"];

    $pgsql = $connect->prepare("DELETE FROM dim_users WHERE iduser = :iduser AND iduser IS NULL");
    $pgsql->bindParam(':iduser', $iduser);

    $result = $pgsql->execute();

    if ($result) {
        echo '<div class="alert alert-success" role="alert">
                Registro Eliminado.
              </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                No se pudo eliminar el registro.
              </div>';
    }
}
