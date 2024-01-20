<?php include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User Lists
                        <a href="users-create.php" class="btn btn-primary float-end">Add Users</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>name</td>
                                <td>email</td>
                                <td>phone</td>
                                <td>
                                    <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                    <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                </td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); 