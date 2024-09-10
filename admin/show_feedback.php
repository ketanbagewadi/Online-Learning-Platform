<!DOCTYPE html>
<html>
<?php session_start();
include("../config/configure.php");
include("admin_header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Back</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/user_reg.css">
</head>

<style>
    .feed {
        margin-top: 10px;
        padding: 10px;
        border: 2px gray solid;
        box-shadow: 3px 3px 3px gray;
        border-radius: 10px;
    }

    .feed:hover {
        box-shadow: 5px 5px 5px black;
    }
</style>

<?php

function show_feedback()
{
    global $con;

    $get_feed = "SELECT * FROM feedback ORDER BY time DESC LIMIT 10";
    $run_feed = mysqli_query($con, $get_feed);

    while ($row_posts = mysqli_fetch_array($run_feed)) {

        $content = $row_posts['feed'];
        $creator = $row_posts['user_id'];
        $time = $row_posts['time'];

        $select_creator = "SELECT * FROM users where user_id='$creator'";
        $run_creator = mysqli_query($con, $select_creator);
        $row = mysqli_fetch_array($run_creator);
        $first_name = $row['first_name'];


        echo "
        <div class='container-fluid'>
            <div class='feed'>
                <div class='row content'>
                    <div class='col-sm-2'>
                    </div>
                    <div class='col-sm-8'>
                       <strong> $content</strong>
                    </div>  
                    <div class='col-sm-2'>
                    </div>
                </div>
                <br>
                <div class='row time'>
                    <div class='col-sm-2'></div>
                    <div class='col-sm-3'><strong>Given by</strong>  $first_name</div>
                    <div class='col-sm-1'></div>
                    <div class='col-sm-4'><strong>at</strong>  $time </div>
                </div>
            </div>
            </br>
        </div>
        </br>
        ";
    }
}

?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2>
                    <center>FeedBack from users</center>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
                <?php echo show_feedback() ?>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
</body>