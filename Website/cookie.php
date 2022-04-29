<?php
session_start();
?>
<!-- FileName: cookie.php -->
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="index.css">
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
                                            <h1> This Website Uses Cookies! </h1>
                                            <p> This site uses cookies for accessibility settings (Themes). To opt out of cookies head to <a href="deleteCookie.php">this link</a> or using the account dropdown, select 'Delete Cookies'</p>
                                            <button type="button" class="btn btn-success"onclick="cookieAccept()">Accept</button>
                                            <form method="post">
                                                <br><input type="submit" value="Decline" class="btn btn-danger" name="denied">
                                            </form>
                                            <?php
                                            // Gets the values from the form and sets the session variable Cookiepop as "stop" disabling all cookies
                                            if(isset($_POST['denied'])) {
                                                $_SESSION['Cookiepop'] = "stop";
                                                // JS redirect | Something went wrong with header()
                                                echo "<script> window.location.replace('learningresources.php'); </script>";
                                            }
                                            ?>
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
<script type="text/javascript">
    // Function that creates a cookie to enable all cookies
    function cookieAccept() {
        document.cookie = "Acceptance= Accepted; expires=Thu, 18 Dec 2029 12:00:00 UTC";
        window.location.replace("learningresources.php");
    }
</script>
<script>
    // Script that controls entire table
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>
<!-- end document-->