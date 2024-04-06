<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-2 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-1">
	<div class="c-postfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<p class="c-copyright c-font-oswald c-font-14">
					Copyright &copy; JANGO Inc.
					</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="c-socials">
						<li><a href="https://twitter.com/" target="_blank"><i class="icon-social-twitter"></i></a></li>
						<li><a href="https://web.facebook.com/" target="_blank"><i class="icon-social-facebook"></i></a></li>
						<li><a href="https://www.youtube.com/" target="_blank"><i class="icon-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon-social-dribbble"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-2 -->

	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="../jango/assets/global/plugins/excanvas.min.js"></script>
	<![endif]-->
	<script src="../jango/assets/plugins/jquery.min.js" type="text/javascript" ></script>
	<script src="../jango/assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
	<script src="../jango/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
	<script src="../jango/assets/plugins/jquery.easing.min.js" type="text/javascript" ></script>
	<script src="../jango/assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
	<script src="../jango/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

	<!-- END: CORE PLUGINS -->

			<!-- BEGIN: LAYOUT PLUGINS -->
			<script src="../jango/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
			<script src="../jango/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
			<script src="../jango/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
			<script src="../jango/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
			<script src="../jango/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
			<script src="../jango/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
			<script src="../jango/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
			<script src="../jango/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
				<!-- END: LAYOUT PLUGINS -->

	<!-- BEGIN: THEME SCRIPTS -->
	<script src="../jango/assets/base/js/components.js" type="text/javascript"></script>
	<script src="../jango/assets/base/js/components-shop.js" type="text/javascript"></script>
	<script src="../jango/assets/base/js/app.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
		App.init(); // init core
	});
	</script>
	<!-- END: THEME SCRIPTS -->

			<!-- BEGIN: PAGE SCRIPTS -->
								<script>
			$(document).ready(function() {
    var slider = $('.c-layout-revo-slider .tp-banner');
    var cont = $('.c-layout-revo-slider .tp-banner-container');

    var api = slider.show().revolution({
        sliderType:"standard",
        sliderLayout:"fullscreen",
        responsiveLevels:[2048,1024,778,480],
        gridwidth: [1170, 1024, 778, 480],
        gridheight: [620, 768, 960, 720],
        delay: 15000,
        startwidth:1170,
        startheight: 620,

        touchenabled: "on",

        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            onHoverStop:"on",
            arrows: {
                style:"circle",
                enable:true,
                hide_onmobile:false,
                hide_onleave:false,
                tmp:'',
                left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                },
                right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                }
            }
        },

        spinner: "spinner2",

        shadow: 0,
        fullWidth: "off",
        forceFullWidth: "off",
        disableProgressBar:"on",

        hideThumbsOnMobile: "on",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "on",
        hideArrowsOnMobile: "on",
        hideThumbsUnderResolution: 0
    });

    api.bind("revolution.slide.onchange",function (e,data) {

        $('.c-layout-header').removeClass('hide');

        setTimeout(function(){
            $('.c-singup-form').fadeIn();
        }, 1500);
    });
}); //ready
			</script>
							<!-- END: PAGE SCRIPTS -->
		<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>
