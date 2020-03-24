
<!-- Start: BS Main App CP (Control Panel) -->
<div class="wrapper">
    <!-- Start: BS Control Menu -->
    <div class="sidebar" data-color="purple" data-image="" style="background-image: url('https://vignette.wikia.nocookie.net/the-xmen-roleplay/images/c/c1/Forest-Lake-HD-Desktop-Wallpaper.jpg/revision/latest?cb=20130822192442');background-color: #ffffff;">
        <div class="sidebar-wrapper" style="background-color: white;color: #464a6c;">
            <div class="logo" style="padding-left: 0px;"><a class="text-capitalize simple-text" href="#" style="color: #464a6c;margin-top: 2rem !important;"><strong>Services
                        &nbsp;Categories</strong><br></a></div>
            <div class="row no-gutters">
                <div class="col text-justify bs-col-item bs-toggle-margin-top-6">
                    <div role="tablist" id="accordion-1">
                        <?= isset($list) ? $list : '<h1>Empty List</h1>'; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: BS Control Menu -->
    <!-- Start: BS CI Content Menu -->
    <div class="main-panel">
        <div class="row no-gutters">
            <div class="clearfix"></div>
            <div class="col-xl-2">
                <div class="float-left" align="right" style="position: absolute;z-index: 2000;left: -11px;top: -21px;">
                    <button class="btn btn-secondary active btn-block btn-lg shake animated toggle-sidebar" type="button" style="margin-right: .9rem;margin-top: 3.9px;background-color: #464a6c;width: fit-content;position: absolute;display: none;">Menue</button>
                </div>
            </div>
        </div>
        <!-- Start: BS CI Content Context (CC) -->
        <section class="content-contex" style="background-color: #ffffff;">
            <!-- Start: BS CI Home Search Row -->
            <div class="row no-gutters">
                <div class="col">
                    <header class="bg-light border rounded-0 shadow-sm" style="margin-bottom: 1rem;">
                        <div></div>
                        <form style="padding: 10px;background-color: white;">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label>Enter Service</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div><input class="border rounded-0 form-control" type="search" name="query" placeholder="Find Services nearest to you.">
                                            <div class="input-group-append"><button class="btn btn-secondary border rounded-0" type="submit" style="color: rgb(70,74,108);background-color: #eac70e;"><i class="fa fa-search" style="width: 25px;height: 18px;"></i></button></div>
                                        </div><small style="margin-left: .4rem;">Search Results:&nbsp;<span style="margin-left: .5rem;color: rgba(0,0,0,0.3);">0</span></small>
                                    </div>
                                </div>
                                <div class="col-xl-3"><label>location</label>
                                    <div class="form-group"><select class="form-control" name="filter_search_by_location">
                                            <optgroup label="Select Location">
                                                <option value="general" selected="">General</option>
                                                <option value="kaduna">Kaduna</option>
                                                <option value="kano">Kano</option>
                                                <option value="abuja">Abuja</option>
                                                <option value="lagos">Lagos</option>
                                            </optgroup>
                                        </select></div>
                                </div>
                            </div>
                        </form>
                    </header>
                    <h1 style="font-size: 30px;margin-bottom: 69px;color: #464a6c;margin-left: 22px;">We offer
                        all kinds of Services</h1>
                    <p>Make simple requests for the best professional help around you with quick response</p>
                    <!-- Start: best carousel slide -->
                    <section id="carousel">
                        <!-- Start: Carousel Hero -->
                        <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-image: url('<?= base_url(); ?>/assets/img/CATERING4.jpg?h=3655d2651227c271ce1c6334f71db83a');">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item">
                                    <div class="jumbotron pulse animated hero-nature carousel-hero" style="background-image: url('<?= base_url(); ?>/assets/img/233.jpg?h=ecc8d5d38f53eb246f3ada26f5da087d');">
                                        <h1 class="hero-title">Flexible Workstyle</h1>
                                        <p class="hero-subtitle" style="color: #ffffff;font-size: 21px;">Fix
                                            appointments with your clients at perfect time and space</p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="jumbotron border-danger pulse animated hero-photography carousel-hero" style="background-image: url('<?= base_url(); ?>/assets/img/CATERING4.jpg?h=3655d2651227c271ce1c6334f71db83a');">
                                        <h1 class="hero-title">Explore your freedom</h1>
                                        <p class="hero-subtitle" style="font-size: 20px;">Get your tasks done in
                                            no time</p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="jumbotron pulse animated hero-technology carousel-hero" style="background-image: url('<?= base_url(); ?>/assets/img/mobile-hairstilist.bimoservice.jpg?h=25302c7b5b0ffc92bbf97e4fc3d78a8e');">
                                        <h1 class="hero-title">Be innovative with your day</h1>
                                        <p class="hero-subtitle">Instantly connect with servitors</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-1" data-slide-to="0"></li>
                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                            </ol>
                        </div>
                        <!-- End: Carousel Hero -->
                        <!-- Start: Intro Sec-1 -->
                        <div class="card border rounded-0 py-5 mb-4 mt-4">
                            <div class="card-body">
                                <h2 class="card-title bs-color-code">Professional service on the go</h2>
                                <p class="card-text text-muted">Make your day easier and better geting the
                                    sevices you desire at your finger tips.</p>
                                <p class="card-text">Take full control of your day to day activities.</p>
                            </div>
                        </div>
                        <!-- End: Intro Sec-1 -->
                        <!-- Start: Heading -->
                        <div class="card py-4">
                            <div class="card-body">
                                <h2 class="bs-color-code"><strong>Are you self employed? Earn money doing what
                                        you love</strong><br></h2>
                            </div>
                        </div>
                        <!-- End: Heading -->
                        <!-- Start: Intro Sec-2 -->
                        <div class="card border rounded-0 mb-4 mt-4"><img class="img-fluid card-img-top w-100 d-block" src="<?= base_url(); ?>/assets/img/depositphotos_252908634-stock-video-cheerful-african-american-freelancer-is.jpg?h=45e0e6cab8b032634ef9dd7d0f340ccd">
                            <div class="card-body">
                                <p class="card-text text-muted">Get more opportunities that fits your particular
                                    interest and skill.</p>
                                <p class="card-text">Work at your finger tips.</p>
                            </div>
                        </div>
                        <!-- End: Intro Sec-2 -->
                        <!-- Start: Intro Sec-3 -->
                        <div class="card py-5">
                            <div class="card-body">
                                <h2 class="card-title text-center bs-color-code"><strong>Work from anywhere
                                        around the world at your own time and convinience</strong><br></h2>
                                <p class="text-center card-text">Are you looking to do a project? Gather the
                                    right resources and team for it here at Bitmoservice.</p>
                                <p class="text-center card-text">Are you a small company? Scale with flexible
                                    staff without permanent mass.</p>
                                <p class="text-center card-text">Build you network of employee's. Get a free
                                    lancer. Hire a lawyer and so many more.</p>
                                <div class="row py-5">
                                    <div class="col"><a class="btn btn-secondary border rounded-0 border-secondary mb-4" role="button" href="<?= base_url(); ?>/services/list" style="background-color: #464a6c;font-size: 19px;font-family: Roboto, sans-serif;height: 55px;padding-top: 13px;"><strong>Request
                                                &nbsp;A Service</strong><i class="fa fa-angle-double-right" data-bs-hover-animate="flash" style="font-size: 20px;padding: 17px;padding-top: 0;padding-bottom: 0;padding-right: 12px;width: 55px;"></i></a>
                                    </div>
                                    <div class="col"><a class="btn btn-secondary border rounded-0 border-secondary" role="button" href="<?= base_url(); ?>/auth/start/account/sub" style="background-color: #464a6c;font-size: 19px;font-family: Roboto, sans-serif;height: 55px;padding-top: 13px;"><strong>Render
                                                &nbsp;A Service</strong><i class="fa fa-angle-double-right" data-bs-hover-animate="flash" style="font-size: 20px;padding: 17px;padding-top: 0;padding-bottom: 0;padding-right: 12px;width: 55px;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End: Intro Sec-3 -->
                    </section>
                    <!-- End: best carousel slide -->
                </div>
            </div>
            <!-- End: BS CI Home Search Row -->
        </section>
        <!-- End: BS CI Content Context (CC) -->