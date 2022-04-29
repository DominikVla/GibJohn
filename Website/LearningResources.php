
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
                                    <div class="row header" style="text-align:center;color:green">
                                    </div>
                                    <table id="myTable" class="table table-striped" >  
                                            <thead>
                                            <!-- Hard Coded for now -->  
                                              <tr>  
                                                <th>ID #</th>  
                                                <th>Tutor name</th>  
                                                <th>Assignment</th>  
                                                <th>Points</th>  
                                              </tr>  
                                            </thead>  
                                            <tbody>  
                                              <tr>  
                                                <td>001</td>  
                                                <td>Bob</td>  
                                                <td>Geography</td>  
                                                <td>10</td>  
                                              </tr>  
                                              <tr>  
                                                <td>002</td>  
                                                <td>Charles</td>  
                                                <td>Biology</td>  
                                                <td>5</td>  
                                              </tr>  
                                              <tr>  
                                                <td>003</td>  
                                                <td>Phill</td>  
                                                <td>English</td>  
                                                <td>9</td>  
                                              </tr>  
                                           <tr>  
                                                <td>004</td>  
                                                <td>Bill</td>  
                                                <td>Computer Science</td>  
                                                <td>5</td>  
                                              </tr>  
                                              <tr>  
                                                <td>005</td>  
                                                <td>Rick</td>  
                                                <td>Music</td>  
                                                <td>7</td>  
                                              </tr>  
                                              <tr>  
                                                <td>006</td>  
                                                <td>James</td>  
                                                <td>Art</td>  
                                                <td>2</td>  
                                              </tr>  
                                          
                                           <tr>  
                                                <td>007</td>  
                                                <td>Ronald</td>  
                                                <td>Maths</td>  
                                                <td>4</td>  
                                              </tr>  
                                              <tr>  
                                                <td>008</td>  
                                                <td>Mike</td>  
                                                <td>Maths</td>  
                                                <td>15</td>  
                                              </tr>  
                                              <tr>  
                                                <td>009</td>  
                                                <td>Matt</td>  
                                                <td>Chemisty</td>  
                                                <td>5</td>  
                                              </tr>  
                                          
                                            <tr>  
                                                <td>010</td>  
                                                <td>Stephen</td>  
                                                <td>Computer Science</td>  
                                                <td>13</td>  
                                              </tr>  
                                              <tr>  
                                                <td>011</td>  
                                                <td>Sara</td>  
                                                <td>French</td>  
                                                <td>12</td>  
                                              </tr>  
                                              <tr>  
                                                <td>012</td>  
                                                <td>Bill</td>  
                                                <td>Computer Science</td>  
                                                <td>2</td>  
                                              </tr>
                                            </tbody>  
                                          </table> 
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
