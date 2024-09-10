<!DOCTYPE html>
<html>
<?php session_start();
include("admin_header.php") ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/insert_descriptive.css">
</head>



<body>

    <div class="container-fluid reg-form">
        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
            <h2>Create New Update</h2>

            <div class="form-group row">
                <label for="firstName" class="col-sm-4 control-label">Enter Update Here</label>
                <div class="col-sm-8">
                    <input type="text" id="question" name="update_des" class="form-control" required>
                </div>
            </div>

            <center><button type="submit" class="btn btn-primary btn-block" name="sub_update">Publish Update</button></center>
        </form>
    </div>


</body>

<?php
include("../config/configure.php");

if (isset($_POST['sub_update'])) {

    $update_des = htmlentities(mysqli_real_escape_string($con, $_POST['update_des']));

    $creator_email = $_SESSION['email'];
    $creator_select = "SELECT * from users where email='$creator_email' and user_type='admin'";
    $query = mysqli_query($con, $creator_select);
    $row = mysqli_fetch_array($query);
    $val = $row['user_id'];

    $insert_des = "INSERT INTO updates (description, creator_id) VALUES ('$update_des', '$val')";
    $query = mysqli_query($con, $insert_des);
    if ($query) {
        echo "<script>alert('Update Published')</script>";
    } else {
        echo "<script>alert('Something wrong! try again')</script>";
        exit();
    }
}

?>