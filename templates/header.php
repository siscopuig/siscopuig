<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- different media queries will be able to have the correct effect. Without this, viewing the page in the
         specific device would basically just display a zoomed-out version of your page   -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link href="../public/css/header.css" rel="stylesheet" type="text/css">
    <!--    <link href="--><?php //echo BASE_URL; ?><!--app/public/css/nav.css" rel="stylesheet" type="text/css">-->
    <!--    <link href="--><?php //echo BASE_URL; ?><!--app/public/css/normalize.css" rel="stylesheet" type="text/css">-->

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700|Anton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

    <!-- favicon -->
    <!--    <link rel="shortcut icon" type="image/x-icon" href="--><?php //echo BASE_URL; ?><!--app/public/images/favicon.ico">-->
    <!--    <link rel="icon" href="../images/favicon.ico" type="image/icon">-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Sisco Puig - Web Developer</title>

</head>

<!-- BODY -->
<!-- MAIN NAVIGATION -->
<body class="site">
    <div class="main-wrap">
        <header id="header">
            <div class="header-container">
                <a class="header-logo" href="<?php echo BASE_URL;?>"><h1>siscopuig</h1></a>

                <nav class="nav-right">
                    <input type="checkbox" id="toggle">
                    <label for="toggle" class="toggle" onclick></label>

                    <ul class="menu">
                        <li><a href="<?php echo BASE_URL;?>aboutme.php">About me</a></li>
                        <li><a href="<?php echo BASE_URL;?>work.php">Work</a></li>
                        <li><a href="https://github.com/siscopuig/berryPHP">github</a></li>
                        <li><a href="<?php echo BASE_URL;?>contact.php">contact</a></li>
                    </ul>
                </nav>
        </header>