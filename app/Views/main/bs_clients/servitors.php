<?php

/**
 * [MAIN SITE - Renderers profiles cards]
 * ------------------------------------------
 * The main site footer contains two items
 * 1., The footer
 * 2., The js scripts required to run the site manipulation.
 */
?>
<section class="features-boxed" style="background-color: white;">
    <div class="container-fluid">
        <div class="card border rounded shadow-lg" style="transform: translate(0px,15px);background-color: #fffefe;">
            <header class="bg-light border rounded-0 shadow-sm" style="margin-bottom: 1rem;padding: 10px;background-color: #ffffff;">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>Search for Services</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div><input class="border rounded-0 form-control" type="search" name="query" placeholder="Search here">
                                    <div class="input-group-append"><button class="btn btn-secondary border rounded-0" type="submit" style="background-color: #eac70e;color: #464a6c;"><i class="fa fa-search" style="width: 100%;"></i></button></div>
                                </div><small style="margin-left: .4rem;">Search Results:&nbsp;<span style="margin-left: .5rem;color: rgba(0,0,0,0.3);">0</span></small>
                            </div>
                        </div>
                        <div class="col-xl-3"><label>Filter your location</label>
                            <div class="form-group"><select class="border rounded-0 form-control" name="filter_search_by_location">
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
            <div class="card-body border rounded shadow-lg bs-client-portfolio-cards">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <div class="card border rounded shadow mb-4"><img class="img-fluid card-img-top w-100 d-block h-50" src="<?= base_url(); ?>/assets/img/alhaji-usman.png?h=f36af1baa0181ae99cec5e5d1d937965" data-bs-hover-animate="pulse">
                            <div class="card-body">
                                <h4 class="card-title">Aliyu Ahmed H</h4>
                                <h6 class="text-muted card-subtitle mb-2">Job:&nbsp;<span class="badge badge-pill bs-badge ml-1">Software Eng, Web
                                        Developer/Designer</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Ranking<span class="badge badge-pill bs-badge text-white ml-1"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Office<span class="badge badge-pill bs-badge ml-1">No. 32 Old Jos Road T/Wada Zaria,
                                        Kaduna.</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Status<span class="badge badge-pill badge-success ml-1">Free</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Location&nbsp;<span class="badge bs-badge ml-1">Kaduna</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Price&nbsp;<span class="badge badge-pill bs-badge ml-1">NGN 2000</span></h6><a class="btn bs-badge" role="button" href="../checkout/checkout-form.html?cid=aldfKDlsd34lzld&amp;cate=agriculture&amp;type=aquarium-maintenance">Request</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card border rounded shadow mb-4"><img class="img-fluid card-img-top w-100 d-block h-50" src="<?= base_url(); ?>/assets/img/Routine-Housekeeping-Service.jpg?h=d207f9c45443cd5fcb43333bfdd96106" data-bs-hover-animate="pulse">
                            <div class="card-body">
                                <h4 class="card-title">Allen House Cleaner</h4>
                                <h6 class="text-muted card-subtitle mb-2">Job:&nbsp;<span class="badge bs-badge ml-1">Cleaner</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Ranking<span class="badge bs-badge ml-1"><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i></span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Office<span class="badge bs-badge ml-1">No. 32 Old Jos Road T/Wada Zaria,
                                        Kaduna.</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Status<span class="badge badge-success ml-1">Free</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Location&nbsp;<span class="badge bs-badge ml-1">Abuja</span></h6><button class="btn bs-badge" type="button">Request</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card border rounded shadow mb-4"><img class="img-fluid card-img-top w-100 d-block h-50" src="<?= base_url(); ?>/assets/img/aliyu-musa.png?h=89a1c371bb5f3e7eabfc025355742cef" data-bs-hover-animate="pulse">
                            <div class="card-body">
                                <h4 class="card-title">Muhammed Abdullahi</h4>
                                <h6 class="text-muted card-subtitle mb-2">Job:&nbsp;<span class="badge bs-badge ml-1">Web Developer</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Ranking<span class="badge bs-badge ml-1"><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i></span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Office<span class="badge bs-badge ml-1">No. 32 Old Jos Road T/Wada Zaria,
                                        Kaduna.</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Status<span class="badge badge-success ml-1">Free</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Location&nbsp;<span class="badge bs-badge ml-1">Kaduna</span></h6><button class="btn bs-badge" type="button">Request</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card border rounded shadow mb-4"><img class="img-fluid card-img-top w-100 d-block h-50" src="<?= base_url(); ?>/assets/img/agricultural-customer-service.bitmoservice.jpg?h=cf8c1ce7199a5df069f19c4c15d52970" data-bs-hover-animate="pulse">
                            <div class="card-body">
                                <h4 class="card-title">Joy Musa</h4>
                                <h6 class="text-muted card-subtitle mb-2">Job:&nbsp;<span class="badge bs-badge ml-1">Free Lancer/Software Developer</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Ranking<span class="badge bs-badge ml-1"><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i></span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Office<span class="badge bs-badge ml-1">No. 32 Old Jos Road T/Wada Zaria,
                                        Kaduna.</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Status<span class="badge badge-success ml-1">Free</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Location&nbsp;<span class="badge bs-badge ml-1">Kaduna</span></h6><button class="btn bs-badge" type="button">Request</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card border rounded shadow mb-4"><img class="img-fluid card-img-top w-100 d-block h-50" src="<?= base_url(); ?>/assets/img/alhaji-usman.png?h=f36af1baa0181ae99cec5e5d1d937965" data-bs-hover-animate="pulse">
                            <div class="card-body">
                                <h4 class="card-title">Aliyu Ahmed H</h4>
                                <h6 class="text-muted card-subtitle mb-2">Job:&nbsp;<span class="badge bs-badge ml-1">Software Eng, Web Developer/Designer</span>
                                </h6>
                                <h6 class="text-muted card-subtitle mb-2">Ranking<span class="badge bs-badge ml-1"><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i><i class="fa fa-star text-warning" style="color: gold;"></i></span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Office<span class="badge bs-badge ml-1">No. 32 Old Jos Road T/Wada Zaria,
                                        Kaduna.</span></h6>
                                <h6 class="text-muted card-subtitle mb-2">Status<span class="badge badge-success ml-1">Free</span></h6><button class="btn bs-badge" type="button">Request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>