<!-- FileName: topBar.php -->
<header class="header-desktop" id="topHeader">
   <div class="section__content section__content--p30">
      <div class="container-fluid">
         <div class="header-wrap">
            <div class="header-button">
               <div class="account-wrap" id="accDisplay">
                  <div class="account-item clearfix js-item-menu" id="userName">
                     <div class="image">
                        <i class="bi bi-person-circle" style="font-size: 35px;"></i>
                     </div>
                     <div class="content" style="right: 50px;">
                        <a class="js-acc-btn" href="#"><?php //print_r ($_SESSION['name']);?></a>
                     </div>
                     <div class="account-dropdown js-dropdown" id="accountDropdown">
                        <div class="info clearfix">
                           <div class="image">
                              <a href="#">
                              <i class="bi bi-person-circle" style="font-size: 35px;"></i>
                              </a>
                           </div>
                           <div class="content">
                              <h5 class="name" id="barName">
                                 <a href="#"><?php //echo $_SESSION['name'];?></a>
                              </h5>
                              <span class="email"><?php echo $_SESSION['email'];?></span>
                           </div>
                        </div>
                        <div class="account-dropdown__body">
                           <div class="account-dropdown__item" id="account">
                              <a href="deleteCookie.php">
                              <i class="bi bi-trash"></i></i>Delete Cookies</a>
                           </div>
                        </div>
                        <div class="account-dropdown__footer" id="logout">
                           <a href="logout.php">
                           <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>