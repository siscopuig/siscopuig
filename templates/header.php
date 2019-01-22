<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!-- different media queries will be able to have the correct effect. Without this, viewing the page in the
         specific device would basically just display a zoomed-out version of your page   -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link href="../public/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../public/css/main-panel.css" rel="stylesheet" type="text/css">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'
          rel='stylesheet' type='text/css'>
    <!--    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700|Anton' rel='stylesheet' type='text/css'>-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>-->

    <!-- favicon -->
    <!--    <link rel="shortcut icon" type="image/x-icon" href="-->
    <!--app/public/images/favicon.ico">-->
    <!--    <link rel="icon" href="../images/favicon.ico" type="image/icon">-->

    <script src="../public/js/jquery/jquery3.3.1.min.js"></script>

    <title>Sisco Puig - Web Developer</title>

</head>

<!-- MAIN NAVIGATION -->
<body>
<!-- Header nav-->
<header class="header-container">
    <a class="header-logo" href="#" title="Sisco Puig home page"></a>
    <nav class="" role="navigation">
        <!--            <input type="checkbox" id="toggle">-->
        <!--            <label for="toggle" class="toggle" onclick></label>-->
        <ul class="header-nav">
            <li><a class="active" href="#">Profile</a></li>
            <li><a href="#">About me</a></li>
            <li><a href="#">Github</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- End Header nav-->

<!-- Poster home  -->
<div class="poster-home linear-gradient">
    <div class="container-fluid">
        <div class="poster-home-flex-parent">
            <div class="poster-home-flex-left">
                <h1 class="poster-h1-text">
                    <span>Lorem ipsum dolor sit amet,</span>
                    <span>Lorem ipsum dolor sit amet.</span>
                </h1>
                <p class="text-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="poster-home-flex-right poster-home-image">
                <picture class="laptop">
                    <source
                            srcset="../public/images/poster/laptop-800x464.png"
                            type="image/png">
                    <img
                            src="../public/images/poster/laptop-800x464.png"
                            type="image/png"
                            alt="">
                </picture>
            </div>
        </div>
    </div>
</div>
<!-- Poster home  -->

<!-- What I do well -->
<div class="widw-container">
    <div class="container-fluid">
        <div class="widw-header pt-lg-8">
            <h2 class="headline-h2">What I do well</h2>
        </div>
        <div class="widw-flex-parent">
            <div class="widw-flex-child">
                <div class="vector-code"></div>
                <h3 class="hl-2-text">Code</h3>
                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="widw-flex-child">
                <div class="vector-data"></div>
                <h3 class="hl-2-text">Data</h3>
                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="widw-flex-child">
                <div class="vector-deployment"></div>
                <h3 class="hl-2-text">Deployment</h3>
                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="widw-flex-child">
                <div class="vector-environment"></div>
                <h3 class="hl-2-text">Environment</h3>
                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</div>
<!-- End What I do well -->

<!-- Principles -->
<div class="principles">
    <div class="container-fluid">
        <div class="principles-flex-parent pt-lg-8">
            <div class="principles-col-1 mb-lg-0 col-lg-3">
                <h2 class="principles-header">Principles</h2>
            </div>
            <div class="principles-col-2">
                <div class="mb-lg-4">
                    <h3 class="hl-3-text">Lorem ipsum dolor sit amet, consectetur</h3>
                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        pulvinar lorem et nibh egestas congue.</p>
                </div>
                <div class="mb-lg-4">
                    <h3 class="hl-3-text">Lorem ipsum dolor sit amet, consectetur</h3>
                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        pulvinar lorem et nibh egestas congue.</p>
                </div>
                <div class="mb-lg-4">
                    <h3 class="hl-3-text">Lorem ipsum dolor sit amet, consectetur</h3>
                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        pulvinar lorem et nibh egestas congue.</p>
                </div>


            </div>
            <div class="principles-col-2">
                <div class="mb-lg-4">
                    <h3 class="hl-3-text">Lorem ipsum dolor sit amet, consectetur</h3>
                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        pulvinar lorem et nibh egestas congue.</p>
                </div>
                <div class="mb-lg-4">
                    <h3 class="hl-3-text">Lorem ipsum dolor sit amet, consectetur</h3>
                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        pulvinar lorem et nibh egestas congue.</p>
                </div>
                <div class="mb-lg-4">
                    <h3 class="hl-3-text">Lorem ipsum dolor sit amet, consectetur</h3>
                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        pulvinar lorem et nibh egestas congue.</p>
                </div>
            </div>
    </div>
</div>
<!-- End Principles -->

<!-- About me -->
<div class="aboutme">
    <div class="container-fluid">
        <div class="flex-row pt-lg-8">
            <div class="flex-row-1 mb-lg-4">
                <picture>
                    <!-- <source media="(min-width: 1200px)" srcset="img_pink_flowers.jpg">
                    <source media="(min-width: 465px)" srcset="img_white_flower.jpg"> -->
                    <img src="../public/images/aboutme-profile-circle-grey.jpeg" width="95px" height="95px">                    
                </picture>
            </div>
            <div class="flex-row-2 mb-lg-4">
                <h3>Who is this guy?</h3>
            </div>
            <div class="flex-row-3 mb-lg-4">
                <span class="impressions first hidden" style="opacity: 0;">I like to travel and explore mysterious places.</span>
                <span class="impressions second hidden" style="opacity: 0;">I transform my thoughts into reality.</span>
                <span class="impressions third hidden" style="opacity: 0;">I ride my bike whatever I go.</span>
                <span class="mpressions last active" style="opacity: 1;">I enjoy great music and I love science fiction.</span>
            </div>
        </div>
        <div class="flex-present">
            <div class="present-box">
                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt. Consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam placeat numquam omnis sit consectetur.</p>
            </div>
            <div class="present-box">
                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt. Consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam placeat numquam omnis sit consectetur.</p>
            </div>
        </div>
    </div>
</div>


</body>
</html>