<section class="features-boxed" style="background-color: #ffffff;">
    <!-- Start: Animated Pretty Product List (v1.2) -->
    <div class="container-fluid">
        <div class="card border rounded shadow-lg" style="margin-top: .8rem;margin-bottom: .6rem;">
            <div class="card-body">
                <header>
                    <h1 class="text-center" style="color: #464e6c;">Subcription Plans</h1>
                    <hr>
                </header>
                <p class="text-center">Choose a subscription plan and start rendering your service</p><small class="form-text text-info" style="font-size: 16px;"><strong>Note: </strong>The plans below allows
                    your profile to be visible to the general public so there can see what product you are rendering,
                    which mean a client from anywhere can request for your service. Your profile deactivates as soon as
                    your subscription expires.</small>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col">
                <!-- Start: Pricing table 3 -->
                <section class="primax table-1 section-padding" style="background-color: #ffffff;">
                    <div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="border rounded shadow-lg pricing-area-1" style="background-color: #464a6c;">
                                    <div class="title-area">
                                        <div class="title-1">
                                            <h1>Basic</h1>
                                        </div>
                                        <div class="tada animated infinite price-1">
                                            <h1><span class="after">NGN</span>1,500</h1><span class="before">Per/Mo</span>
                                        </div>
                                    </div>
                                    <div class="price-body-1">
                                        <ul class="sub-item-list">
                                            <li>max 12 &nbsp;Request</li>
                                            <li>5% Profile Ranking</li>
                                            <li>Fixed Price</li>
                                            <li>Renders Only 1 Service</li>
                                            <li>Seminars</li>
                                        </ul>
                                    </div>
                                    <div class="price-button-1"><a href="<?= base_url(); ?>/auth/create/sr/account/basic<?= isset($next) && !is_null($next) ? '?next=' . $next : ''; ?>" class="button-1">Subscribe</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="border rounded shadow-lg pricing-area-1" style="background-color: #464a6c;">
                                    <div class="title-area">
                                        <div class="title-1">
                                            <h1>Standard</h1>
                                        </div>
                                        <div class="rubberBand animated infinite price-1">
                                            <h1><span class="after">NGN</span>9,000</h1><span class="before">per
                                                6/Mo</span>
                                        </div>
                                    </div>
                                    <div class="price-body-1">
                                        <ul class="sub-item-list">
                                            <li>max 22 Request</li>
                                            <li>20% Profile Ranking</li>
                                            <li>Fixed Price Stack Per Service<br></li>
                                            <li>Renders max 15 services</li>
                                            <li>Seminars</li>
                                        </ul>
                                    </div>
                                    <div class="price-button-1"><a href="<?= base_url(); ?>/auth/create/sr/account/standard<?= isset($next) && !is_null($next) ? '?next=' . $next : ''; ?>" class="button-1">Subscribe</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="border rounded shadow-lg pricing-area-1" style="background-color: #464a6c;">
                                    <div class="title-area">
                                        <div class="title-1">
                                            <h1>Premium</h1>
                                        </div>
                                        <div class="swing animated infinite price-1">
                                            <h1><span class="after">NGN</span>18,000</h1><span class="before">per
                                                1/yr</span>
                                        </div>
                                    </div>
                                    <div class="price-body-1">
                                        <ul class="sub-item-list">
                                            <li>Unlimited Request</li>
                                            <li>Unlimited Profile Ranking</li>
                                            <li>Negoshatable Price with client<br></li>
                                            <li>Renders upto 150 services</li>
                                            <li>Seminars</li>
                                        </ul>
                                    </div>
                                    <div class="price-button-1"><a href="<?= base_url(); ?>/auth/create/sr/account/premium<?= isset($next) && !is_null($next) ? '?next=' . $next : ''; ?>" class="button-1" style="background-color: #eac70e;">Subscribe</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End: Pricing table 3 -->
            </div>
        </div>
    </div>
    <!-- End: Animated Pretty Product List (v1.2) -->
</section>