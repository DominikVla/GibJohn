        <!-- FileName: getNav -->
        <!-- MENU SIDEBAR-->
        <?php 
        // switches between navBars depending on user privalage
        $_SESSION['Privalage'] = 'Tutor';
        switch ($_SESSION['Privalage']) {
            case 'Tutor':
                include 'include/TeacherNav.php';
                break;
            case 'Student':
                include 'include/StudentNav.php';
                break;
            default:
                $_SESSION['errorMsg'] = "An error has occurred";
                header('Location: login.php');
        }
        ?>
        <!-- END MENU SIDEBAR-->