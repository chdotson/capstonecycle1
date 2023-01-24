<?php

//Session Info
session_start();
$_SESSION['ID'] = $_SESSION['ID'];
$_SESSION['user'] = $_SESSION['user'];
$_SESSION['status'] = $_SESSION['status'];

//COPY ALL OF THE CODE AFTER YOUR INITIAL COMMENTS
//This is the initial header include file with error reporting

//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors','1');

//Current File
$currentfile = basename($_SERVER['SCRIPT_FILENAME']);

//Include Files
require_once "functions.php";
require_once "connect.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHD</title>
    <link href="projectstylesheet.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tiny.cloud/1/5o7mj88vhvtv3r2c5v5qo4htc088gcb5l913qx5wlrtjn81y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<header>
    <h1>Coastal Carolina University</h1>
    <nav>
        <?php

        ?>
    </nav>
</header>
<main>
    <h2><?php echo $pagename;?></h2>