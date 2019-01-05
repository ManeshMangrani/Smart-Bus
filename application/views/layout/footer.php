<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <div class="page text-center">
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
                      <div class="reveal-inline-block"><a href="mailto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span></span><span class="unit-body"><span class="text-silver">info@smartbus.pk</span></span></a></div>
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
                  <p class="text-silver">Enter your email address to get the latest about Smart-bus, Special events and Student activities delivered right to your inbox.</p>
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
                          <p class="text-silver">For Confirmation Check Your Mailbox.</p>
                        </div>
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
  
</html>