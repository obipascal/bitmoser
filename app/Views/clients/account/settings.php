<!-- Start: Account Settings -->
<div class="col">
    <ol class="breadcrumb border rounded-0">
        <li class="breadcrumb-item show-dsh-sidebar"><a><span style="cursor: pointer;"><i
                        class="fa fa-th-large"></i><strong>&nbsp;Menue</strong></span></a></li>
    </ol>
    <div class="bs-user-dsh-main-menu">
        <header></header>
        <div class="container-fluid">
            <!-- Start: Card Heading -->
            <div class="card mb-2">
                <div class="card-body">
                    <h4 class="card-title bs-color">Update Account Information</h4>
                    <hr>
                </div>
            </div>
            <!-- End: Card Heading -->
            <div>
                <ul class="nav nav-tabs nav-fill bg-light border rounded shadow-sm mb-1">
                    <li class="nav-item bs-color" style="font-size: x-large;"><a class="nav-link active" role="tab"
                            data-toggle="tab" href="#tab-1"><strong>Account&nbsp;</strong></a></li>
                    <li class="nav-item" style="font-size: x-large;"><a class="nav-link bs-color" role="tab"
                            data-toggle="tab" href="#tab-2"><strong>&nbsp;Request&nbsp;</strong></a></li>
                    <li class="nav-item" style="font-size: x-large;"><a class="nav-link bs-color" role="tab"
                            data-toggle="tab" href="#tab-3">Bank/Payments</a></li>
                </ul>
                <div class="tab-content bg-light border rounded-0 shadow-sm p-3">
                    <div class="tab-pane fade  show active" role="tabpanel" id="tab-1">
                        <!-- Start: Profile Card -->
                        <div class="card border rounded shadow">
                            <header class="bg-light mb-2 p-3" style="border: 1px solid rgb(70, 78, 108) !important;">
                                <div class="row no-gutters">
                                    <div class="col-xl-3">
                                        <!-- Start: Client Avatar -->
                                        <div class="client-avatar mb-2" align="center">
                                            <img class="rounded-circle img-fluid border border-info shadow-sm w-50 bs_updateAvatarPreview"
                                                src="<?= base_url();?>/clientAssets/assets/img/avatar_2x.png?h=7cc9532df578bb0171ffee4fd19b3b83">
                                            <p class="mt-2"><strong>Preview Profile Picture</strong></p>
                                        </div>
                                        <!-- End: Client Avatar -->
                                    </div>
                                    <div class="col">
                                        <!-- Start: Client Info heighlight -->
                                        <div class="ml-2" align="center">
                                            <!-- <h3 class="text-center text-muted bs-color mt-2" style="font-family: 'Cantata One', serif;">Drag and drop</h3>
                                             -->
                                            <!--Start: File Uploader form -->
                                            <div class="text-left bs_updateProfileAvatar"></div>
                                            <!--End: File Uploader form -->

                                            
                                        </div>
                                        <!-- End: Client Info heighlight -->
                                    </div>
                                </div>
                            </header>
                            <div class="card-body">
                                <form class="border rounded shadow-sm mb-4">
                                    <!-- Start: Personal Information -->
                                    <section class="mb-4">
                                        <header class="bs-bg">
                                            <h3 class="bs-color pl-2 pt-3 text-light"
                                                style="font-family: 'Cantata One', serif;">Personal
                                                Information</h3>
                                            <hr class="bs-hr">
                                        </header>
                                        <div class="table-responsive table-borderless">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Surname
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_surname" required="" placeholder="Surname">
                                                        </td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>First Name
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_firstname" required=""
                                                                placeholder="First Name"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Last Name
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_lastname" required=""
                                                                placeholder="Last Name"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Email Address
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_email" required="" placeholder="Email">
                                                        </td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Phone Number
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="tel"
                                                                name="update_phoneNumber" required=""
                                                                placeholder="Phone Number"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Country
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_country" placeholder="Country"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>State/Region
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_state" required=""
                                                                placeholder="State/Region"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>City/Town
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_city" required="" placeholder="City/Town">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- End: Personal Information -->
                                    <div class="form-group">
                                        <div class="pr-5" align="right"><button class="btn btn-success bs-bg"
                                                type="submit">Save</button></div>
                                    </div>
                                </form>
                                <form class="border rounded shadow-sm mb-4">
                                    <!-- Start: Business Information -->
                                    <section class="mb-4">
                                        <header class="bs-bg">
                                            <h3 class="bs-color pl-2 pt-3 text-light"
                                                style="font-family: 'Cantata One', serif;">Business
                                                Information</h3>
                                            <hr class="bs-hr">
                                        </header>
                                        <div class="table-responsive table-borderless">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Business
                                                                Brand Name *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_bus_brand" required=""
                                                                placeholder="Business Brand/Company">
                                                        </td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Business
                                                                Offical Email *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_bus_email" required=""
                                                                placeholder="Business Email"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Buisness Hot
                                                                Line *</strong></td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_bus_phoneNumber" required=""
                                                                placeholder="Busines Phone Number"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color">
                                                            <strong>Business/Office Address *</strong>
                                                        </td>
                                                        <td class="input"><input class="form-control w-75" type="text"
                                                                name="update_bus_lineAddres1" required=""
                                                                placeholder="Business Office Address  Line 1"><input
                                                                class="form-control w-75 mt-1" type="text"
                                                                name="update_bus_lineAddres2"
                                                                placeholder="Business Office Address  Line 2">
                                                        </td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Business Type
                                                                *</strong></td>
                                                        <td class="input"><select class="form-control w-75"
                                                                name="update_bus_type" required="">
                                                                <optgroup label="Business Type">
                                                                    <option value="Mobile" selected="">
                                                                        Mobile Business (Moves about)
                                                                    </option>
                                                                    <option value="Stationary">
                                                                        Stationary Buinsess (Fixed
                                                                        position)</option>
                                                                </optgroup>
                                                            </select>
                                                            <small class="form-text text-muted w-75">Business
                                                                type means the nature of your business.
                                                                posible options
                                                                Mobile/Stationary</small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- End: Business Information -->
                                    <div class="form-group">
                                        <div class="pr-5" align="right"><button class="btn btn-success bs-bg"
                                                type="submit">Save</button></div>
                                    </div>
                                </form>
                                <form class="border rounded shadow-sm mb-4">
                                    <!-- Start: Business Information -->
                                    <section class="mb-4">
                                        <header class="bs-bg">
                                            <h3 class="bs-color pl-2 pt-3 text-light"
                                                style="font-family: 'Cantata One', serif;">Change
                                                Password</h3>
                                            <hr class="bs-hr">
                                        </header>
                                        <div class="table-responsive table-borderless">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Old Password
                                                                *</strong></td>
                                                        <td class="input"><input class="form-control w-75"
                                                                type="password" name="update_old_password" required=""
                                                                placeholder="Enter old password" autocomplete="on"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>New
                                                                Password*</strong></td>
                                                        <td class="input"><input class="form-control w-75"
                                                                type="password" name="update_newPassword" required=""
                                                                placeholder="Enter new password" minlength="6"
                                                                pattern="[A-Z0-9]+[a-z0-9]+[^A-Za-z0-9_]"
                                                                autocomplete="on" id="newPassword"></td>
                                                    </tr>
                                                    <tr class="form-group">
                                                        <td class="label bs-color"><strong>Re-Enter New
                                                                Password *</strong></td>
                                                        <td class="input"><input class="form-control w-75"
                                                                type="password" name="update_confirmNewPassword"
                                                                required="" placeholder="Confirm new password"
                                                                pattern="[A-Z0-9]+[a-z0-9]+[^A-Za-z0-9_]"
                                                                autocomplete="on" id="cofirmNewPassword"><small
                                                                class="form-text text-muted">Password
                                                                Strenght</small>
                                                            <div class="progress mt-2 w-75">
                                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width: 0%;"><span
                                                                        class="sr-only">0%</span></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- End: Business Information -->
                                    <div class="form-group">
                                        <div class="pr-5" align="right"><button class="btn btn-success bs-bg"
                                                type="submit">Change</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End: Profile Card -->
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="tab-2">
                        <form class="border rounded shadow-sm mb-4">
                            <!-- Start: Personal Information -->
                            <section class="mb-4">
                                <header class="bs-bg">
                                    <h3 class="bs-color pl-2 pt-3 text-light"
                                        style="font-family: 'Cantata One', serif;">Service Request
                                        Information</h3>
                                    <hr class="bs-hr">
                                </header>
                                <div class="table-responsive table-borderless">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr class="form-group">
                                                <td class="label bs-color"><strong>Maximum request per
                                                        day</strong></td>
                                                <td class="input"><input class="form-control w-75" type="number"
                                                        name="set_maxReqPerDay" placeholder="e.g   5" min="1"
                                                        step="1"><small class="form-text text-info w-75">Posible number
                                                        of task you wish to do per day.</small></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td class="label bs-color"><strong>Success message for
                                                        each successful request.</strong></td>
                                                <td class="input"><textarea class="form-control w-75"
                                                        name="set_reqSuccMsg"
                                                        placeholder="e.g. Thank's for choosing our service."></textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- End: Personal Information -->
                            <div class="form-group">
                                <div class="pr-5" align="right"><button class="btn btn-success bs-bg"
                                        type="submit">Save</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="tab-3">
                        <form class="border rounded shadow-sm mb-4">
                            <!-- Start: Personal Information -->
                            <section class="mb-4">
                                <header class="bs-bg">
                                    <h3 class="bs-color pl-2 pt-3 text-light"
                                        style="font-family: 'Cantata One', serif;">Bank/Payment
                                        Information</h3>
                                    <hr class="bs-hr">
                                </header>
                                <div class="table-responsive table-borderless">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr class="form-group">
                                                <td class="label bs-color"><strong>Bank Name</strong>
                                                </td>
                                                <td class="input"><input class="form-control w-75" type="text"
                                                        name="set_bankName" placeholder="Access Bank "
                                                        list="banklist"><datalist id="banklist">
                                                        <option value="Access Bank"></option>
                                                        <option value="Access Bank(Diamond)"></option>
                                                        <option value="GTBank"></option>
                                                        <option value="UBA Bank"></option>
                                                        <option value="FCMB Bank"></option>
                                                        <option value="Jazy Bank"></option>
                                                        <option value="First Bank"></option>
                                                        <option value="Fidelity Bank"></option>
                                                        <option value="Polarise Bank"></option>
                                                    </datalist></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td class="label bs-color"><strong>Bank Account
                                                        Number</strong></td>
                                                <td class="input"><input class="form-control w-75" type="tel"
                                                        name="set_bankAccNo" placeholder="0081946339"></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td class="label bs-color"><strong>Bank Account
                                                        Name</strong></td>
                                                <td class="input"><input class="form-control w-75" type="tel"
                                                        name="set_bankAccName" readonly=""
                                                        placeholder="OBI PASCAL BANJUARE"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- End: Personal Information -->
                            <div class="form-group">
                                <div class="pr-5" align="right"><button class="btn btn-success bs-bg"
                                        type="submit">Save</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Account Settings -->