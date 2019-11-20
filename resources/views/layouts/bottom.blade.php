<!-- Login Panel content -->
<div id="login_panel" class="mfp-hide loginbox-popup auth-popup">
    <div class="inner-container login-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title tcolor">
            SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES
        </h3>

        <form class="login_panel" name="login_panel" method="post" action="#">
            <div class=" kl-fancy-form">
                <input type="text" id="kl-username" name="log"
                    class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="eg: james_smith">
                <label class="kl-font-alt kl-fancy-form-label">
                    USERNAME
                </label>
            </div>

            <div class=" kl-fancy-form">
                <input type="password" id="kl-password" name="pwd"
                    class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="type password">
                <label class="kl-font-alt kl-fancy-form-label">
                    PASSWORD
                </label>
            </div>

            <label class="auth-popup-remember" for="kl-rememberme">
                <input type="checkbox" name="rememberme" id="kl-rememberme" value="forever"
                    class="auth-popup-remember-chb"> Remember Me
            </label>

            <input type="submit" id="login" name="submit_button" class="btn zn_sub_button btn-fullcolor btn-md"
                value="LOG IN">

            <input type="hidden" value="login" class="" name="form_action">
            <input type="hidden" value="login" class="" name="action">
            <input type="hidden" value="#" class="" name="submit">

            <div class="links auth-popup-links">
                <a href="#register_panel" class="create_account auth-popup-createacc kl-login-box auth-popup-link">
                    CREATE AN ACCOUNT
                </a>

                <span class="sep auth-popup-sep"></span>

                <a href="#forgot_panel" class="kl-login-box auth-popup-link">
                    FORGOT YOUR PASSWORD?
                </a>
            </div>
        </form>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<div id="register_panel" class="mfp-hide loginbox-popup auth-popup">
    <div class="inner-container register-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title">
            CREATE ACCOUNT
        </h3>

        <form class="register_panel" name="register_panel" method="post" action="#">
            <div class=" kl-fancy-form ">
                <input type="text" id="reg-username" name="user_login"
                    class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="type desired username">
                <label class="kl-font-alt kl-fancy-form-label">USERNAME</label>
            </div>

            <div class="kl-fancy-form">
                <input type="text" id="reg-email" name="user_email"
                    class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="your-email@website.com">
                <label class="kl-font-alt kl-fancy-form-label">
                    EMAIL
                </label>
            </div>
            <div class=" kl-fancy-form">
                <input type="password" id="reg-pass" name="user_password"
                    class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****">
                <label class="kl-font-alt kl-fancy-form-label">
                    PASSWORD
                </label>
            </div>

            <div class="kl-fancy-form">
                <input type="password" id="reg-pass2" name="user_password2"
                    class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****">
                <label class="kl-font-alt kl-fancy-form-label">
                    CONFIRM PASSWORD
                </label>
            </div>

            <div class="">
                <input type="submit" id="signup" name="submit" class="btn zn_sub_button btn-block btn-fullcolor btn-md"
                    value="CREATE MY ACCOUNT">
            </div>

            <div class="links auth-popup-links">
                <a href="#login_panel" class="kl-login-box auth-popup-link">
                    ALREADY HAVE AN ACCOUNT?
                </a>
            </div>
        </form>
    </div>
</div>
<div id="forgot_panel" class="mfp-hide loginbox-popup auth-popup forgot-popup">
    <div class="inner-container forgot-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title">
            FORGOT YOUR DETAILS?
        </h3>

        <form class="forgot_form" name="forgot_form" method="post" action="#">
            <div class=" kl-fancy-form">
                <input type="text" id="forgot-email" name="user_login"
                    class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="...">
                <label class="kl-font-alt kl-fancy-form-label">
                    USERNAME OR EMAIL
                </label>
            </div>

            <div class="">
                <input type="submit" id="recover" name="submit" class="btn btn-block zn_sub_button btn-fullcolor btn-md"
                    value="SEND MY DETAILS!">
            </div>

            <div class="links auth-popup-links">
                <a href="#login_panel" class="kl-login-box auth-popup-link">
                    AAH, WAIT, I REMEMBER NOW!
                </a>
            </div>
        </form>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<!--/ Login Panel content -->

<!-- Contact form pop-up element content -->
<div id="contact_panel" class="mfp-hide contact-popup">
    <div class="contact-popup-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- Contact form pop-up element -->
                    <div class="contactForm pop-up-form">
                        <!-- Google reCaptcha required javascript file -->
                        <script src='https://www.google.com/recaptcha/api.js'></script>

                        <!-- Title -->
                        <h3 class="m_title m_title_ext text-custom contact-popup-title tcolor">
                            GET A QUOTE
                        </h3>
                        <h4 class="tbk__subtitle fw-thin">
                            We'll do everything we can to make our next best project!
                        </h4>

                        <form action="php_helpers/_contact-process.php" method="post" class="contact_form row mt-40"
                            enctype="multipart/form-data">
                            <div class="cf_response"></div>

                            <div class="col-sm-6 kl-fancy-form">
                                <input type="text" name="name" id="cf_name-pop-up" class="form-control"
                                    placeholder="Please enter your first name" value="" tabindex="1" maxlength="35"
                                    required>
                                <label class="control-label">
                                    FIRSTNAME
                                </label>
                            </div>

                            <div class="col-sm-6 kl-fancy-form">
                                <input type="text" name="lastname" id="cf_lastname-pop-up" class="form-control"
                                    placeholder="Please enter your first last name" value="" tabindex="1" maxlength="35"
                                    required>
                                <label class="control-label">
                                    LASTNAME
                                </label>
                            </div>

                            <div class="col-sm-12 kl-fancy-form">
                                <input type="text" name="email" id="cf_email-pop-up" class="form-control h5-email"
                                    placeholder="Please enter your email address" value="" tabindex="1" maxlength="35"
                                    required>
                                <label class="control-label">
                                    EMAIL
                                </label>
                            </div>

                            <div class="col-sm-12 kl-fancy-form">
                                <input type="text" name="subject" id="cf_subject-pop-up" class="form-control"
                                    placeholder="Enter the subject message" value="" tabindex="1" maxlength="35"
                                    required>
                                <label class="control-label">
                                    SUBJECT
                                </label>
                            </div>

                            <div class="col-sm-12 kl-fancy-form">
                                <textarea name="message" id="cf_message-pop-up" class="form-control" cols="30" rows="10"
                                    placeholder="Your message" tabindex="4" required></textarea>
                                <label class="control-label">
                                    MESSAGE
                                </label>
                            </div>

                            <!-- Google recaptcha required site-key (change with yours => https://www.google.com/recaptcha/admin#list) -->
                            <!-- <div class="g-recaptcha" data-sitekey="SITE-KEY"></div> -->
                            <!--/ Google recaptcha required site-key -->

                            <div class="col-sm-12">
                                <!-- Contact form send button -->
                                <button class="btn btn-fullcolor" type="submit">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--/ Contact form pop-up element -->
                </div>
                <!--/ col-md-12 col-sm-12 -->
            </div>
            <!--/ .row -->
        </div>
        <!--/ .container -->
    </div>
    <!--/ .contact-popup-panel -->
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<!--/ Contact form pop-up element content -->


<!-- ToTop trigger -->
<a href="#" id="totop">TOP</a>
<!--/ ToTop trigger -->



	<!-- JS FILES // These should be loaded in every page -->
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/kl-plugins.js"></script>

	<!-- JS FILES // Loaded on this page -->
	<!-- Required js scripts files for Revolution Slider element -->
	<script type="text/javascript" src="/js/plugins/_sliders/revolution-slider/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="/js/plugins/_sliders/revolution-slider/jquery.themepunch.revolution.min.js">
	</script>

	<!-- Required js trigger for Revolution Slider element -->
	<script type="text/javascript">
		function setREVStartSize(e) {
			try {
				var i = jQuery(window).width(),
					t = 9999,
					r = 0,
					n = 0,
					l = 0,
					f = 0,
					s = 0,
					h = 0;
				if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
						f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
					}), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e
					.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e
					.sliderLayout) {
					var u = (e.c.width(), jQuery(window).height());
					if (void 0 != e.fullScreenOffsetContainer) {
						var c = e.fullScreenOffsetContainer.split(",");
						if (c) jQuery.each(c, function (e, i) {
								u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
							}), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset
							.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e
							.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
					}
					f = u
				} else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
				e.c.closest(".rev_slider_wrapper").css({
					height: f
				})
			} catch (d) {
				console.log("Failure at Presize of Slider:" + d)
			}
		};
	</script>
	<script type="text/javascript">
		var revapi24,
			tpj = jQuery;
		tpj(document).ready(function () {
			if (tpj("#rev_slider_24_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_24_1");
			} else {
				revapi24 = tpj("#rev_slider_24_1").show().revolution({
					sliderType: "standard",
					// jsFileLocation: "//kallyas-template.net/visual_slider_builder/revslider/public/assets/js/",
					sliderLayout: "fullscreen",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						mouseScrollReverse: "default",
						onHoverStop: "off",
						touch: {
							touchenabled: "on",
							touchOnDesktop: "off",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "uranus",
							enable: true,
							hide_onmobile: true,
							hide_under: 778,
							hide_onleave: false,
							tmp: '',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 15,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 15,
								v_offset: 0
							}
						},
						bullets: {
							enable: true,
							hide_onmobile: false,
							style: "bullet-bar",
							hide_onleave: false,
							direction: "horizontal",
							h_align: "center",
							v_align: "bottom",
							h_offset: 0,
							v_offset: 30,
							space: 5,
							tmp: ''
						}
					},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1024, 778, 480],
					gridheight: [868, 768, 960, 720],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "slidercenter",
						speed: 2000,
						speedbg: 0,
						speedls: 0,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
				revapi24.bind("revolution.slide.onloaded", function (e) {
					revapi24.addClass("tiny_bullet_slider");
				});
			}
		}); /*ready*/
	</script>

	<!-- Slick required js script for Recent Work Carousel & Partners Carousel & Screenshot-box elements -->
	<script type="text/javascript" src="/js/plugins/_sliders/slick/slick.js"></script>

	<!-- Required js trigger for Recent Work Carousel & Partners Carousel & Screenshot-box elements -->
	<script type="text/javascript" src="/js/trigger/kl-slick-slider.js"></script>

	<!-- Custom Kallyas JS codes -->
	<script type="text/javascript" src="/js/kl-scripts.js"></script>

	<!-- Custom user JS codes -->
	<script type="text/javascript" src="/js/kl-custom.js"></script>



	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-XXXXX-X', 'auto');
	  ga('send', 'pageview');
	</script>
	-->

</body>

</html>