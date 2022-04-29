<?php
session_start();
// FileName: StudentTracker.php
if($_SESSION["GibJohnLogged(XvE54F2)"] != true){
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

<body class="animsition" style="margin:20px auto;">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <?php include 'include/getNav.php';?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container"id="Main">
            <!-- HEADER DESKTOP-->
            <?php include 'include/topBar.php'; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div >
                                <div class="au-card chart-percent-card" id="Card">
                                    <div class="au-card-inner">
                                    <div class="container">
                                    <div class="row header" style="text-align:center;color:green">
                                    </div> 
                                                <?php include 'include/studentTable.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <?php include 'include/footer.php'; ?>
                            </div>
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
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>
<!-- end document-->
