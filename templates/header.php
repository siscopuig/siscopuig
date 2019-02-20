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
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="../public/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../public/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../public/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../public/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../public/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../public/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../public/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../public/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../public/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../public/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512"  href="../public/images/favicons/android-icon-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../public/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../public/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../public/images/favicons/manifest.json">
    <link rel="mask-icon" href="../public/images/favicons/safari-pinned-tab.svg" color="#2243ff">
    <meta name="msapplication-TileColor" content="#040404">
    <meta name="msapplication-TileImage" content="../public/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- title -->
    <title>Sisco Puig - Web Developer</title>

</head>
<!-- MAIN NAVIGATION -->
<body>
<!-- Header nav-->
<header id="header" class="header">
    <a href="#" class="header-logo" data-go="home" title="Home"></a>        
    <nav class="d-none d-md-block">
        <ul class="header-nav">
            <li><a class="active view-home" data-go="home" href="index.php">Profile</a></li>
            <li><a class="view-work" data-go="work" data-scroll href="#aboutme">About me</a></li>
            <li><a class="view-blog" data-go="blog" href="#">Github</a></li>
            <li><a class="view-contact" data-go="contact" href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <button class="d-md-none mobile-menu-button" aria-label="Menu"><span></span></button>
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
<!-- headroom -->
<div id="headroom" class="d-none d-md-block headroom headroom--not-bottom headroom--not-top headroom--pinned">
</div>
<!-- End headroom -->
