<?php
$Geography = 0;
$Maths = 0;
$Physics = 0;
$History = 0;
$English = 0;
$Economy = 0;
$Culture = 0;
$Current_Affairs = 0;
$General_Science = 0;
$Literature = 0;
$PrevYearQuestion = 0;
$Reasoning = 0;
$Aptitude = 0;
?>
<script>
    document.getElementById("Geography").onclick = function() {

        if (document.getElementById("Geography").style.backgroundColor != "green") {
            document.getElementById("Geography").style.backgroundColor = "green";
            $Geography = 1;
        } else {
            document.getElementById("Geography").style.backgroundColor = "";
            $Geography = 0;
        }


    }
    document.getElementById("Maths").onclick = function() {
        <?php if ($Maths == 1) {
            $Maths = 0;
        } else $Maths = 1  ?>
        if (document.getElementById("Maths").style.backgroundColor != "green")
            document.getElementById("Maths").style.backgroundColor = "green";
        else
            document.getElementById("Maths").style.backgroundColor = "";
    }

    document.getElementById("Physics").onclick = function() {
        <?php if ($Physics == 1) {
            $Physics = 0;
        } else $Physics = 1  ?>
        if (document.getElementById("Physics").style.backgroundColor != "green")
            document.getElementById("Physics").style.backgroundColor = "green";
        else
            document.getElementById("Physics").style.backgroundColor = "";
    }

    document.getElementById("History").onclick = function() {
        <?php if ($History == 1) {
            $History = 0;
        } else $History = 1  ?>
        if (document.getElementById("History").style.backgroundColor != "green")
            document.getElementById("History").style.backgroundColor = "green";
        else
            document.getElementById("History").style.backgroundColor = "";
    }

    document.getElementById("English").onclick = function() {
        <?php if ($English == 1) {
            $English = 0;
        } else $English = 1  ?>
        if (document.getElementById("English").style.backgroundColor != "green")
            document.getElementById("English").style.backgroundColor = "green";
        else
            document.getElementById("English").style.backgroundColor = "";
    }

    document.getElementById("Economy").onclick = function() {
        <?php if ($Economy == 1) {
            $Economy = 0;
        } else $Economy = 1  ?>
        if (document.getElementById("Economy").style.backgroundColor != "green")
            document.getElementById("Economy").style.backgroundColor = "green";
        else
            document.getElementById("Economy").style.backgroundColor = "";
    }
    document.getElementById("Culture").onclick = function() {
        <?php if ($Culture == 1) {
            $Culture = 0;
        } else $Culture = 1  ?>
        if (document.getElementById("Culture").style.backgroundColor != "green")
            document.getElementById("Culture").style.backgroundColor = "green";
        else
            document.getElementById("Culture").style.backgroundColor = "";
    }

    document.getElementById("Current Affairs").onclick = function() {
        <?php if ($Current_Affairs == 1) {
            $Current_Affairs = 0;
        } else $Current_Affairs = 1  ?>
        if (document.getElementById("Current Affairs").style.backgroundColor != "green")
            document.getElementById("Current Affairs").style.backgroundColor = "green";
        else
            document.getElementById("Current Affairs").style.backgroundColor = "";
    }

    document.getElementById("General Science").onclick = function() {
        <?php if ($General_Science == 1) {
            $General_Science = 0;
        } else $General_Science = 1  ?>
        if (document.getElementById("General Science").style.backgroundColor != "green")
            document.getElementById("General Science").style.backgroundColor = "green";
        else
            document.getElementById("General Science").style.backgroundColor = "";
    }

    document.getElementById("Literature").onclick = function() {
        <?php if ($Literature == 1) {
            $Literature = 0;
        } else $Literature = 1  ?>
        if (document.getElementById("Literature").style.backgroundColor != "green")
            document.getElementById("Literature").style.backgroundColor = "green";
        else
            document.getElementById("Literature").style.backgroundColor = "";
    }

    document.getElementById("PrevYearQuestion").onclick = function() {
        <?php if ($PrevYearQuestion == 1) {
            $PrevYearQuestion = 0;
        } else $PrevYearQuestion = 1  ?>
        if (document.getElementById("PrevYearQuestion").style.backgroundColor != "green")
            document.getElementById("PrevYearQuestion").style.backgroundColor = "green";
        else
            document.getElementById("PrevYearQuestion").style.backgroundColor = "";
    }

    document.getElementById("Reasoning").onclick = function() {
        <?php if ($Reasoning == 1) {
            $Reasoning = 0;
        } else $Reasoning = 1  ?>
        if (document.getElementById("Reasoning").style.backgroundColor != "green")
            document.getElementById("Reasoning").style.backgroundColor = "green";
        else
            document.getElementById("Reasoning").style.backgroundColor = "";
    }

    document.getElementById("Aptitude").onclick = function() {
        <?php if ($Aptitude == 1) {
            $Aptitude = 0;
        } else $Aptitude = 1  ?>
        if (document.getElementById("Aptitude").style.backgroundColor != "green")
            document.getElementById("Aptitude").style.backgroundColor = "green";
        else
            document.getElementById("Aptitude").style.backgroundColor = "";
    }
</script>