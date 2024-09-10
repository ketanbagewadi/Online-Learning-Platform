<!DOCTYPE html>
<html>
<?php session_start();
include("user_header.php") ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Mutliple Choice Question</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/insert_descriptive.css">
</head>

<style>
    .tag label {
        margin-left: 8px;
    }

    input.cb {
        width: 15px;
        height: 20px;
    }
</style>

<body>

    <div class="container-fluid reg-form">
        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
            <h2>Create New Multiple Question</h2>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="firstName" class="col-sm-2 control-label">Question</label>
                <div class="col-sm-7">
                    <input type="text" id="question" name="mcq_question" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="des_question" class="col-sm-2 control-label">Option 1</label>
                <div class="col-sm-6">
                    <input type="text" id="option" name="option_1" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="des_question" class="col-sm-2 control-label">Option 2</label>
                <div class="col-sm-6">
                    <input type="text" id="option" name="option_2" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="des_question" class="col-sm-2 control-label">Option 3</label>
                <div class="col-sm-6">
                    <input type="text" id="option" name="option_3" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="des_question" class="col-sm-2 control-label">Option 4</label>
                <div class="col-sm-6">
                    <input type="text" id="option" name="option_4" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="des_question" class="col-sm-2 control-label">Answer [1 to 4]</label>
                <div class="col-sm-3">
                    <input type="number" id="option" name="mcq_answer" class="form-control" min='1' max='4' required>
                </div>

            </div>

            <div class="container-fluid form-group">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2 tag" id="Geography">
                        <!-- <div class="box">Geography</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Geography"><label>Geography</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="Maths">
                        <!-- <div class="box">Maths</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Maths"><label>Maths</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="Physics">
                        <!-- <div class="box">Physics</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Physics"><label>Physics</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="History">
                        <!-- <div class="box">History</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="History"><label>History</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2 tag" id="English">
                        <!-- <div class="box">English</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="English"><label>English</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="Economy">
                        <!-- <div class="box">Economy</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Economy"><label>Economy</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="Culture">
                        <!-- <div class="box">Culture</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Culture"><label>Culture</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="Current Affairs">
                        <!--  <div class="box">Current Affairs</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Current_Affairs"><label>Current_Affairs</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2 tag" id="General Science">
                        <!-- <div class="box">General Science</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="General_Science"><label>General_Science</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="Literature">
                        <!-- <div class="box">Literature</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Literature"><label>Literature</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="PrevYearQuestion">
                        <!-- <div class="box">PrevYearQuestion</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="PrevYearQuestion"><label>PrevYearQuestion</label>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 tag" id="Reasoning">
                        <!-- <div class="box">Reasoning</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Reasoning"><label>Reasoning</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2 tag" id="Aptitude">
                        <!-- <div class="box">Aptitude</div> -->
                        <input type="checkbox" class="cb" name="check_list[]" value="Aptitude"><label>Aptitude</label>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>




            <center><button type="submit" class="btn btn-primary btn-block" name="sub_mcq_answer">Save Question & Answer</button></center>
        </form>
    </div>


</body>

<?php
include("../config/configure.php");

if (isset($_POST['sub_mcq_answer'])) {

    $question = htmlentities(mysqli_real_escape_string($con, $_POST['mcq_question']));
    $option_1 = htmlentities(mysqli_real_escape_string($con, $_POST['option_1']));
    $option_2 = htmlentities(mysqli_real_escape_string($con, $_POST['option_2']));
    $option_3 = htmlentities(mysqli_real_escape_string($con, $_POST['option_3']));
    $option_4 = htmlentities(mysqli_real_escape_string($con, $_POST['option_4']));
    $answer = htmlentities(mysqli_real_escape_string($con, $_POST['mcq_answer']));

    $creator_email =  $_SESSION['email'];

    $creator_select = "SELECT * from users where email='$creator_email' and user_type='creator'";
    $query = mysqli_query($con, $creator_select);
    $row = mysqli_fetch_array($query);
    $val = $row['user_id'];

    $insert_mcq = "INSERT INTO mcq (question, option_1, option_2, option_3, option_4, answer, creator_id)
                         VALUES ('$question','$option_1', '$option_2', '$option_3', '$option_4', '$answer', '$val')";
    $query = mysqli_query($con, $insert_mcq);
    if ($query) {
        echo "<script>alert('Question added')</script>";
    } else {
        echo "<script>alert('Something wrong! try again')</script>";
        exit();
    }

    $select = "SELECT MAX(q_id) from mcq";
    $query = mysqli_query($con, $select);
    $row = mysqli_fetch_array($query);
    $q_id = $row[0];

    foreach ($_POST['check_list'] as $selected) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'mcq', '$selected' )";
        $query = mysqli_query($con, $insert);
    }
}
?>