
<footer class="break-out footer-bg footer wht py-3">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-align-vertically mb-3 mb-md-3 mb-lg-0">
                <div class="footer-mark-logo">
                </div>
                <div class="footer-mark">
                    <span class="title">Handcrafted by Sisco Puig</span>
                    <span class="subline">©Copyright 2014-2019 by Sisco Puig, all rights reserved.</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h4 class="d-lg-none collapsed" data-expand="#sitemap">Sitemap</h4>
                <nav id="sitemap" class="d-lg-block collapse pb-0">
                    <ul class="footer-sitemap">
                        <li><a data-go="home" href="<?php echo BASE_URL;?>" target="_blank" title="" rel="">Profile</a></li>
                        <li><a data-go="aboutme" href="<?php echo BASE_URL;?>#aboutme" target="_blank" title="" rel="">About me</a></li>
                        <li><a data-go="contact" href="<?php echo BASE_URL;?>contact.php" target="_blank" title="" rel="">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-lg-3 footer-bottom">
                <h4 class="d-lg-none collapsed " data-expand="#social">Social</h4>
                <nav>
                    <ul id="social" class="d-lg-block collapse pb-0">
                        <li><a href="#" target="_blank" title="" rel="">Github</a></li>
                        <li><a href="#" target="_blank" title="" rel="">Facebook</a></li>
                        <li><a href="#" target="_blank" title="" rel="">Twitter</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<!-- =======================  JavaScript  =========================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo BASE_URL;?>assets/js/jquery/jquery3.3.1.min.js"></script>
<!-- Headroom js - Hide header when scrolling down, show up scrolling up -->
<!-- https://cdnjs.com/libraries/headroom -->
<script src="<?php echo BASE_URL;?>assets/js/headroom.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/jquery/jQuery.headroom.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/application.js"></script>
<!-- Scrolling down to other parts of the page smoothly -->
<script src="<?php echo BASE_URL;?>assets/js/smooth-scroll.min.js"></script>
<script>
	let scroll = new SmoothScroll('a[href*="#"]', {
	    speed: 600
    });
</script>

<!-- Google Analytics Please, don't copy this -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-55331708-1', 'auto');
	ga('send', 'pageview');
</script>
</body>
</html>