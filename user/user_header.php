<?php
include("../config/configure.php");
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="user_home.php" class="navbar-brand">LS</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                $user = $_SESSION['email'];


                $get_user = "select * from users where email = '$user' and user_type != 'admin'";
                $run_user = mysqli_query($con, $get_user);
                if (!$run_user) {
                    echo ("<script>alert('Something went wrong!')</script>");
                } else {
                    $user_row = mysqli_fetch_array($run_user);
                    $user_id = $user_row['user_id'];
                    $first_name = $user_row['first_name'];
                    $last_name = $user_row['last_name'];
                }
                ?>

                <li><a href='user_profile.php?<?php echo ("user_id=$user_id") ?>'><?php echo ("$first_name"); ?></a></li>
                <li><a href='user_home.php'>Home</a></li>
                <li><a href='user_contribute.php?<?php echo ("user_id=$user_id") ?>'>Contribute</a></li>
                <li><a href='user_prof_update.php?<?php echo ("user_id=$user_id") ?>'>Update Profile</a></li>
                <li><a href='practice.php?<?php echo ("user_id=$user_id") ?>'>Practice</a></li>
                <li><a href='logout.php?<?php echo ("user_id=$user_id") ?>'>Logout </a></li>
                <!-- <li><a href='messeges_info.php?<?php echo ("stu_id=$user_id") ?>'>Messages &nbsp;<span class='badge badge-secondary'><?php echo ($num_msgs); ?></span></a></li> -->
                <li><a href="feedback.php">Give Feedback</a></li>
            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <form action="results.php" class="navbar-form navbar-left" method="get">
                        <div class="form-group">
                            <input type="text" class="from-control" name="user_query" placeholder="Search Posts">
                        </div>
                        <button type="submit" class="btn btn-info" name="search">Search</button>
                    </form>
                </li>
            </ul> -->
        </div>
    </div>
</nav>