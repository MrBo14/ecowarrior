<?php session_start();

if (!isset($_SESSION["username"])) {
    // Redirect to the login page if the user is not logged in
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<!--
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.1
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Breadcrumbs - Bg Image V6</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="../jango/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

			<!-- BEGIN: BASE PLUGINS  -->
			<link href="../jango/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
				<!-- END: BASE PLUGINS -->


    <!-- BEGIN THEME STYLES -->
	<link href="../jango/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="../jango/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="../jango/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->

	<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen c-layout-header-topbar">

	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
	<!-- BEGIN: HEADER -->
	<header class="c-layout-header c-layout-header-default  c-layout-header-dark-mobile" data-minimize-offset="80">
		<div class="c-navbar">
			<div class="container">

				<!-- BEGIN: BRAND -->
				<div class="c-navbar-wrapper clearfix">
					<div class="c-brand c-pull-left">
					<a href="home.php" class="c-logo">
						<img src="../jango/assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo">
						<img src="../jango/assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo-inverse">
						<img src="../jango/assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-mobile-logo">
					</a>

					<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
						<span class="c-line"></span>
						<span class="c-line"></span>
						<span class="c-line"></span>
					</button>
				</div>
				<!-- END: BRAND -->

				<!-- BEGIN: HOR NAV -->
				<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
				<!-- BEGIN: MEGA MENU -->
				<!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
				<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
					<ul class="nav navbar-nav c-theme-nav">

						<li>
							<a href="javascript:;" class="c-link dropdown-toggle"><span style="color: #DAF7A6; font-size:17px;"><?php echo ($_SESSION['username']); ?></span></a>
						</li>

						<li class="c-active">
						<a href="javascript:;" class="c-link dropdown-toggle">Home<span class="c-arrow c-toggler"></span></a>
						<div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
							<div class="row">
								<div class="col-md-3">
									<ul class="dropdown-menu c-menu-type-inline">
										<li>
											<h3>Gambar Slide</h3>
										</li>

										<li>
											<a href="test.php">Tukar Gambar</a>
										</li>

										<!--- <li>
											<a href="index.html">Home Version 1</a>
										</li> --->

									</ul>
								</div>


								<div class="col-md-3">
									<ul class="dropdown-menu c-menu-type-inline">

										<li>
											<h3>Home Samples</h3>
										</li>

										<li>
											<a href="home-8.html">Home Version 8</a>
										</li>

										<li>
											<a href="home-9.html">Home Version 9</a>
										</li>

									</ul>

								</div>

								<div class="col-md-3">
									<ul class="dropdown-menu c-menu-type-inline">

										<li>
											<h3>Onepage Samples</h3>
										</li>

										<li>
											<a href="../agency_1/index.html" target="_blank">New Agency Onepage Demo</a>
										</li>

										<li>
											<a href="onepage-1.html" target="_blank">Onepage Version 1</a>
										</li>

									</ul>
								</div>

								<div class="col-md-3">
									<ul class="dropdown-menu c-menu-type-inline">

										<li>
											<h3>Onepage Samples</h3>
										</li>

										<li>
											<a href="onepage-7.html" target="_blank">Onepage Version 7</a>
										</li>

										<li>
											<a href="onepage-8.html" target="_blank">Onepage Version 8</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						</li>

						<li class="c-menu-type-classic">
						<a href="javascript:;" class="c-link dropdown-toggle">Features<span class="c-arrow c-toggler"></span></a>
						<ul class="dropdown-menu c-menu-type-classic c-pull-left">

							<li class="dropdown-submenu">
							<a href="javascript:;">Headers<span class="c-arrow c-toggler"></span></a>
							<ul class="dropdown-menu c-pull-right">
								<li>
									<a href="home-header-1.html">Home Header v1</a>
								</li>

								<li>
									<a href="home-header-1-ext.html">Home Header v1 - Extended</a>
								</li>
							</ul>
							</li>

							<li class="dropdown-submenu">
							<a href="#">Sidebar Menu<span class="c-arrow c-toggler"></span></a>
							<ul class="dropdown-menu c-pull-right">
								<li>
									<a href="sidebar-menu-1.html">Sidebar Menu v1</a>
								</li>

								<li>
									<a href="sidebar-menu-2.html">Sidebar Menu v2</a>
								</li>
							</ul>
							</li>

							<li class="dropdown-submenu">
							<a href="javascript:;">Footers<span class="c-arrow c-toggler"></span></a>
							<ul class="dropdown-menu c-pull-right">
								<li>
									<a href="footer-1.html#footer">Footer 1</a>
								</li>

								<li>
									<a href="footer-2.html#footer">Footer 2</a>
								</li>
							</ul>
							</li>


							<li class="dropdown-submenu">
							<a href="#">Breadcrumbs<span class="c-arrow c-toggler"></span></a>
							<ul class="dropdown-menu c-pull-right">

								<li>
									<a href="breadcrumbs-default.html">Breadcrumbs - Default</a>
								</li>

								<li>
									<a href="breadcrumbs-subtitle.html">Breadcrumbs - Sub Title</a>
								</li>
							</ul>
							</li>

							<li class="dropdown-submenu">
							<a href="javascript:;">Cookies Notification Bar<span class="c-arrow c-toggler"></span></a>
							<ul class="dropdown-menu c-pull-right">

								<li>
									<a href="component-cookies-1.html">Full Width - Top</a>
								</li>

								<li>
									<a href="component-cookies-2.html">Full Width - Bottom</a>
								</li>
							</ul>
							</li>



							<li class="dropdown-submenu">
							<a href="#">Mega Menu<span class="c-arrow c-toggler"></span></a>
							<ul class="dropdown-menu c-pull-right">

								<li>
									<a href="megamenu-light.html">Mega Menu - Light</a>
								</li>

								<li>
									<a href="megamenu-dark.html">Mega Menu - Dark</a>
								</li>
							</ul>
							</li>

							<li class="dropdown-submenu">
							<a href="page-extended-portfolio.html">Multi Level Menu<span class="c-arrow c-toggler"></span></a>
							<ul class="dropdown-menu c-pull-right">

								<li>
									<a href="#">Example Link</a>
								</li>

								<li>
									<a href="#">Example Link</a>
								</li>

								<li>
									<a href="#">Example Link</a>
								</li>

								<li class="dropdown-submenu">
									<a href="#">Example Sub Menu<span class="c-arrow c-toggler"></span></a>

									<ul class="dropdown-menu c-pull-left">

										<li>
											<a href="#">Example Link</a>
										</li>

										<li>
											<a href="#">Example Link</a>
										</li>

										<li>
											<a href="#">Example Link</a>
										</li>

										<li class="dropdown-submenu">
											<a href="#">Example Sub Menu<span class="c-arrow c-toggler"></span></a>
											<ul class="dropdown-menu c-pull-left">

												<li>
													<a href="#">Example Link</a>
												</li>

												<li>
													<a href="#">Example Link</a>
												</li>

												<li>
													<a href="#">Example Link</a>
												</li>

												<li>
													<a href="#">Example Link</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="#">Example Link</a>
										</li>
									</ul>
								</li>

								<li>
									<a href="#">Example Link</a>
								</li>

								<li>
									<a href="#">Example Link</a>
								</li>
							</ul>
							</li>
						</ul>
						</li>

						<li>
						<a href="javascript:;" class="c-link dropdown-toggle">Pages<span class="c-arrow c-toggler"></span></a>
						<ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
							<li>
								<ul class="dropdown-menu c-menu-type-inline">
									<li>
										<h3>Page Samples 1</h3>
									</li>

									<li>
										<a href="page-about-1.html">About Us 1</a>
									</li>

									<li>
										<a href="page-about-2.html">About Us 2</a>
									</li>
								</ul>
							</li>


							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Page Samples 2</h3>
									</li>

									<li>
										<a href="page-contact-1.html">Contact Us 1</a>
									</li>

									<li>
										<a href="page-contact-2.html">Contact Us 2</a>
									</li>
								</ul>
							</li>


							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Gallery Pages</h3>
									</li>

									<li>
										<a href="page-product-launch.html">Product Launch</a>
									</li>

									<li>
										<a href="page-lightbox-gallery.html">Lightbox Gallery</a>
									</li>
								</ul>
							</li>

							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Portfolio Pages</h3>
									</li>

									<li>
										<a href="page-4col-portfolio.html">4 Columns Portfolio</a>
									</li>

									<li>
										<a href="2col.php">2 Columns Portfolio</a>
									</li>
								</ul>
							</li>


							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Blog Pages</h3>
									</li>

									<li>
										<a href="page-blog-list.html">Blog List View</a>
									</li>
								</ul>
							</li>
						</ul>
						</li>


						<li>
						<a href="javascript:;" class="c-link dropdown-toggle">Shop<span class="c-arrow c-toggler"></span></a>

						<ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">

							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Shop Pages 1</h3>
									</li>

									<li>
										<a href="shop-home-1.html" target="_blank">Shop Home 1</a>
									</li>

									<li>
										<a href="shop-home-2.html">Shop Home 2</a>
									</li>
								</ul>
							</li>

							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Shop Pages 2</h3>
									</li>

									<li>
										<a href="shop-product-list.html">Product List</a>
									</li>

									<li>
										<a href="shop-product-grid.html">Product Grid</a>
									</li>
								</ul>
							</li>


							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Shop Pages 3</h3>
									</li>

									<li>
										<a href="shop-product-wishlist.html">Wish List</a>
									</li>

									<li>
										<a href="shop-customer-account.html">Customer Login/Register</a>
									</li>
								</ul>
							</li>


							<li>
								<ul class="dropdown-menu c-menu-type-inline">

									<li>
										<h3>Shop Pages 4</h3>
									</li>

									<li>
										<a href="shop-checkout-complete.html">Checkout Complete</a>
									</li>

									<li>
										<a href="component-shop-1.html">Shop Components 1</a>
									</li>
								</ul>
							</li>
						</ul>
						</li>


						<li>
						<a href="javascript:;" class="c-link dropdown-toggle">Components<span class="c-arrow c-toggler"></span></a>

						<!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->

						<div class="dropdown-menu c-menu-type-mega c-visible-desktop c-pull-right c-menu-type-fullwidth" style="min-width: auto">
							<ul class="nav nav-tabs c-theme-nav">

								<li class="active">
									<a href="#megamenu_jango_components"  data-toggle="tab">Jango Components</a>
								</li>

								<li>
									<a href="#megamenu_base_components"  data-toggle="tab">Base Components</a>
								</li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="megamenu_jango_components">
									<div class="row">
										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li class="c-active">
													<a href="component-tabbed-contents.html">Tabbed Contents</a>
												</li>

												<li>
													<a href="component-parallax-1.html">Parallax Blocks 1</a>
												</li>

												<li>
													<a href="component-parallax-2.html">Parallax Blocks 2</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-latest-items.html">Latest Items</a>
												</li>

												<li>
													<a href="component-tiles.html">Tiles</a>
												</li>

												<li>
													<a href="component-services.html">Services</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-pricing-tables-1.html">Pricing Tables 1</a>
												</li>

												<li>
													<a href="component-pricing-tables-2.html">Pricing Tables 2</a>
												</li>

												<li>
													<a href="component-testimonials.html">Testimonials</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-steps.html">Steps</a>
												</li>

												<li>
													<a href="component-app-showcase.html">App Showcase</a>
												</li>

												<li>
													<a href="component-team.html">Team</a>
												</li>
											</ul>
										</div>
									</div>
								</div>


								<div class="tab-pane" id="megamenu_base_components">
									<div class="row">
										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-lists.html">Lists</a>
												</li>

												<li>
													<a href="component-blockquotes.html">Blockquotes</a>
												</li>

												<li>
													<a href="component-navs.html">Navigations</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-custom-icons.html">Custom Icons</a>
												</li>

												<li>
													<a href="component-business-custom-icons.html">Custom Business Icons</a>
												</li>

												<li>
													<a href="component-social-icons.html">Social Icons</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-colors.html">UI Colors</a>
												</li>

												<li>
													<a href="component-buttons.html">Buttons</a>
												</li>

												<li>
													<a href="component-form-controls.html">Form Controls</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-tabs.html">Tabs</a>
												</li>

												<li>
													<a href="component-paginations.html">Paginations</a>
												</li>

												<li>
													<a href="component-panels.html">Panels</a>
												</li>
											</ul>
										</div>


										<li class="c-menu-type-classic">
											<a href="javascript:;" class="c-link dropdown-toggle">Tetapan<span class="c-arrow c-toggler"></span></a>
											<ul class="dropdown-menu c-menu-type-classic c-pull-left">


												<li class="dropdown-submenu">
													<a href="logout.php">Log Keluar<span class="c-arrow c-toggler"></span></a>

















											</ul>
										</li>
									</div>
								</div>
							</div>
						</div>


						<!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
						<!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
						<ul class="dropdown-menu c-menu-type-mega c-visible-mobile">

							<li class="dropdown-submenu c-active">
								<a href="javascript:;">Jango Components<span class="c-arrow c-toggler"></span></a>
								<div class="dropdown-menu">
									<div class="row">
										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li class="c-active">
													<a href="component-tabbed-contents.html">Tabbed Contents</a>
												</li>

												<li>
													<a href="component-parallax-1.html">Parallax Blocks 1</a>
												</li>

												<li>
													<a href="component-parallax-2.html">Parallax Blocks 2</a>
												</li>
											</ul>
										</div>

										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-latest-items.html">Latest Items</a>
												</li>

												<li>
													<a href="component-tiles.html">Tiles</a>
												</li>

												<li>
													<a href="component-services.html">Services</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-pricing-tables-1.html">Pricing Tables 1</a>
												</li>

												<li>
													<a href="component-pricing-tables-2.html">Pricing Tables 2</a>
												</li>

												<li>
													<a href="component-testimonials.html">Testimonials</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-steps.html">Steps</a>
												</li>

												<li>
													<a href="component-app-showcase.html">App Showcase</a>
												</li>

												<li>
													<a href="component-team.html">Team</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>


							<li class="dropdown-submenu">
								<a href="javascript:;">Base Components<span class="c-arrow c-toggler"></span></a>
								<div class="dropdown-menu">
									<div class="row">
										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-lists.html">Lists</a>
												</li>

												<li>
													<a href="component-blockquotes.html">Blockquotes</a>
												</li>

												<li>
													<a href="component-navs.html">Navigations</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-custom-icons.html">Custom Icons</a>
												</li>

												<li>
													<a href="component-business-custom-icons.html">Custom Business Icons</a>
												</li>

												<li>
													<a href="component-social-icons.html">Social Icons</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-colors.html">UI Colors</a>
												</li>

												<li>
													<a href="component-buttons.html">Buttons</a>
												</li>

												<li>
													<a href="component-form-controls.html">Form Controls</a>
												</li>
											</ul>
										</div>


										<div class="col-md-3">
											<ul class="dropdown-menu c-menu-type-inline">

												<li>
													<a href="component-tabs.html">Tabs</a>
												</li>

												<li>
													<a href="component-paginations.html">Paginations</a>
												</li>

												<li>
													<a href="component-panels.html">Panels</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>

						<!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
						</li>









					</ul>
				</nav>
				<!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
				<!-- END: HOR NAV -->

			</div>
		</div>
	</header>
	<!-- END: HEADER -->
	<!-- END: LAYOUT/HEADERS/HEADER-1 -->