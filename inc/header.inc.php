<?php
include("./connect.php");
include("settings.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3318fdaaaf.js" crossorigin="anonymous" defer></script>
    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdLOSYkAAAAAMhX6ojn3hk-B6v3-NWkLb-YrdB-" async="false"></script>
    <!-- Theme Color for safari and mobile browsers -->
    <meta name="theme-color" content="#7E688C" />
    <!-- OG Meta Tags -->
    <meta property="og:title" content="<?=$wedding_name;?>'s Wedding Website">
    <meta property="og:description" content="Find out about our big day and respond to your invitation">
    <meta property="og:image" content="./assets/img/og-data/og-img.png">
    <meta property="og:url" content="">
    <meta property="og:type" content="Website">
    <!-- /OG Meta Tags -->

    <!-- Everything above this is for the head element. And is displayed on every web page -->