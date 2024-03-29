<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title>Smart Bus</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design booking website">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="<?php echo PATH; ?>images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,400italic,700%7CLato:400">
    <link rel="stylesheet" href="<?php echo PATH; ?>css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <header class="page-head slider-menu-position">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="90px" data-lg-stick-up-offset="75px" data-auto-height="false" class="rd-navbar rd-navbar-top-panel rd-navbar-default rd-navbar-white rd-navbar-static-fullwidth-transparent" data-lg-auto-height="true" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Top Panel-->
              <div class="rd-navbar-top-panel">
                <div class="left-side">
                  <!-- Contact Info-->
                  <address class="contact-info text-left">
                    <div class="reveal-inline-block"><a href="callto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span></span><span class="unit-body"><span class="text-gray-darker">021-12345678</span></span></a></div>
                    <div class="reveal-inline-block"><a href="mailto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span></span><span class="unit-body"><span class="text-gray-darker">info@smartbus.pk</span></span></a></div>
                    <div class="reveal-inline-block"><a href="#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span></span><span class="unit-body"><span class="text-gray-darker">Karachi, Pakistan</span></span></a></div>
                  </address>
                </div>
                <div class="right-side">
                  <ul class="list-inline list-inline-2">
                    <li><a href="https://www.facebook.com" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/login?lang=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></a></li>
                    <li><a href="https://plus.google.com/discover" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-google-plus"></a></li>
                    <li><a href="https://www.instagram.com/?hl=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"></a></li>
                    <!--<li><a href="" class="icon icon-xxs icon-silver-filled icon-circle fa fa-rss"></a></li>-->
                  </ul>
                </div>
              </div>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Top Panel Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle"><span></span></button>
                <!-- Navbar Brand-->
                <!--<div class="rd-navbar-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='107' height='58' src='<?php echo PATH; ?>images/Screenshot_1.png' alt=''/></a></div>
              </div>-->
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!-- Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='105' height='57' src='<?php echo PATH; ?>images/logo-light1.png' alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form action="search-results.html" method="GET" class="form-search rd-search">
                        <div class="form-group">
                          <label for="rd-navbar-form-search-widget" class="form-label form-search-label form-label-sm rd-input-label">Search</label>
                          <input id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input input-sm form-control form-control-gray-lightest input-sm"/>
                        </div>
                        <button type="submit" class="form-search-submit"><span class="fa fa-search"></span></button>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <!-- <li class="active"><a href="<?php //echo site_url('/nav/index2') ?>">Home</a></li> -->
                      <?php if($this->session->userdata('logged_in')){ ?>
                      <li><a><?php echo $this->session->userdata('username');?></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/auth/logout') ?>">Sign Off</a></li>
                            <li><a href="<?php echo site_url('index.php/user_dashboard/viewProfile') ?>">Edit Profile</a></li>
                            <li><a href="<?php echo site_url('index.php/user_dashboard/changePassword') ?>">Change Password</a></li>
                         <!--   <li><a href="<?php echo site_url('index.php/user_dashboard/viewTrips') ?>">View Trips</a></li>-->
                        </ul>
                      </li>
                      <?php }else{ ?>

                      <li><a href="<?php echo base_url();?>index.php/auth/login_loader">Login/Register</a>
                                             <!-- RD Navbar Dropdown-->
                      </li>
                      <?php } ?>
                      <li><a href="<?php echo base_url();?>index.php/nav_about/history">About</a>
                        <li><a href="<?php echo base_url();?>index.php/nav_about/faq">FAQs</a></li>
                        <!-- RD Navbar Dropdown-->
                       <!-- <ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/nav_about/history') ?>">Our History</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_about/team')?>">Our Team</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_about/testimonials') ?>">Testimonials</a></li>
                        </ul>-->
                      </li>
                     <!-- <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="<?php echo site_url('index.php/nav_destinations/destinations') ?>">Destinations</a>-->
                        <!-- RD Navbar Dropdown-->
                        <!--<ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/nav_destinations/destinations') ?>">All Destinations</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_destinations/ticket_catalog') ?>">Ticket Catalog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_destinations/single_ticket') ?>">Single Ticket</a></li>
                        </ul>
                      </li>-->
                      <li><a href="<?php echo site_url('index.php/nav_deals/deals') ?>">Offers</a></li>
                       <!--<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="<?php echo site_url('index.php/nav_news/classic') ?>">News</a>
                        RD Navbar Dropdown
                        <ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/nav_news/classic') ?>">Classic Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/grid') ?>">Grid Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/masonry') ?>">Masonry Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/modern') ?>">Modern Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/post') ?>">Post Page</a></li>
                        </ul>
                      </li>-->
                    <!--  <li><a href="<?php echo site_url('index.php/nav_tracking/tracking') ?>">Tracking</a></li>-->
                      <!--<li class="rd-navbar--has-megamenu rd-navbar-submenu"><a href="#">Pages</a>
                        <div class="rd-navbar-megamenu">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Gallery</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="grid-gallery.html">Grid Gallery</a></li>
                                <li><a href="grid-without-padding-gallery.html">Grid Without Padding Gallery</a></li>
                                <li><a href="masonry-gallery.html">Masonry Gallery</a></li>
                                <li><a href="cobbles-gallery.html">Cobbles Gallery</a></li>
                              </ul>
                            </div>
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Elements</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="progress-bars.html">Progress Bars</a></li>
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="forms.html">Forms</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="grid.html">Grid</a></li>
                              </ul>
                            </div>
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Pages</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="team-member-profile.html">Team Member Profile</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="timetable.html">Timetable</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="503.html">503 Page</a></li>
                                <li><a href="under-construction.html">Under Construction</a></li>
                                <li><a href="login-register.html">Login/Register</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="privacy.html">Terms of Use</a></li>
                                <li><a href="single-service.html">Single Service</a></li>
                              </ul>
                            </div>
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Layouts</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="index-variant-2.html">Home Variant 2</a></li>
                                <li><a href="index-variant-3.html">Home Variant 3</a></li>
                                <li><a href="transparent-header.html">Transparent Header</a></li>
                                <li><a href="corporate-header.html">Corporate Header</a></li>
                                <li><a href="minimal-header.html">Minimal Header</a></li>
                                <li><a href="hamburger-menu-header.html">Hamburger Menu Header</a></li>
                                <li><a href="footer-widget-light.html">Footer Widget Light</a></li>
                                <li><a href="footer-widget-dark.html">Footer Widget Dark</a></li>
                                <li><a href="footer-center-light.html">Footer Center Light</a></li>
                                <li><a href="footer-center-dark.html">Footer Center Dark</a></li>
                                <li><a href="footer-minimal-light.html">Footer Minimal Light</a></li>
                                <li><a href="footer-minimal-dark.html">Footer Minimal Dark</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>-->
                      <li><a href="<?php echo site_url('index.php/nav_contact/contact') ?>">Contacts</a></li>
                    </ul>

                  </div>
                </div>
                <!-- RD Navbar Search-->
                <div class="rd-navbar-search rd-navbar-search-top-panel"><a data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="search-results.html" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label rd-input-label">Type and hit enter...</label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                    </div>
                    <div id="rd-search-results-live" class="rd-search-results-live"></div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!-- Swiper-->
        <div data-height="" data-min-height="200px" data-slide-effect="fade" data-simulate-touch="false" class="swiper-container swiper-slider context-dark text-lg-left">
          <div class="swiper-wrapper">
            <div data-slide-bg="<?php echo PATH; ?>images/backgrounds/background-02-1920x950.jpg" class="swiper-slide">
              <div class="swiper-slide-caption-wrap">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-xs-center range-lg-left section-sm-50 section-md-0">
                      <div class="cell-xs-10 cell-lg-7 cell-xl-6">
                        <h1 data-caption-animate="fadeInDown" data-caption-delay="200" class="text-bold">Comfort & Style <br class="veil reveal-lg-inline-block"> Over Every Mile</h1>
                        <div data-caption-animate="fadeInUp" data-caption-delay="600" class="offset-top-20 offset-lg-top-49">
                          <p class="h6 text-mercury">Smart Bus is the leading go-to website for booking point's buses <br class="veil reveal-lg-inline-block"> online.</p>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="800" class="offset-top-20"><a href="<?php echo site_url('index.php/nav_deals/deals') ?>" class="btn btn-default btn-skew">Learn More</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-slide-bg="<?php echo PATH; ?>images/backgrounds/slidercollage.jpg" class="swiper-slide">
              <div class="swiper-slide-caption-wrap">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-xs-10 cell-lg-9 cell-xl-7">
                        <h1 data-caption-animate="fadeInDown" data-caption-delay="200" class="text-bold">Providing Quality Service At Unbeatable Rates.</h1>
                        <div data-caption-animate="fadeInUp" data-caption-delay="600" class="offset-top-20 offset-lg-top-49">
                          <p class="h6 text-mercury">We provide affordable and reliable point reservation services online <br class="veil reveal-lg-inline-block"> all over the Pakistan.</p>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="800" class="offset-top-20"><a href="<?php echo site_url('index.php/nav_deals/deals') ?>" class="btn btn-default btn-skew">Learn More</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="searchPanel" class="swiper-center-caption">
            <div class="shell">
              <div class="range range-xs-center">
                <div class="cell-sm-10 cell-md-12">
                  <!-- Panel-->
                  <div class="panel panel-md bg-chathams-blue context-dark text-lg-left">
                  <h3><span class="small text-bold text-white">Find Bus Route</span></h3>
                  <form action="<?php echo site_url('index.php/Welcome/index') ?>" method="post" class="offset-top-10 offset-sm-top-15">
                    <div class="group group-bottom">
                      <div class="group-item element-fullwidth element-fullwidth-sm">
                        <div class="form-group text-left">
                          <label for="form-filter-location-from" class="form-label form-label-outside">Departure Route</label>
                            <div class="form-group form-group-label-outside">
                              <select id="form-filter-location-from" name="source" class="form-control shadow-drop-md bg-white" required>
                                <option>Select Route</option>
                                    <?php foreach ($cityarray as $value) {?>
                                        <option value=<?= $value['shortcode']?>><?php echo $value['name']?> </option> <?php } ?>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="group-item element-fullwidth element-fullwidth-sm">
                        <div class="form-group text-left">
                          <label for="form-filter-location-to" class="form-label form-label-outside">Arrival Route </label>
                            <div class="select2-whitout-border shadow-drop-md">
                              <select id="form-filter-location-to" name="dest" class="form-control" required>
                                <option>Select campus</option>
                                      <?php foreach ($cityarray as $value) {?>
                                          <option value=<?= $value['shortcode']?>><?php echo $value['name']?> </option> <?php } ?>
                              </select>
                            </div>
                        </div>
                      </div>
                      <?php $date = date("Y-m-d"); ?>
                      <div class="group-item element-fullwidth element-fullwidth-xs">
                        <div class="form-group text-left">
                          <label for="form-filter-location-from-date" class="form-label form-label-outside">Departure Date</label>
                          <div class="select2-whitout-border shadow-drop-md">
                                <input id="form-filter-location-from-date" name="busdate" type="date" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date('Y-m-d', strtotime($date. ' + 13 days')); ?>" data-minimum-results-for-search="Infinity" class="form-control" style="background-color: white;" required>
                                  <!--<option value="1">7-11-2016</option>
                                  <option value="2">2-12-2016</option>
                                  <option value="3">14-11-2016</option>
                                  <option value="4">3-10-2016</option>-->
                                </input>
                              </div>
                        </div>
                      </div>
                      <?php if($this->session->userdata('logged_in')){ ?>
                      <div class="group-item element-fullwidth element-fullwidth-xs offset-lg-top-4">
                        <div class="form-group text-left">
                          <label for="passengers" class="form-label form-label-outside">Passengers</label>
                          <div class="select2-whitout-border shadow-drop-md">
                            <select id="passengers" name="num-seat" data-minimum-results-for-search="Infinity" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <?php } else{?>
                      <div class="group-item element-fullwidth element-fullwidth-xs offset-lg-top-4">
                      </div>
                      <?php } ?>
                      <div class="group-item element-fullwidth element-fullwidth-xs offset-lg-top-4">
                        <input type="submit" class="btn btn-ellipse-type-2 btn btn-block btn-ripe-lemon" value="search">
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination"></div>
          <!-- Swiper Navigation-->
          <div class="swiper-button-prev"><span class="icon icon-xs fa fa-chevron-left"></span></div>
          <div class="swiper-button-next"><span class="icon icon-xs fa fa-chevron-right"></span></div>
        </div>
      </header>
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Our Advantages-->
        <section class="section-90 section-md-111">
          <div class="shell">
            <h2 class="text-bold">Our Advantages</h2>
            <hr class="divider bg-chathams-blue">
            <div class="range range-xs-center offset-top-69">
                      <div class="cell-xs-6 cell-sm-5 cell-md-3">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-wifi"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Free Wi-Fi</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">All buses are equipped with Wi-Fi  and sockets</p>
                          </div>
                        </div>
                      </div>
                      <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-xs-top-0">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-taxi"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Bus Alternatives</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">Alternate bus in case of any trouble</p>
                          </div>
                        </div>
                      </div>
                      <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-md-top-0">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-seat-recline-extra"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Comfortable Seats</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">You can spend hours without any discomfort in our seats</p>
                          </div>
                        </div>
                      </div>
                      <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-md-top-0">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-cash-multiple"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Different ways of paying payment.</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">Cash, Visa, MasterCard, etc</p>
                          </div>
                        </div>
                      </div>
            </div>
          </div>
        </section>
        <!-- Popular Bus Tickets-->
        <section class="section-90 section-md-111 bg-zircon">
          <div class="shell">
            <h2 class="text-bold">Popular Bus Routes</h2>
            <hr class="divider bg-chathams-blue">
            <div class="range range-xs-center offset-top-60">
              <div class="cell-xs-10 cell-sm-6 cell-md-4">
                <!-- Post Ticket--><a class="post-ticket">
                  <div class="post-ticket-header"><img  src="<?php echo PATH; ?>images/blog/c.png" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"></svg>
                        <div class="post-ticket-price text-bold text-shark"><span>.</span></div>
                      </div>
                    </div>
                </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <a href="#searchPanel" >
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                       <li id="IBD" class="h5 text-bold text-primary">Clifton</li>
                        <li id="MUR" class="h5 text-bold text-primary">City School</li>
                      </ul>
                    </a>
                    </div>
                     <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id="MUR" class="h5 text-bold text-primary">City School</li>
                        <li id="IBD" class="h5 text-bold text-primary">Clifton</li>
                      </ul>
                    </a>
                    </div>
                  </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">
                <!-- Post Ticket--><a class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/m.png" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"></svg>
                        <div class="post-ticket-price text-bold text-shark"></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id= "PSW" class="h5 text-bold text-primary">Malir</li>
                        <li id="LHR" class="h5 text-bold text-primary">City School</li>
                      </ul>
                    </a>
                    </div>
                     <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id="LHR" class="h5 text-bold text-primary">City School</li>
                        <li id="PSW" class="h5 text-bold text-primary">Malir</li>
                      </ul>
                    </a>
                    </div>
                  </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">
                <!-- Post Ticket--><a class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/n.png" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"></svg>
                        <div class="post-ticket-price text-bold text-shark"></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id="KHI" class="h5 text-bold text-primary">North-Nazimabad</li>
                        <li id="LHR" class="h5 text-bold text-primary">City School</li>
                      </ul>
                    </a>
                    </div>
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id="LHR" class="h5 text-bold text-primary">City school</li>
                        <li id="KHI" class="h5 text-bold text-primary">Noth-Nazimabad</li>
                      </ul>
                    </a>
                    </div>
                  </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30">
                <!-- Post Ticket--><a class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/G.png" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"></svg>
                        <div class="post-ticket-price text-bold text-shark"></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id="IBD" class="h5 text-bold text-primary">Gulshan</li>
                        <li id="KHI" class="h5 text-bold text-primary">City School</li>
                      </ul>
                    </a>
                    </div>
                     <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id="KHI" class="h5 text-bold text-primary">City School</li>
                        <li id="IBD" class="h5 text-bold text-primary">Gulshan</li>
                      </ul>
                    </a>
                    </div>
                  </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30">
                <!-- Post Ticket--><a class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/s.png" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"></svg>
                        <div class="post-ticket-price text-bold text-shark"></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li id="LHR" class="h5 text-bold text-primary">Shahrah-e-faisal </li>
                        <li id="IBD" class="h5 text-bold text-primary">City School</li>
                      </ul>
                    </a>
                    </div>
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li ID="IBD" class="h5 text-bold text-primary">City School</li>
                        <li ID="LHR" class="h5 text-bold text-primary">Shrah-e-faisal</li>
                      </ul>
                    </a>
                    </div>
                  </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30">
                <!-- Post Ticket--><a class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/k.png" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"></svg>
                        <div class="post-ticket-price text-bold text-shark">&nbsp;</div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li ID="FSD" class="h5 text-bold text-primary">Korangi</li>
                        <li ID="LHR" class="h5 text-bold text-primary">City School</li>
                      </ul>
                    </a>
                    </div>
                    <div>
                      <a href="#searchPanel">
                      <ul onclick="setTicket(this)" class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li ID="LHR" class="h5 text-bold text-primary">City School</li>
                        <li ID="FSD" class="h5 text-bold text-primary">Korangi</li>
                      </ul>
                    </a>
                    </div>
                  </div></a>
              </div>
            </div>
            <!--<div class="offset-top-60"><a href="destinations.html" class="btn btn-default">View All Destinations</a></div>-->
          </div>
          
        </section>

        <!-- Special Service: Bus Rental with Driver-->
        <!--<section>
          <div data-on="false" data-md-on="true" class="bg-gray-base context-dark rd-parallax">
            <div data-speed="0.15" data-type="media" data-url="images/backgrounds/background-04-1920x950.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
              <div class="shell section-90 section-md-162">
                <h2 class="text-bold text-white">Special Service: Bus Rental with Driver</h2>
                <div class="offset-top-30"><a href="deals.html" class="btn btn-primary">Book Now</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-top-90 section-bottom-90 section-md-top-111">
          <div class="shell owl-dots-60">
            <div class="range range-xs-center">
              <div class="cell-xs-8 cell-sm-12">
                <div class="owl-items-middle">
                  <div data-items="2" data-xs-items="2" data-sm-items="3" data-md-items="6" data-nav="false" data-dots="true" data-stage-padding="5" data-sm-stage-padding="20" data-margin="10" data-sm-margin="75" class="owl-carousel owl-carousel-classic"><a href="#"><img src="images/products/product-01-132x88.png" width="132" height="88" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-02-112x83.png" width="112" height="83" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-03-132x75.png" width="132" height="75" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-04-107x85.png" width="107" height="85" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-05-132x74.png" width="132" height="74" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-06-128x77.png" width="128" height="77" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-01-132x88.png" width="132" height="88" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-02-112x83.png" width="112" height="83" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-03-132x75.png" width="132" height="75" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-04-107x85.png" width="107" height="85" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-05-132x74.png" width="132" height="74" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-06-128x77.png" width="128" height="77" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-01-132x88.png" width="132" height="88" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-02-112x83.png" width="112" height="83" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-03-132x75.png" width="132" height="75" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-04-107x85.png" width="107" height="85" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-05-132x74.png" width="132" height="74" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="images/products/product-06-128x77.png" width="128" height="77" alt="" class="img-responsive img-semi-transparent center-block"/></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-90 section-md-111 bg-zircon">
          <div class="shell">
            <h2 class="text-bold">Latest News</h2>
            <hr class="divider bg-chathams-blue">
            <div class="range range-xs-center offset-top-60">
              <div class="cell-xs-10 cell-sm-6">
                <div class="reveal-block">
                  <div class="post post-boxed">
                    <header class="post-media"><img width="570" height="310" src="images/blog/post-07-570x310.jpg" alt="" class="img-responsive"/></header>

                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">

                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">5 Reasons to Take the Bus in the USA</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Michael Ford</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30 offset-sm-top-0">

                <div class="reveal-block">
                  <div class="post post-boxed">

                    <header class="post-media"><img width="570" height="310" src="images/blog/post-08-570x310.jpg" alt="" class="img-responsive"/></header>

                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">

                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">Bus Booking in the USA – 7 Things You Need to Know Before Booking Your Ticket</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Joyce Contreras</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30">

                <div class="reveal-block">
                  <div class="post post-boxed">

                    <header class="post-media"><img width="570" height="310" src="images/blog/post-09-570x310.jpg" alt="" class="img-responsive"/></header>

                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">

                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">How To Take Long Bus Trips Like a Pro</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Michael Ford</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30">

                <div class="reveal-block">
                  <div class="post post-boxed">

                    <header class="post-media"><img width="570" height="310" src="images/blog/post-10-570x310.jpg" alt="" class="img-responsive"/></header>

                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">

                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">Wi-Fi on Buses: How Often Does It Work In the United States ?</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Laura Wallace</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-60"><a href="blog-classic.html" class="btn btn-default">View All News</a></div>
          </div>
        </section>-->

        <section class="section-57 section-bg-animation context-dark">
          <div class="shell">
            <div class="range range-xs-center range-xs-middle">
              <div class="cell-md-10 cell-lg-8 text-center text-md-right">
                <h2 class="text-bold">Take Part in the Discount Campaign</h2>
              </div>
              <div class="cell-lg-3 offset-top-30 offset-lg-top-0 text-lg-left"><a href="<?php echo base_url();?>index.php/user_dashboard/ticket_exchange" class="btn btn-ellipse-type-2 btn btn-ripe-lemon">Get Started</a></div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Footer Default-->
      <footer class="page-footer">
        <section class="section-60">
          <div class="shell">
            <div class="range range-xs-center text-md-left">
              <div class="cell-xs-10 cell-sm-7 cell-md-4">
                <!-- Footer brand-->
                <div class="footer-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='97' height='57' src='<?php echo PATH; ?>images/logo.png' alt=''/></a></div>
                <div class="offset-top-30 inset-sm-right-20">
                  <p class="text-gray">Smart Bus is the leading go-to website for City School use for point purpose. This smart bus is IOT base.</p>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-7 cell-md-4 offset-top-60 offset-md-top-0">
                <div>
                  <h5 class="text-bold">Contacts</h5>
                </div>
                <div class="offset-top-6">
                  <div class="text-subline"></div>
                </div>
                <div class="offset-top-20">
                  <!-- Contact Info-->
                  <address class="contact-info text-left">
                    <div>
                      <div class="reveal-inline-block"><a href="callto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span></span><span class="unit-body"><span class="text-gray-darker">021-36502089, 0331-3179018</span></span></a></div>
                    </div>
                    <div class="offset-top-10">
                      <div class="reveal-inline-block"><a href="mailto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span></span><span class="unit-body"><span class="text-gray-darker">info@smartbus.pk</span></span></a></div>
                    </div>
                    <div class="offset-top-10">
                      <div class="reveal-inline-block"><a href="#" class="unit unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span></span><span class="unit-body"><span class="text-gray-darker">Karachi, Pakistan</span></span></a></div>
                    </div>
                  </address>
                </div>
                <div class="offset-top-20">
                  <!-- List Inline-->
                  <ul class="list-inline list-inline-2">
                    <li><a href="https://www.facebook.com" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/login?lang=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></a></li>
                    <li><a href="https://plus.google.com/discover" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-google-plus"></a></li>
                    <li><a href="https://www.instagram.com/?hl=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"></a></li>
                    <!--<li><a href="" class="icon icon-xxs icon-silver-filled icon-circle fa fa-rss"></a></li>-->
                  </ul>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-7 cell-md-4 offset-top-60 offset-md-top-0">
                <div>
                  <h5 class="text-bold">Newsletter</h5>
                </div>
                <div class="offset-top-6">
                  <div class="text-subline"></div>
                </div>
                <div class="offset-top-25">
                  <p class="text-gray">Enter your email address to get the latest about Smart-Bus, Special events and Student activities delivered right to your inbox.</p>
                </div>
                <div class="offset-top-20">
                        <form method="post" action="<?php echo site_url('index.php/sendmail/subs') ?> " class="rd-mailform-subscribe">
                          <div class="form-group form-group-sm">
                            <div class="input-group">
                              <input placeholder="Your e-mail..." type="email" name="email" data-constraints="@Email @Required" class="form-control"><span class="input-group-btn">
                                <input type="submit" class="btn btn-xs btn-ripe-lemon" value="Subscribe"></span>
                            </div>
                          </div>
                          <div id="form-subscribe-footer" class="form-output"></div>
                        </form>
                        <div class="offset-top-25">
                          <p class="text-gray">For Confirmation Check Your Mailbox.</p>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-12 bg-gray-darker text-md-left">
          <div class="shell">
            <p class="font-accent"><span class="small text-silver-dark">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a href="<?php echo site_url('index.php/footer/privacy') ?>">Privacy Policy</a></span>
            </p>
          </div>
        </section>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="<?php echo PATH; ?>js/core.min.js"></script>
    <script src="<?php echo PATH; ?>js/script.js"></script>
  </body>
</html>


<script>
function doconfirm()
{
  var number = document.getElementById("form-filter-location-from").value;
  var number1 = document.getElementById("form-filter-location-to").value;
  if( number==number1){
    alert("Please Select Diff Departure & Arrival City");
    return false;
  }
  else if(number=="Select City"){
    alert("Select a Valid Departure City");
    return false;
  }
  else if(number1=="Select City"){
    alert("Select a Valid Arrival City");
    return false;
  }
}
function setTicket(obj){

  document.getElementById("form-filter-location-from").value=obj.children[0].getAttribute("id");
  document.getElementById("form-filter-location-to").value= obj.children[1].getAttribute("id");
  alert("Your source and destination is set. Please select date and proceed.");

}
</script>
