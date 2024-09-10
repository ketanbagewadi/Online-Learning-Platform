<?php
include("../config/configure.php");
function single_article()
{
    //echo "called";
    global $con;
    if (isset($_GET['art_id'])) {
        $art_id = $_GET['art_id'];

        $get_art = "SELECT * FROM articles where art_id='$art_id'";
        $run_art = mysqli_query($con, $get_art);
        $row_art = mysqli_fetch_array($run_art);

        $header = $row_art['header'];
        $content = $row_art['content'];
        $time = $row_art['time'];
        $creator = $row_art['creator_id'];

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
            </div>
            </br>
        </div>
        </br>
        ";
    }
}

function show_comments()
{
    global $con;
    $art_id = $_GET['art_id'];
    $select = "SELECT * FROM comments WHERE comment_on = '$art_id' AND type='art' ORDER BY time DESC LIMIT 20";
    $run_select = mysqli_query($con, $select);

    while ($row_comments = mysqli_fetch_array($run_select)) {
        $comment = $row_comments['comment'];
        $user_id = $row_comments['user_id'];
        $time = $row_comments['time'];

        $select_user = "SELECT * FROM users WHERE user_id = $user_id";
        $run_user = mysqli_query($con, $select_user);
        $row = mysqli_fetch_array($run_user);
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];


        echo "
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-sm-2'></div>
                <div class='col-sm-8'>
                    <div class='container-fluid comment'>
                        <div class='row head'>
                            <div class='col-sm-2'>
                            </div>
                            <div class='col-sm-2'>
                            By  $first_name $last_name
                            </div>
                            <div class='col-sm-2'>
                            At $time
                            </div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class='col-sm-2'>
                            </div>
                            <div class='col-sm-8 des'>
                            <strong>$comment</strong>
                            </div>
                            <div class='col-sm-2'></div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'></div>
            </div>
        </div>
        ";
    }
}
