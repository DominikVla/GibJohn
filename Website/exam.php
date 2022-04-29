<?php
session_start();
// FileName: exam.php
if($_SESSION["GibJohnLogged(XvE54F2)"] != true){
    echo 'not logged in';
    header("Location: login.php");
    exit;
}
include 'include/cookieCheck.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head> <?php include 'include/header.php'; ?>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <style type="text/css">
        html,
        body {
            margin: 0;
            height: 100%;
            overflow: hidden
        }
        input[type=text], textarea, textarea:focus {
            background-color: #d1dbdb;
            outline-color: black;
            outline-style: auto;
            outline-offset: 1.5px;
        }
        .long {
            background-color: #d1dbdb;
            outline-color: black;
            outline-style: auto;
            outline-offset: 1.5px;
            width: 600px;
            height: 100px;
        }
    </style>
    <body class="animsition" style="margin:20px auto;">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR--> 
            <?php include 'include/getNav.php';?>
            <!-- END MENU SIDEBAR-->
            <!-- PAGE CONTAINER-->
            <div class="page-container" id="Main">
                <!-- HEADER DESKTOP--> 
                <?php include 'include/topBar.php'; ?>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div>
                                    <div class="au-card chart-percent-card" id="Card">
                                        <div class="au-card-inner">
                                            <div class="container">
                                                <!-- Question Form -->
                                                <form action="sendResults.php" method="post">
                                                    <h3> Support Exam Quiz </h3>
                                                    <label>Do you feel distracted during class?</label><br>
                                                    <input type="text" name="question1" placeholder="Answer" maxlength="10"><br>
                                                    <label>Do you think than you need extra support in class?</label><br>
                                                    <input type="text" name="question2" placeholder="Answer" maxlength="10"><br>
                                                    <label>Do you feel that the work is too difficult for you?</label><br>
                                                    <input type="text" name="question3" placeholder="Answer" maxlength="10"><br>
                                                    <label>Do you think that there's something wrong with the ways of teaching?</label><br>
                                                    <textarea rows="4" cols="75" name="question4" placeholder="Answer" maxlength="280"></textarea><br>
                                                    <label>How can we assist?</label><br>
                                                    <textarea rows="4" cols="75" name="question5" placeholder="Answer" maxlength="280"></textarea><br>
                                                    <input type="submit" value="Submit Test" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"> <?php include 'include/footer.php'; ?> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->

                <!-- END PAGE CONTAINER-->
            </div>
        </div>
        <!-- Main JS files--> 
        <?php include 'include/jsLinks.php';?>
    </body>
</html>
<!-- end document-->