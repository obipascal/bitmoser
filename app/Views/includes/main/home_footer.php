<?php

/**
 * [HOME PAGE FOOTER]
 * ------------------
 * The main site footer for home only this footer is seperated due to the
 * structure of the home page is not the same with other pages so, inother not to cause the page 
 * malfunction this footer is seperated. The footer contains the two items
 * 1., The footer
 * 2., The js scripts required to run the site manipulation.
 */
?>
<!-- Start: Footer -->
<div class="border-success footer-clean py-4 pl-4" style="margin-top: 10px;">
    <div class="col">
        <div class="form-group shadow-lg">
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <div class="input-group-append"></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row no-gutters justify-content-center">
            <!-- Start: Services -->
            <div class="col-sm-4 col-md-3 item">
                <h3 style="color: #eac70e;">Categories</h3>
                <ul>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Service Rendering</a></li>
                    <li><a href="#">Marketing Unit</a></li>
                </ul>
            </div>
            <!-- End: Services -->
            <!-- Start: About -->
            <div class="col-sm-4 col-md-3 item">
                <h3 style="color: #eac70e;">About</h3>
                <ul>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Legacy</a></li>
                </ul>
            </div>
            <!-- End: About -->
            <!-- Start: Support -->
            <div class="col-sm-4 col-md-3 item">
                <h3 style="color: #eac70e;">Support</h3>
                <ul>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">support@bitmoservice.com</a></li>
                </ul>
            </div>
            <!-- End: Support -->
            <!-- Start: Support -->
            <div class="col-sm-4 col-md-3 item">
                <h3 style="color: #eac70e;">Account</h3>
                <ul>
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="<?= base_url(); ?>/auth/user/login">Login</a></li>
                    <li><a href="<?= base_url(); ?>/auth/user/signup">Sign Up</a></li>
                    <li><a href="<?= base_url(); ?>/auth/start/account/sub">Render a service</a></li>
                </ul>
            </div>
            <!-- End: Support -->
        </div>
    </footer>
    <div class="row no-gutters">
        <div class="clearfix"></div>
        <div class="col">
            <div align="center"><small class="text-warning"><a href="https://bootstrapstudio.io/releases/app/4.3.7/#">Privacy
                        Policy</a>&nbsp;<span>&nbsp;|</span>&nbsp;&nbsp;<a href="https://bootstrapstudio.io/releases/app/4.3.7/#">Terms &amp;
                        Conditions</a>&nbsp;<span>&nbsp;|</span>&nbsp; Copyright &nbsp;bitmoservice ©
                    2019&nbsp;<br></small></div>
        </div>
    </div>
</div>
<!-- End: Footer -->
</div>
<!-- End: BS CI Content Menu -->
</div>
<!-- End: BS Main App CP (Control Panel) -->
<!--Start: bs xhr loader -->
<div class="bs-xhr-loader"></div>
<!--End: bs xhr loader -->
</main>
<!-- End: BS Client Interface (CI) -->
<script src="<?= base_url(); ?>/assets/js/jquery.min.js?h=1dd785e1de9a32e236b624ae268bb803"></script>
<script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js?h=2394c9ffd5558f411ffdc3326e9a8962"></script>
<!-- BS Js library -->
<script src="<?= base_url();?>/globalAssets/js/bitmoser.min.js"></script>
<!-- ./BS Js library -->
<script src="<?= base_url(); ?>/assets/js/bsXhrRequest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/media/bs.css.min.js?h=f0736a06770d1612f0c146133f78fec5"></script>
<script src="<?= base_url(); ?>/assets/js/media/bs.footer.min.js?h=d353226861fd5e1e6d4994ede49775c7"></script>
<script src="<?= base_url(); ?>/assets/js/media/bs.media.min.js?h=0f798d9f5542535faa525f98afa9266b"></script>
<script src="<?= base_url(); ?>/assets/js/MUSA_product-display.js?h=cd32e2d33a6196668bb291183fd075af"></script>
<script src="<?= base_url(); ?>/assets/js/product.services/sidber.accordion.min.js?h=1a6cc8c1fc8a14e9a04ef4f0c36a6015">
</script>
<script src="<?= base_url(); ?>/assets/js/profile.preview.js?h=cfafe20671a6f7907a0ff948d4a82e8e"></script>
<script src="<?= base_url(); ?>/assets/js/rating.sys/rating.sys.min.js?h=2c394aa1685997c37b77172eebac64b9"></script>
<script src="<?= base_url(); ?>/assets/js/request.forms/modal.min.js?h=1c1d14d2f2e444d1d2d40a3ada18a58e"></script>
<script src="<?= base_url(); ?>/assets/js/bs-animation.js?h=98fdbbd86223499341d76166d015c405"></script>
<script src="<?= base_url(); ?>/assets/js/giolocator/locator.min.js?h=73f2f517b6fc915b40dcd4fcb73420af"></script>
<script src="<?= base_url(); ?>/assets/js/modal-dailog/ibox.js?h=1fcbdbae208e2d19ae41700c853516c4"></script>
<script src="<?= base_url(); ?>/assets/js/simplify.request.service.min.js?h=81ca2c2d0cf5ff1b8506e535380990ed"></script>
<!-- Start: intercom App -->
<script>
    window.intercomSettings = {
        app_id: "fmxcs35m",
        name: "<?= isset($user_is_active) && $user_is_active ? $user['chat_name'] : 'Guest or Visitor'; ?>", // Full name
        email: "<?= isset($user_is_active) && $user_is_active ? $user['chat_email'] : 'guestorvisitor@gmail.com'; ?>", // Email address
        created_at: "<?= isset($user_is_active) && $user_is_active ? $user['chat_time'] : 1312182000; ?>" // Signup date as a Unix timestamp
    };
</script>

<script>
    // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/fmxcs35m'
    (function() {
        var w = window;
        var ic = w.Intercom;
        if (typeof ic === "function") {
            ic('reattach_activator');
            ic('update', w.intercomSettings);
        } else {
            var d = document;
            var i = function() {
                i.c(arguments);
            };
            i.q = [];
            i.c = function(args) {
                i.q.push(args);
            };
            w.Intercom = i;
            var l = function() {
                var s = d.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = 'https://widget.intercom.io/widget/fmxcs35m';
                var x = d.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            };
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();
</script>
<!-- End: intercom App -->
</body>

</html>