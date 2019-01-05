<head>    <!-- Site Title-->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
        <div class="page text-center">   
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
                    <div class="reveal-inline-block"><a href="callto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span></span><span class="unit-body"><span class="text-gray-darker">021-36502089</span></span></a></div>
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
                <div class="rd-navbar-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='105' height='57' src='<?php echo PATH; ?>images/logo-light1.png' alt=''/></a></div>
              </div>
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
                          <li><a href="<?php echo site_url('index.php/user_dashboard/viewProfile') ?>">View Profile</a></li>
                            <li><a href="<?php echo site_url('index.php/user_dashboard/changePassword_loader') ?>">Change Password</a></li>
                            <li><a href="<?php echo site_url('index.php/user_dashboard/viewTrips') ?>">View Trips</a></li>
                        </ul>
                      </li>
                      <?php }else{ ?>
                      
                      <li><a href="<?php echo base_url();?>index.php/auth/login_loader">Login/Register</a>
                                             <!-- RD Navbar Dropdown-->
                      </li>
                      <?php } ?>
                      <li><a href="<?php echo base_url();?>index.php/nav_about/history">About</a>
                        <!-- RD Navbar Dropdown-->
       
                      </li>
                     <!-- <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="<?php echo site_url('index.php/nav_destinations/destinations') ?>">Destinations</a></li>-->
                        <!-- RD Navbar Dropdown-->
                     
                      
                      <li><a href="<?php echo site_url('index.php/nav_deals/deals') ?>">Offers</a></li>
                     
                      <li><a href="<?php echo site_url('index.php/nav_tracking/tracking') ?>">Tracking</a></li>
                   
                      <li><a href="<?php echo site_url('index.php/nav_contact/contact') ?>">Contact</a></li>
                    </ul>

                  </div>
                </div>
                <!-- RD Navbar Search-->
                <div class="rd-navbar-search rd-navbar-search-top-panel"><a data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="<?php echo site_url('index.php/nav_search/search') ?>" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
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
        <!-- Modern Breadcrumbs-->
        
        <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Login/Register</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li>Login/Register
                  </li>
                </ul>
              </div>
            </div>
          </div>
    </section>
  </header>
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Login and Register-->
        <section class="section-top-90 section-bottom-90 section-md-top-82 section-md-bottom-300 section-md-111 text-sm-left">
          <div class="shell">
            <div class="range range-xs-center range-md-left">
              <div class="cell-xs-10 cell-sm-8 cell-md-6 cell-lg-4">
                <!-- Responsive-tabs-->
                <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
                  <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                    <li>Login</li>
                    <li>Register</li>
                  </ul>
                  <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                    <div>
                      <!-- RD Mailform-->
                      <form action="<?php echo site_url('index.php/auth/login') ?>" method="post" class="rd-mailform text-left">
                        <div class="form-group form-group-label-outside">
                          <label for="login-email" class="form-label form-label-outside text-dark">Your e-mail</label>
                          <input id="login-email" type="email" name="username" data-constraints="@Email @Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="login-password" class="form-label form-label-outside text-dark">Password</label>
                          <input id="login-password" type="password" name="password" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <select name="role" class="form-control">
                            <option>Select Role</option>
                            <option>Admin</option>
                            <option>User</option>
                          </select>
                        </div>
                        <div class="offset-top-15 offset-sm-top-30 text-center text-md-left">
                          <h6 style="color : red;"><?php if($data['Error'] != "NULL") echo $data['Error'];?></h6><br>
                          <div class="reveal-xs-inline-block text-middle">
                            <input type="submit" class="btn btn-ellipse-type-2 btn btn-ripe-lemon" value="sign in">
                          </div>
                          <div class="reveal-xs-inline-block inset-xs-left-15 offset-top-15 offset-sm-top-0">
                            <div class="reveal-xs-inline-block text-middle">
                              <p class="text-gray">or enter with</p>
                            </div>
                            <div class="reveal-xs-inline-block inset-xs-left-20 text-middle offset-top-10 offset-xs-top-0">
                              <ul class="list-inline list-inline-2 inset-left-0">
                                <li><a href="https://www.facebook.com" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></a></li>
                                <li><a href="https://twitter.com/login?lang=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div>
                      <!-- RD Mailform-->
                      <form action="<?php echo site_url('index.php/auth/register');?>" method="post" class="rd-mailform text-left">
                        <div class="form-group form-group-label-outside">
                          <label for="register-name" class="form-label form-label-outside text-dark">First-Name</label>
                          <input id="register-name" type="text" name="fname" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="register-name" class="form-label form-label-outside text-dark">Last-Name</label>
                          <input id="register-name1" type="text" name="lname" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <select name="gender" class="form-control">
                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                          </select>
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="register-email" class="form-label form-label-outside text-dark">E-mail Address</label>
                          <input id="register-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="register-phone" class="form-label form-label-outside text-dark">Contact #</label>
                          <input id="register-phone" type="text" name="phone" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="register-cnic" class="form-label form-label-outside text-dark">CNIC</label>
                          <input id="register-cnic" type="text" name="cnic" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="register-dob" class="form-label form-label-outside text-dark">Date of Birth</label>
                          <input id="register-dob" type="date" name="dob" data-constraints="@Required" class="form-control" max="<?php echo date("Y-m-d"); ?>">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="register-password" class="form-label form-label-outside text-dark">Password</label>
                          <input id="register-password" type="password" name="password" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="register-repeat-password" class="form-label form-label-outside text-dark">Repeat a password</label>
                          <input id="register-repeat-password" type="password" name="r_password" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group offset-top-15 text-center text-md-left">
                          <label class="checkbox-inline">
                            <input id="register-radio" name="register-radio" value="checkbox-1" type="checkbox" class="checkbox-custom"><span class="small p"><span class="small">I agree with the <a href="<?php echo site_url('index.php/footer/privacy') ?>" class="text-primary">Terms of use</a></span></span><span>.</span>
                          </label>
                          <a id="modal-788038" href="#modal-container-788038" role="button" class="btn btn-xs btn btn-ellipse-type-2 btn btn-primary" data-toggle="modal">Hints</a>
                        </div>
                        <div class="offset-top-15 offset-sm-top-20 text-center text-md-left">
                          <h6><?php if($data['validation_error'] != "NULL"){?> 
                          <h2 style="color: #3256a4">Errors</h2><?php
                          foreach ($data['validation_error'] as $k) {
                            ?><ul style="color : red;"><li><?php
                            echo $k;?></li></ul><?php
                          }}
                          ?></h6><br>
                         <input type="submit" class="btn btn-ellipse-type-2 btn-ripe-lemon" value="Sign Up">
                        </div>
                      </form>
                      <div class="col-md-6">
          
                        <div class="modal fade" id="modal-container-788038" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="margin-top: 40px">
                      
                                
                              </div>
                              <div class="modal-body" style="width: 350px">
                                <div class="wrapper" style="margin-top: 0px">
                                  <div class="container" style="margin-top: 0px">
                                    <h2 style="color: #3256a4">Hints to Sign-up</h2>
                                    <ul>
                                      <li>Name Fields should be less than or equal to 15 characters.</li>
                                      <li>Phone # should be 11 characters without (-).</li>
                                      <li>CNIC # should be 13 characters without (-).</li>
                                      <li>Address should be less than 50 characters including (# - ,).</li>
                                      <li>Password should be 6-10 characters.</li>
                                      <li>Special characters are not allowed unless mentioned.</li>
                                      <li>E-mail and CNIC are once used, can't repeat.</li>
                                      <li>All Fields are Mendatory.</li>
                                      <li>You must agree with our <a href="<?php echo site_url('index.php/footer/privacy') ?>" class="text-primary">Terms of use</a>.</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn btn-ellipse-type-2 btn btn-ripe-lemon" data-dismiss="modal">
                              agreed
                                </button>         
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Footer Default-->
      <footer class="page-footer bg-chathams-blue">
        <section class="section-60">
          <div class="shell">
            <div class="range range-xs-center text-md-left">
              <div class="cell-xs-10 cell-sm-7 cell-md-4">
                <!-- Footer brand-->
                <div class="footer-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='97' height='57' src='<?php echo PATH; ?>images/logo.png' alt=''/></a></div>
                <div class="offset-top-30 inset-sm-right-20">
                  <p class="text-silver">Smart Bus is the leading go-to website for City School use for point purpose. This smart bus is IOT base.</p>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-7 cell-md-4 offset-top-60 offset-md-top-0">
                <div>
                  <h5 class="text-bold text-white">Contacts</h5>
                </div>
                <div class="offset-top-6">
                  <div class="text-subline bg-ripe-lemon"></div>
                </div>
                <div class="offset-top-20">
                  <!-- Contact Info-->
                  <address class="contact-info text-left">
                    <div>
                      <div class="reveal-inline-block"><a href="callto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span></span><span class="unit-body"><span class="text-silver">021-36502089
 </span></span></a></div>
                    </div>
                    <div class="offset-top-10">
                      <div class="reveal-inline-block"><a href="mailto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span></span><span class="unit-body"><span class="text-silver">info@smartBus.pk</span></span></a></div>
                    </div>
                    <div class="offset-top-10">
                      <div class="reveal-inline-block"><a href="#" class="unit unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span></span><span class="unit-body"><span class="text-silver">Karachi,Pakistan</span></span></a></div>
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
                  <h5 class="text-bold text-white">Newsletter</h5>
                </div>
                <div class="offset-top-6">
                  <div class="text-subline bg-ripe-lemon"></div>
                </div>
                <div class="offset-top-25">
                  <p class="text-silver">Enter your email address to get the latest about Smart-Bus, Special events and Student activities delivered right to your inbox.</p>
                </div>
                <div class="offset-top-20">
                        <form data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform rd-mailform-subscribe">
                          <div class="form-group form-group-sm">
                            <div class="input-group">
                              <input placeholder="Your e-mail..." type="email" name="email" data-constraints="@Email @Required" class="form-control"><span class="input-group-btn">
                                <button type="submit" class="btn btn-xs btn-ripe-lemon">Subscribe</button></span>
                            </div>
                          </div>
                          <div id="form-subscribe-footer" class="form-output"></div>
                        </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-12 text-md-left">
          <div class="shell">
            <p class="font-accent"><span class="small text-silver-dark">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a href="<?php echo site_url('index.php/footer/privacy') ?>">Privacy Policy</a></span></p>
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