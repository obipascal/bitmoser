<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= isset($title) ? $title : '';?>::.</title>
    <meta name="description" content="Renderer Login Interface">
    <link rel="stylesheet"
        href="<?= base_url();?>/assets/bootstrap/css/bootstrap.min.css?h=2ad2b595dbb7119c5473ff4c94f299d2">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Belleza">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantata+One&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Copse">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/bs-dsh-media.css?h=09766d7c0ee3233503df4c9ea00e07af">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/modal-dailog/ibox.css?h=c9f2927f4495ff0146d0ab474803fb2f">
    <link rel="stylesheet"
        href="<?= base_url();?>/assets/css/modal-dailog/infobox.css?h=2f8586e0e9d77d99be1d55fe82ad8167">
    <link rel="stylesheet"
        href="<?= base_url();?>/assets/css/Google-Style-Login.css?h=857edb71cfc135683f2a1788dc6dcd99">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/loader.min.css?h=380c56e785f00b4b744f1b48d5aaa1e9">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/styles.css?h=164f77d159ab5814e0a831cd83a4ef55">
    <link rel="stylesheet"
        href="<?= base_url();?>/assets/css/Table-With-Search-1.css?h=604cb4e2e523f88e3270d5f1dbcb81fa">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Table-With-Search.css?h=151c14cfaa5080353ec48ad9f843c0b4">
    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>/favicon.png" />
</head>

<body style="background: rgb(70, 78, 108);">
    <!-- Start: Google Style Login -->
    <div class="border rounded shadow-lg login-card"><img class="img-thumbnail img-fluid profile-img-card"
            src="<?= base_url();?>/assets/img/bs-logo-white.jpeg?h=3d6e03d5257f0d5efbef470f4c2a4e42">
        <p class="profile-name-card"> </p>
        <form id="auth_client_signin" class="auth_client_signin">
            <span class="reauth-email"> </span>
            <!-- User ID -->
            <input class="border rounded-0 border-info form-control" type="text" name="auth_client_id" required=""
                placeholder="ID: 1830239423" value="<?= isset($_SESSION['bs_rendar_isActive']) ? $_SESSION['bs_rendar_publicID']: '';?>" pattern="[0-9]+[^A-Za-z_%$@~#-+',*]" id="authClientID">
            <br/>
            <!-- Password -->
            <input class="border rounded-0 border-info form-control" style="text-transform: none" type="password" name="auth_client_security_key"
                required="" placeholder="Password" id="authClientSecKey">
            <!-- <div class="checkbox">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck-1"><label
                        class="form-check-label" for="formCheck-1">Remember me</label>
                    </div>
            </div> -->
            <!-- br -->
            <br/>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit"
                style="background-color: #464e6c;">Sign in</button>
        </form><a href="#" class="forgot-password">Forgot your password?</a>
    </div>
    <!-- End: Google Style Login -->
    <footer class="py-2 w-100 bs-bg mt-4" style="position: relative;bottom: -174px;z-index: 100;">
        <div align="center">
            <h6 class="m-0 w-25"><strong style="color: #ffffff;">bitmo</strong><strong
                    style="color: #ffd700;">Service</strong></h6>
            <hr class="d-block w-25" style="border-color: #f5f5f5;"><small class="text-muted">Copyright © 2019-2020
                Alright
                Reserved&nbsp;</small>
        </div>
    </footer>
    <script src="<?= base_url();?>/assets/js/jquery.min.js?h=1dd785e1de9a32e236b624ae268bb803"></script>
    <script src="<?= base_url();?>/assets/bootstrap/js/bootstrap.min.js?h=2394c9ffd5558f411ffdc3326e9a8962"></script>
    <!-- BS Xhr Modul -->
    <script src="<?= base_url();?>/assets/js/BSXhrRequest.min.js"></script>
    <!-- ./BS Xhr Module -->
    <!-- <script src="<?= base_url();?>/assets/js/bsModals/BSModalBox.j/s?h=0bd64b1e571d34f2972b7ad5fff43d2b"></script> -->
    <script src="<?= base_url();?>/assets/js/checkpassword-strenght.js?h=e71756e3620bdef83aae01f19d3c2e75"></script>
    <script src="<?= base_url();?>/assets/js/media/bs-dsh-media.js?h=8718b7ee45a84a98423536f0906f03f2"></script>
    <script src="<?= base_url();?>/assets/js/modal-dailog/ibox.js?h=1fcbdbae208e2d19ae41700c853516c4"></script>
    <script src="<?= base_url();?>/assets/js/modal-dailog/infobox.js?h=9022c15d307bf83d64d0ff808da73b8a"></script>
    <script src="<?= base_url();?>/assets/js/request/bs.confirm.request.js?h=f0487fc8b35861824666ea31210f3214"></script>
    <script src="<?= base_url();?>/assets/js/request/bs.rq.md.checkbox.js?h=07da548946826279d962409b7e95b399"></script>
    <script src="<?= base_url();?>/assets/js/request/bs.rq.md.open.close.js?h=d06b6fc885cb92761783b24f16c8f95f">
    </script>
    <script src="<?= base_url();?>/assets/js/services/bs.htmlparser.min.js?h=be8917ba9f3af231750a5b4eb10573b8"></script>
    <script src="<?= base_url();?>/assets/js/services/form.field.table.js?h=7c96bc2142567c61330f7e474bcc2233"></script>
    <script src="<?= base_url();?>/assets/js/services/update.price.tag.js?h=6fdf7318b86c2b35ce2ce138c9302732"></script>
    <script src="<?= base_url();?>/assets/js/simplify.request.service.min.js?h=413c4d238e384382996e2f5eed283d9b">
    </script>
    <script src="<?= base_url();?>/assets/js/Table-With-Search.js?h=aeb9a0ac8b6cc9ec2e3b9cc3add2f239"></script>

    <!-- Authentication -->
    <script src="<?= base_url();?>/assets/js/request/bs.rq.authentication.js"></script>
    <!-- ./Authentication -->
</body>

</html>