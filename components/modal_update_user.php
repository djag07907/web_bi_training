<div class="modal fade text-center" id="updateuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form class="row g-3" method="POST" action="../controllers/update_user.php">
                    <div class="col-md-12">
                        <label for="validationDefault01" class="form-label">ID de Usuario</label>
                        <input class="bg-info text-center" type="text" id="updateUserId" name="userid" value="userId" readonly>
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault01" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="nameuser" value="name">
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Group</label>
                        <input type="text" class="form-control" name="groups">
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Ticket Assigned</label>
                        <input type="text" class="form-control" name="ticket_assigned">
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location">
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-success" name="btnupdateuser" value="">Update User
                            Info</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>