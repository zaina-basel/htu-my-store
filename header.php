<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo isset($this->title) ? $this->title : 'HTU Store';?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="<?php echo APP_URL;?>public/images/logo24.png">
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">
        <!-- Custom JS -->
        <link href="<?php echo APP_URL;?>public/css/sidebar-menu.css" rel="stylesheet">
        <link href="<?php echo APP_URL;?>public/css/mystore.css" rel="stylesheet"> 
    </head>
    <body>
        <div id="main">
        <?php 
            require 'navbar.php';
        ?>
        <div id="wrapper" class="">
        