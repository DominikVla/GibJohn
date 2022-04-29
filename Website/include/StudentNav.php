        <!-- FileName: StudentNav.php -->
        <aside class="menu-sidebar d-none d-lg-block" id="Navigation">
            <div class="logo" id="logo">
                <a href="#">
                    <h3 class="" id="siteLogo"> GibJohn Tutoring </h3> <p>v1.5.2</p>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="LearningResources.php">
                                <i class="bi bi-book"></i></i>Learning Resources</a>
                        </li>
                        <li>
                            <a href="widerLearning.php">
                                <i class="bi bi-map"></i></i>Wider Learning</a>
                        </li>
                        <li>
                            <a href="supportExam.php">
                                <i class="bi bi-question-circle"></i></i>Support Exam</a>
                        </li>
                        <li>
                            <a href="tools.php">
                                <i class="bi bi-wrench"></i>Learning Tools</a>
                        </li>
                        <li>
                            <a href="PointStore.php">
                                <i class="far fa-check-square"></i>Point Store</a>
                        </li>
                    </ul>
                </nav>
                <button id="lightMode" onclick="lightMode()" style="width: 50px;position: relative;bottom: -600px;"><i class="bi bi-brightness-high"></i></button>
                <button id="darkMode" onclick="darkMode()" style="width: 50px;position: relative;bottom: -600px;right: -170px;"> <i class="bi bi-moon"></i> </button>
            </div>
        </aside>
    <script type="text/javascript">
        // Function that sets all all Class Names to the dark versions of them
        function darkMode() {
            document.getElementById('Card').className = "au-card-dark chart-percent-card-dar";
            document.getElementById('logo').className = "logo-dark";
            document.getElementById('Navigation').className = "menu-sidebar-dark d-none d-lg-block";
            document.getElementById('topHeader').className = "header-desktop-dark";
            document.getElementById('accDisplay').className = "account-wrap-dark";
            document.getElementById('accountDropdown').className = "account-dropdown-dark js-dropdown";
            document.getElementById('Main').className = "page-container-dark";
            document.getElementById('myTable').className = "table table-striped-dark";
            document.getElementById('siteLogo').className = "h3-dark";
            document.getElementById('userName').className = "account-item account-item-dark clearfix js-item-menu"
            document.getElementById('barName').className = "name-dark";
            document.getElementById('account').className = "account-dropdown__item-dark";
            document.getElementById('settings').className = "account-dropdown__item-dark";
            document.getElementById('billing').className = "account-dropdown__item-dark";
            document.getElementById('logout').className = "account-dropdown__footer-dark";
            document.getElementById('myTable_filter').className = "dataTables_filter-dark";
            document.getElementById('myTable_info').className = "dataTables_info-dark";
            document.getElementById('darkMode').className = "button-dark";
            document.getElementById('lightMode').className = "button-dark";
        }
        // Functoin that sets all Class NAmes to the light version (default) of them
        function lightMode() {
            document.getElementById('Card').className = "au-card chart-percent-card";
            document.getElementById('logo').className = "logo";
            document.getElementById('Navigation').className = "menu-sidebar d-none d-lg-block";
            document.getElementById('topHeader').className = "header-desktop";
            document.getElementById('accDisplay').className = "account-wrap";
            document.getElementById('accountDropdown').className = "account-dropdown js-dropdown";
            document.getElementById('Main').className = "page-container";
            document.getElementById('myTable').className = "table table-striped";
            document.getElementById('siteLogo').className = "";
            document.getElementById('userName').className = "account-item clearfix js-item-menu";
            document.getElementById('barName').className = "name";
            document.getElementById('account').className = "account-dropdown__item";
            document.getElementById('settings').className = "account-dropdown__item";
            document.getElementById('billing').className = "account-dropdown__item";
            document.getElementById('logout').className = "account-dropdown__footer";
            document.getElementById('myTable_filter').className = "dataTables_filter";
            document.getElementById('myTable_info').className = "dataTables_info";
            document.getElementById('darkMode').className = "";
            document.getElementById('lightMode').className = "";
        }
    </script>