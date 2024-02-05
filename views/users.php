<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Users WorkRatio</title>
</head>

<body>

    <!-- Navbar -->
    <?php
    include "../components/navbar.php";
    ?>
    <Section class="users mt-5">
        <div class="container">
            <div class="row">
                <?php
                include("../connection-database/connection.php");
                include "../controllers/delete_user.php";

                ?>
            </div>
            <div class="row">
                <?php
                $status = isset($_GET['status']) ? $_GET['status'] : '';

                if ($status === 'success') {
                    echo '<div id="success-alert" class="alert alert-success" role="alert">
            Usuario registrado correctamente.
          </div>';
                } elseif ($status === 'error') {
                    echo '<div id="error-alert" class="alert alert-danger" role="alert">
            Error al registrar el usuario.
          </div>';
                } elseif ($status === 'warning') {
                    echo '<div id="warning-alert" class="alert alert-warning" role="alert">
                    Verificar algún campo está vacío.
          </div>';
                }
                ?>

            </div>
            <div class="row">
                <h2 class="font-weight-bold">Users</h2>
            </div>
            <div class="row mt-2">
                <div class="col-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registeruser">
                        Agregar Usuario
                    </button>
                    <?php include "../components/modal_register_user.php"; ?>
                </div>
            </div>
            <div class="row mt-2">
                <table class="table caption-top table-bordered border-dark ">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">Id User</th>
                            <th scope="col">Name</th>
                            <th scope="col">Groups</th>
                            <th scope="col">Ticket assingned</th>
                            <th scope="col">Location</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../connection-database/connection.php";
                        include "../components/modal_update_user.php";

                        $sql = $connect->query("select * from dim_users");
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><?= $row["iduser"] ?></td>
                                <td><?= $row["colleagues_included"] ?></td>
                                <td>Developer</td>
                                <td>3</td>
                                <td><?= $row["ciudad"] ?></td>
                                <td>
                                    <a onclick="return eliminar()" href="/web_bi_training/views/users.php?iduser=<?= $row["iduser"] ?>" type="button" class="btn btn-danger">Eliminar <i class="fa-solid fa-delete-left"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning open-update-modal" data-bs-toggle="modal" data-bs-target="#updateuser" data-name="<?= $row["colleagues_included"] ?>" data-iduser="<?= $row["iduser"] ?>">
                                        Actualizar <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <!-- 
                                    <a href="../components/test.php?iduser=<?= $row["iduser"] ?>" type="button" class="btn btn-warning">
                                        Actualizar <i class="fa-regular fa-pen-to-square"></i>
                                    </a> -->
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </Section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function eliminar() {
            var respuesta = confirm("Estas seguro de Eliminar el Registro?")
            return respuesta;

        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const updateModalTriggers = document.querySelectorAll('.open-update-modal');

            updateModalTriggers.forEach(function(trigger) {
                trigger.addEventListener('click', function(event) {

                    event.preventDefault();

                    const userId = this.getAttribute('data-iduser');

                    document.getElementById('updateUserId').value = userId;

                    const name = this.getAttribute('data-name');

                    document.getElementById('nameuser').value = name;



                    const updateModal = new bootstrap.Modal(document.getElementById('updateuser'));
                    updateModal.show();

                    const closeButton = document.getElementById('closeButton');
                    closeButton.addEventListener('click', function() {
                        updateModal.hide();
                    });

                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.getElementById('success-alert').classList.add('d-none');
                document.getElementById('error-alert').classList.add('d-none');
                document.getElementById('warning-alert').classList.add('d-none');
            }, 5000); 
        });
    </script>



</body>

</html>