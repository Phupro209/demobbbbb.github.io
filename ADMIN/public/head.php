<?php
require('../core/@connect.php'); 
if(empty($_SESSION['username'])){header('Location: /admin/login');exit;}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative">
  <title></title>
  <!-- Favicon -->
  <link rel="icon" href="https://www.aragon.cm38.de/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/ADMIN/vendor/css/nucleo.css?<?=rand(1,9999999);?>" type="text/css">
  <link rel="stylesheet" href="/ADMIN/vendor/css/all.min.css?<?=rand(1,9999999);?>" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="/ADMIN/vendor/css/dataTables.bootstrap4.min.css?<?=rand(1,9999999);?>">
  <link rel="stylesheet" href="/ADMIN/vendor/css/buttons.bootstrap4.min.css?<?=rand(1,9999999);?>">
  <link rel="stylesheet" href="/ADMIN/vendor/css/select.bootstrap4.min.css?<?=rand(1,9999999);?>">
  <!-- Argon CSS -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css?<?=rand(1,9999999);?>" id="theme-styles">
  <link rel="stylesheet" href="/ADMIN/vendor/css/argon.css?<?=rand(1,9999999);?>" type="text/css">
 

</head>