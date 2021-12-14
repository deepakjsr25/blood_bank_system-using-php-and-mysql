<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Admin/User
                        <a href="view-register.php" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="update-user.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">First name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Last name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Role</label>
                                <select name="role_as" required class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" width="70px" height="70px">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_user" class="btn btn-primary">Add Admin/User</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>