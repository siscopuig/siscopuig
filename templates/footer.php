
<footer class="break-out footer-bg footer wht py-3">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-align-vertically mb-3 mb-lg-0">
                <div class="footer-mark-logo">
                </div>
                <div class="footer-mark">
                    <span class="title">Handcrafted by Sisco Puig</span>
                    <span class="subline">©Copyright 2014-2019 by Sisco Puig, all rights reserved.</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h4 class="d-lg-none collapsed" data-expand="#sitemap">Sitemap</h4>
                <nav id="sitemap" class="d-lg-block collapse pb-0" role="navigation">
                    <ul class="footer-sitemap">
                        <li><a data-go="home" href="" target="_blank" title="" rel="">Profile</a></li>
                        <li><a data-go="about me" href="" target="_blank" title="" rel="">About me</a></li>
                        <li><a data-go="contact" href="" target="_blank" title="" rel="">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-lg-3 footer-bottom">
                <h4 class="d-lg-none collapsed " data-expand="#social">Social</h4>
                <nav class="" role="navigation">
                    <ul id="social" class="d-lg-block collapse">
                        <li><a href="" target="_blank" title="" rel="">Github</a></li>
                        <li><a href="" target="_blank" title="" rel="">Facebook</a></li>
                        <li><a href="" target="_blank" title="" rel="">Twitter</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>



<!-- =======================  JavaScript  =========================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../public/js/home.js"></script>

<!-- Scrolling down to other parts of the page smoothly -->
<script src="../public/js/smooth-scroll.min.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]', {
	    speed: 600
    });
</script>

<!-- Headroom js - Hide header when scrolling down, show up scrolling up -->
<!-- https://cdnjs.com/libraries/headroom -->
<script src="../public/js/headroom.min.js"></script>
<script src="../public/js/jQuery.headroom.js"></script>
<script>
    $(document).ready(function() {
        $(".header").clone().appendTo("#headroom"),
        $("#headroom").headroom({
            offset: 600,
            tolerance: {
                up: 20,
                down: 0
            }
        })
    });
</script>

<!-- <script async="" src="../public/js/lazysizes.min.js"></script> -->


<!---->
<!---->
<!-- Google Analytics Please, don't copy this -->
<!--<script>-->
<!--	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
<!--	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
<!--	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
<!--	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->
<!--	-->
<!--	ga('create', 'UA-55331708-1', 'auto');-->
<!--	ga('send', 'pageview');-->
<!--</script>-->
</body>
</html>