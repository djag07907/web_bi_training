<?php
$id = $_GET["iduser"];
include "../connection-database/connection.php";

$pgsql = $connect->query("SELECT * FROM dim_users WHERE iduser=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <section class="mt-5 text-center">
        <div class="container">
            <form class="row g-3" method="post">
                <?php 
include "../controllers/update_user.php";    
                ?>
                <?php
                while ($row = $pgsql->fetch(PDO::FETCH_ASSOC)) { ?>
                <input type="hidden" id="title" name="iduser" value="<?=$_GET["iduser"] ?> " />
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $row["colleagues_included"] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Group</label>
                        <input type="text" class="form-control" name="groups" value="<?= $row["idgroup"] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Ticket Assigned</label>
                        <input type="text" class="form-control" name="ticket_assigned" value="<?= $row["continente"] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" value="<?= $row["ciudad"] ?>">
                    </div>
                <?php } ?>

                <div class="col-12">
                    <button type="submit" class="btn btn-success" name="btnupdateuser" value="test">Update User Info</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>