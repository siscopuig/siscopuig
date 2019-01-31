<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- different media queries will be able to have the correct effect. Without this, viewing the page in the
         specific device would basically just display a zoomed-out version of your page   -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link href="../public/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../public/css/styles.css" rel="stylesheet" type="text/css">
    <link href="../public/css/queries.css" rel="stylesheet" type="text/css">

    <!-- <link href="../public/css/main-panel.css" rel="stylesheet" type="text/css">
    <!-- <link href="../public/css/custom-animation.css" rel="stylesheet" type="text/css"> -->

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700|Anton' rel='stylesheet' type='text/css'>-->

    <!-- favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="app/public/images/favicon.ico">-->
    <!-- <link rel="icon" href="../images/favicon.ico" type="image/icon">-->

    <!-- javascript files -->
    <script src="../public/js/jquery/jquery3.3.1.min.js"></script>

    <!-- title -->
    <title>Sisco Puig - Web Developer</title>

</head>
<!-- MAIN NAVIGATION -->
<body>
<!-- Header nav-->
<header>
    <div class="header">
        <a href="" class="header-logo" data-go="home" title="Home"></a>
        <button class="d-md-none mobile-menu-button" aria-label="Menu"><span></span></button>
    </div>
    <nav class="d-none d-md-block" role="navigation">
        <ul class="header-nav">
            <li><a class="active view-home" data-go="home" href="#">Profile</a></li>
            <li><a class="view-work" data-go="work" href="#">About me</a></li>
            <li><a class="view-blog" data-go="blog" href="#">Github</a></li>
            <li><a class="view-contact" data-go="contact" href="#">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- End Header nav-->
<!-- mobile menu -->
<div class="mobile-menu in" style="display: none;">
    <div class="mobile-menu-header">
        <a href="" class="header-logo" data-go="home" title="Home">Home</a>
        <button class="mobile-menu-close" aria-label="Close Menu"><span></span></button>
    </div>
    <nav role="navigation">
        <ul class="mobile-menu-navigation">
            <li><a class="active view-home" data-go="home" href="">Profile</a></li>
            <li><a class="view-work" data-go="work" href="">About me</a></li>
            <li><a class="view-blog" data-go="blog" href="">Github</a></li>
            <li><a class="view-contact" data-go="contact" href="">Contact</a></li>
        </ul>
  </nav>
</div>
<!-- End mobile menu -->

<script src="../public/js/home.js"></script>
</body>
</html>

