<!DOCTYPE html>
<html>
<?php session_start();
include("user_header.php")
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

<style>
    .margin {
        padding: 10px;
        margin-top: 40px;
        margin-left: 50px;
    }

    .first {
        padding: 10px;
        margin-left: 60px;
        margin-top: 40px;
    }

    .card {
        box-shadow: 10px 10px 5px grey;
    }

    .card:hover {
        box-shadow: 20px 20px 10px black;
    }

    .row_margin {
        margin-top: 20px;
    }

    .card-header {
        font-size: 18px;
        font-weight: bold;
    }

    .red {
        color: red;
        margin-left: 20%;
        font-size: 30px;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row center">
            <div class="card col-sm-3 text-center first" id="des">
                <div class="card-header">
                    Practice Descriptive Questions
                </div>
                <div class="card-body">
                    <p>Contains a question and Descriptive aswer</p>
                </div>
            </div>



            <div class="card col-sm-3 text-center margin" id="mcq">
                <div class="card-header">
                    Practice Mutliple Choice Question
                </div>
                <div class="card-body">
                    <p>Contains a question Four options and answer</p>
                </div>
            </div>



            <div class="card col-sm-3 text-center margin" id="tf">
                <div class="card-header">
                    Practice True/False Question
                </div>
                <div class="card-body">
                    <p>Contains a question and answer(True/False)</p>
                </div>
            </div>

            <div class="col-sm-1"></div>
        </div>

        <div class="row center row_margin">
            <div class="col-sm-1"></div>

            <div class="card col-sm-3 text-center margin" id="art">
                <div class="card-header">
                    Read Articles
                </div>
                <div class="card-body">
                    <p>Contains brief information about a topic</p>
                </div>
            </div>

        </div>

        <script>
            document.getElementById("des").onclick = function() {
                location.href = "practice_descriptive.php";
            }
            document.getElementById("mcq").onclick = function() {
                location.href = "practice_mcq.php";
            }
            document.getElementById("tf").onclick = function() {
                location.href = "practice_tf.php";
            }
            document.getElementById("art").onclick = function() {
                location.href = "read_articles.php";
            }
        </script>

</body>