<?php
include("includes/arrays.php");

include("setData/setData.php");
?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title; ?></title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <div id="banner">
            <a href="index.php" title="Strona Główna">
                <img src="img/banner.jpg" alt="tło">
            </a>
        </div>

        <div id="nav">
            <?php include('includes/nav.php'); ?>

        </div> <!-- nav --><br>

        
        <div class="content">