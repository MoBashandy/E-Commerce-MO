<?php
session_start();
if (isset($_SESSION['UserName'])){
    include 'init.php';
    include $nav;
}else{
    header('Location: index.php');
}
?>