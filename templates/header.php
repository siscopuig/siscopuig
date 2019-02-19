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
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/images/logo/logo-black_30x32.ico">
    <link rel="icon" href="../public/images/logo/logo-black_30x32.ico" type="image/icon">
    
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
