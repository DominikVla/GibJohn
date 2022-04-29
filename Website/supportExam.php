<?php
session_start();
// FileName: supportExam.php
if($_SESSION["GibJohnLogged(XvE54F2)"] != "Logged In true"){
    echo 'not logged in';
    header("Location: login.php");
    exit;
}
include 'include/cookieCheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php'; ?>
</head>

<style type="text/css">
    html, body {margin: 0; height: 100%; overflow: hidden}
</style>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <?php include 'include/getNav.php';?>
        <!-- END MENU SIDEBAR-->>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include 'include/topBar.php'; ?>
            <!-- HEADER DESKTOP-->
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                                <div class="au-card chart-percent-card">
                                    <div class='message'style='margin: auto; width: 30%;'>";
                                        <h3> You have a support exam to do! </h3>";
                                        <form action='exam.php' method='post' style='margin: auto; width: 60%;'>";
                                            <input type='submit' class='btn btn-primary' style='margin: auto; width: 60;' value='Take Exam'>";
                                        </form>";
                                    </div>";
                                </div>
                        <div class="row" style="margin: auto; width: 50%;">
                            <div class="col-md-12">
                                <?php include 'include/footer.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
