<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php') ?>
            <div class="card">
                <div class="card-header">
                    <h4>Registered User
                        <a href="add-register.php" class="btn btn-primary float-end">Add Admin</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Role</th>
                                <!-- <th>Email</th> -->
                                <!-- <th>Contact</th> -->
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['fname']; ?></td>
                                        <td><?= $row['lname']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['role_as'] == '1') {
                                                echo 'Admin';
                                            } elseif ($row['role_as'] == '0') {
                                                echo 'User';
                                            }
                                            ?>
                                        </td>
                                        <td><a href="edit-register.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="update-user.php" method="post">
                                                <button type="submit" name="delete_user" value="<?= $row['id']; ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <td colspan="6">No Record Found</td>
                            <?php
                            }
                            ?>
                            <!-- <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>