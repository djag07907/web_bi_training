<div class="modal fade" id="registeruser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Register Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="post" action="../controllers/register_user.php">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Group</label>
                        <input type="text" class="form-control" name="groups">
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Ticket Assigned</label>
                        <input type="text" class="form-control" name="ticket_assigned">
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success" name="btnregisteruser" value="">Register
                            Info</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
