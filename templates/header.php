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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700|Anton' rel='stylesheet' type='text/css'>-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>-->

    <!-- favicon -->
    <!--    <link rel="shortcut icon" type="image/x-icon" href="--><!--app/public/images/favicon.ico">-->
    <!--    <link rel="icon" href="../images/favicon.ico" type="image/icon">-->

    <script src="../public/js/jquery/jquery3.3.1.min.js"></script>


    <title>Sisco Puig - Web Developer</title>

</head>

<!-- MAIN NAVIGATION -->
<body>
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

    <!-- Main panel -->
    <div class="main-panel">
        <div class="linear-gradient">
            <div class="container-fluid">
                <div class="poster-home flex-main-container">
                    <div class="flex-left-container aligner">
                        <div class="flex-half-container">
                            <h1 class="poster-home-header">
                                <span>Lorem ipsum dolor sit amet,</span>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </h1>
                            <p class="text-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>

                <div class="flex-right-container poster-home-image">
                    <picture class="laptop">
                        <source
                            srcset="../public/images/poster/laptop-600x348.png"
                            type="image/png" >
                        <img
                            src="../public/images/poster/laptop-600x348.png"
                            type="image/png"
                            alt="">
                    </picture>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Main panel   -->
    <!-- What I do well -->
    <div>

    </div>

    <script src="../public/js/home.js"></script>
</body>
</html>