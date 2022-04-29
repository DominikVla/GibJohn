<?php
// FileName: cookieCheck.php
if(!isset($_SESSION['Cookiepop'])){
    if(!isset($_COOKIE['Acceptance'])) {
        header ('Location: cookie.php');
    }
}
?>