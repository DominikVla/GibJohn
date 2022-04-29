<?php
session_start();
// FileName: widerLearning.php
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
    /* Footer moved positions on this site*/
    .footer {
        margin: auto;
        width: 50%;
        padding: 10px;
    }
    html, body {margin: 0; height: 100%; overflow: hidden}
</style>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <?php include 'include/getNav.php';?>
        <!-- END MENU SIDEBAR-->

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
                                    <div class="au-card-inner">
                                    <div class="container">
                                    <div class="row header" style="text-align:center;color:green">
                                    </div>
                                    <table id="myTable" class="table table-striped" >  
                                            <thead>
                                              <!-- Values hardcoded for now -->  
                                              <tr>  
                                                <th>ID #</th>  
                                                <th>Tutor name</th>  
                                                <th>Assignment</th>  
                                              </tr>  
                                            </thead>  
                                            <tbody>  
                                              <tr>  
                                                <td>001</td>  
                                                <td>Bob</td>  
                                                <td>Geography</td>    
                                              </tr>  
                                              <tr>  
                                                <td>002</td>  
                                                <td>Charles</td>  
                                                <td>Biology</td>   
                                              </tr>  
                                              <tr>  
                                                <td>003</td>  
                                                <td>Phill</td>  
                                                <td>English</td>   
                                              </tr>  
                                           <tr>  
                                                <td>004</td>  
                                                <td>Bill</td>  
                                                <td>Computer Science</td>   
                                              </tr>  
                                              <tr>  
                                                <td>005</td>  
                                                <td>Rick</td>  
                                                <td>Music</td>  
                                              </tr>  
                                              <tr>  
                                                <td>006</td>  
                                                <td>James</td>  
                                                <td>Art</td>  
                                              </tr>  
                                          
                                           <tr>  
                                                <td>007</td>  
                                                <td>Ronald</td>  
                                                <td>Maths</td>   
                                              </tr>  
                                              <tr>  
                                                <td>008</td>  
                                                <td>Mike</td>  
                                                <td>Maths</td>   
                                              </tr>  
                                              <tr>  
                                                <td>009</td>  
                                                <td>Matt</td>  
                                                <td>Chemisty</td>    
                                              </tr>  
                                          
                                            <tr>  
                                                <td>010</td>  
                                                <td>Stephen</td>  
                                                <td>Computer Science</td>  
                                              </tr>  
                                              <tr>  
                                                <td>011</td>  
                                                <td>Sara</td>  
                                                <td>French</td>  
                                              </tr>  
                                              <tr>  
                                                <td>012</td>  
                                                <td>Bill</td>  
                                                <td>Computer Science</td>    
                                              </tr>
                                            </tbody>  
                                          </table> 
                                        </div>
                                    </div>
                                </div>
                        <div class="row footer">
                            <div class="col-md-12">
                                <?php include 'include/footer.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Main JS files -->
    <?php include 'include/jsLinks.php';?>

</body>
<script>
    //This code controls the entire table via it's ID (#myTable)
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>

</html>
<!-- end document-->
