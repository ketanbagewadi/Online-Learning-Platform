<!DOCTYPE html>
<html>
<?php session_start();
include('../config/configure.php');
include("user_header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/user_reg.css">
    <link rel="stylesheet" type="text/css" href="../styles/articles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php

$user_id = $_GET['user_id'];

function show_liked()
{
    global $con, $user_id;
    $select = "SELECT * 
                FROM liked , articles
                WHERE liked.user_id='$user_id' and liked.type='art' and articles.art_id=liked.id";
    $run_select = mysqli_query($con, $select);

    while ($row_posts = mysqli_fetch_array($run_select)) {
        $content = $row_posts['content'];
        $header = $row_posts['header'];
        $creator = $row_posts['creator_id'];
        $time = $row_posts['time'];
        $art_id = $row_posts['art_id'];

        $select_creator = "SELECT * FROM users where user_id='$creator'";
        $run_creator = mysqli_query($con, $select_creator);
        $row = mysqli_fetch_array($run_creator);
        $first_name = $row['first_name'];


        echo "
        <div class='container-fluid'>
            <div class='article'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <center><h2>$header</h2></center>
                    </div>
                </div>
                 <hr id='hl' > 
                
                <div class='row content'>
                    <div class='col-sm-2'>
                    </div>
                    <div class='col-sm-8'>
                        $content
                    </div>  
                    <div class='col-sm-2'>
                    </div>
                </div>
                <div class='row time'>
                    <div class='col-sm-4'></div>
                    <div class='col-sm-4'><strong>Created by</strong>  $first_name</div>
                    <div class='col-sm-1'></div>
                    <div class='col-sm-4'><strong>Created at</strong>  $time </div>
                </div>
                <center><a href='single_article.php?art_id=$art_id'><button class='btn btn-info'>See More</button></a></center>
            </div>
            </br>
        </div>
        </br>
        ";
    }
}
?>

<body>
    <div class="container">
        <div class="row">
            <center>
                <h2>Articles Liked by You</h2>
            </center>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <?php echo show_liked() ?>
            </div>

        </div>
    </div>

</body>