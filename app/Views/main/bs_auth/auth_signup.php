<!-- Start: ♣ Signup form Page BS4 ♣ -->
<main>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <!-- Start: Signup block -->
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <!-- Start: Signup container -->
                <div class="border rounded-0 shadow-sm m-auto w-lg-75 w-xl-50">
                    <!-- Start: Your company -->
                    <h2 class="text-center text-info font-weight-light mb-5 mt-5"><img class="img-fluid w-75" src="<?= base_url(); ?>/assets/img/logo/bs-logo-white.jpeg?h=5ae19eaa76efcc26897d4a9154eb26b5">&nbsp;</h2>
                    <!-- End: Your company -->
                    <header class="text-center">
                        <h1 class="bs-color-code"><?= isset($is_active) && !$is_active ? 'Sign Up' : 'You already have an account.'; ?></h1>
                        <hr>
                    </header>
                    <?php if (isset($is_active) && !$is_active) : ?>
                        <!-- Start: Signup form -->
                        <form id="user_signupform" class="p-4">
                            <!-- Start: Name -->
                            <div class="form-group">
                                <label class="text-secondary">Surname*</label>
                                <input class="form-control auth_input" type="text" name="user_surname" required="" pattern="[A-Z]+[a-z]+[^_*$%£@~#()]" >
                            </div>
                            <!-- End: Name -->
                            <!-- Start: Name -->
                            <div class="form-group">
                                <label class="text-secondary">First Name*</label>
                                <input class="form-control auth_input" type="text" name="user_firstname" required="" pattern="[A-Z]+[a-z]+[^_*$%£@~#()]" >
                            </div>
                            <!-- End: Name -->
                            <!-- Start: Name -->
                            <div class="form-group">
                                <label class="text-secondary">Last Name&nbsp;<small>(Optional)</small></label>
                                <input class="form-control auth_input" type="text" name="user_lastname" pattern="[A-Z]+[a-z]+[^_*$%£@~#()]" >
                            </div>
                            <!-- End: Name -->
                            <!-- Start: Name -->
                            <div class="form-group">
                                <label class="text-secondary">Phone Number*<small class="form-text text-muted">Phone number must start with +234 followed by 10 digit of your phone number</small></label>
                                <input class="form-control auth_input" type="tel" name="user_phone_number" required="" maxlength="14" minlength="14" pattern="[+][234]+[0-9]{2,15}$">
                            </div>
                            <!-- End: Name -->
                            <!-- Start: Email -->
                            <div class="form-group">
                                <label class="text-secondary">Email*</label>
                                <input class="form-control auth_input" type="email" name="user_username" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$">
                            </div>
                            <!-- End: Email -->
                            <!-- Start: Password -->
                            <div class="form-group">
                                <label class="text-secondary">Password*</label>
                                <input class="form-control auth_input" type="password" name="user_password" required="" maxlength="12" minlength="6" pattern="[A-Za-z]+[0-9]+[^A-Za-z0-9_]$">
                            </div>
                            <!-- End: Password -->
                            <!-- Start: Password -->
                            <div class="form-group">
                                <label class="text-secondary">Confirm Password*</label>
                                <input class="form-control auth_input" type="password" name="user_confirm_password" required="" maxlength="12" minlength="6" pattern="[A-Za-z]+[0-9]+[^A-Za-z0-9_]$">
                            </div>
                            <!-- End: Password -->
                            <!-- Start: Password Guid -->
                            <div class="form-group"><small class="form-text text-muted">Make sure your password contains the following format:</small>
                                <ol type="a">
                                    <li>start with a upper case char. e.g: Pascal</li>
                                    <li>Atlest a digit. e.g: 0-9</li>
                                    <li>atlest a symbol. e.g: $,@*- etc.</li>
                                    <li>contains at lest: 6 char short, 12 char long.</li>
                                </ol>
                            </div>
                            <!-- End: Password Guid -->
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input auth_input" type="checkbox" name="auth_agreement" value="agreed" checked="" id="formCheck-1">
                                    <label class="form-check-label text-capitalize" for="formCheck-1" style="font-style: italic;text-align: center;">&nbsp;
                                        By clicking "Signup" you agreed to our <a href="#">Terms of Service, Terms of Use, Privacy Policy and Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div align="center">
                                <!-- Start: Submit -->
                                <button class="btn btn-secondary btn-lg border rounded shadow-sm mt-2" type="submit" style="background-color: #464a6c;">Signup</button>
                                <!-- End: Submit -->
                            </div>
                            <!-- log error and success message -->
                            <div class="log-xhr-response mt-4">

                            </div>
                            <small class="form-text text-center text-muted mt-4">Already registered?</small>
                            <hr>
                        </form>
                    <?php endif; ?>
                    <!-- End: Signup form -->
                    <?php if (isset($is_active) && !$is_active) : ?>
                        <!-- Start: Forgot password -->
                        <p class="text-center mt-3 mb-0"><a href="<?= base_url(); ?>/auth/user/login" class="text-info small mr-3">Login here</a></p>
                        <!-- End: Forgot password -->
                    <?php endif; ?>
                    <button class="btn btn-light btn-block" type="button" onclick="window.history.back();"><i class="fa fa-history"></i> Back</button>
                </div>
                <!-- End: Signup container -->
            </div>
            <!-- End: Signup block -->
            <!-- Start: Background image -->
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url('<?= base_url(); ?>/assets/img/aldain-austria-316143-unsplash.jpg?h=06fc6829419b289c38931415861e76b8');background-size:cover;background-position:center center;">
                <!-- Start: Credit photo -->
                <!-- <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p> -->
                <!-- End: Credit photo -->
            </div>
            <!-- End: Background image -->
        </div>
    </div>
    <!-- End: ♣ Signup form Page BS4 ♣ -->