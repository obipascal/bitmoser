
    <!-- Start: ♣ Login form Page BS4 ♣ -->
    <div class="container-fluid">
        <div class="row mh-100vh">
            <!-- Start: Login block -->
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <!-- Start: Login container -->
                <div class="border rounded-0 shadow-sm m-auto w-lg-75 w-xl-50 pb-2">
                    <!-- Start: Your company -->
                    <h2 class="text-center text-info font-weight-light mb-5 mt-5"><img class="img-fluid w-75" src="<?= base_url();?>/assets/img/logo/bs-logo-white.jpeg?h=5ae19eaa76efcc26897d4a9154eb26b5">&nbsp;</h2>
                    <!-- End: Your company -->
                    <header>
                        <h1 class="text-center bs-color-code">Recover Password</h1>
                        <hr>
                    </header>
                    <!-- Start: Login form -->
                    <form class="p-4">
                        <!-- Start: Email -->
                        <div class="form-group"><label class="text-secondary">Email</label><input class="form-control auth_input" type="text" name="auth_username" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email"></div>
                        <!-- End: Email -->
                        <!-- Start: Submit --><button class="btn btn-info mt-2" type="submit" style="background-color: #464a6c;">Recover</button>
                        <!-- End: Submit -->
                    </form>
                    <!-- End: Login form --><small class="form-text text-center text-muted">Already registered?</small>
                    <hr class="w-75">
                    <!-- Start: Forgot password -->
                    <p class="text-center mt-3 mb-0"><a href="<?= base_url();?>auth/user/login" class="text-info small mr-3">Login</a><a class="text-muted small">← or →</a><a href="<?= base_url();?>auth/user/signup" class="text-info small ml-3">Signup</a></p>
                    <!-- End: Forgot password --><button class="btn btn-light btn-block" type="button" onclick="window.history.back();"><i class="fa fa-history"></i> Back</button></div>
                <!-- End: Login container -->
            </div>
            <!-- End: Login block -->
            <!-- Start: Background image -->
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url('<?= base_url();?>/assets/img/aldain-austria-316143-unsplash.jpg?h=06fc6829419b289c38931415861e76b8');background-size:cover;background-position:center center;">
                <!-- Start: Credit photo -->
                <!-- <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p> -->
                <!-- End: Credit photo -->
            </div>
            <!-- End: Background image -->
        </div>
    </div>
    <!-- End: ♣ Login form Page BS4 ♣ -->
    