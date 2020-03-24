<?php

/**
 * [MAIN SITE FOOTER]
 * ------------------
 * The main site footer contains two items
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
</main>
<!-- End: BS Client Interface (CI) -->
<script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/media/bs.css.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/media/bs.footer.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/media/bs.media.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/MUSA_product-display.js"></script>
<script src="<?= base_url(); ?>/assets/js/product.services/sidber.accordion.min.js">
</script>
<script src="<?= base_url(); ?>/assets/js/profile.preview.js"></script>
<script src="<?= base_url(); ?>/assets/js/rating.sys/rating.sys.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/request-forms/modal.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/bs-animation.js"></script>
<script src="<?= base_url(); ?>/assets/js/giolocator/locator.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/modal-dailog/ibox.js"></script>
<script src="<?= base_url(); ?>/assets/js/simplify.request.service.min.jss"></script>
<!-- Authentication Request -->
<script src="<?= base_url(); ?>/assets/js/request-forms/request.Authentication.js"></script>
<!-- ./Authentication Request -->
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