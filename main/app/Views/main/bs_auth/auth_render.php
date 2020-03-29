<section class="features-boxed">
	<!-- Start: Google Products Accordion -->
	<div class="container" id="apps">
		<header class="border rounded-0 shadow-lg" style="margin-bottom: 1rem;padding: 10px;background-color: #ffffff;">
			<h1 class="text-capitalize text-center" style="color: rgb(70,78,108);">Sign Up For A servitor Account</h1>
			<hr>
			<p class="text-center"><strong>Tell Us what you do so we can crawle you easily.</strong><br></p>
		</header>
		<!-- Start: JLX Contact Form with Placeholder FI -->
		<div class="row no-gutters d-flex" id="contact" style="background-color: #ffffff;padding: 15px;">
			<div class="col-md-6"><img class="rounded-circle img-fluid border border-warning" src="<?= base_url(); ?>/assets/img/gravater/user.png?h=25a56d70d87dad0ef06160523bd08873" width="350" height="350" id="preview-picture" style="margin: auto;display: block;width: 50%;">
				<div class="row">
					<div class="col">
						<div class="jumbotron">
							<h1>FindUploader form Here</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- Start: TR Form -->
				<form class="border rounded-0 border-warning p-3" id="createRendererForm">
					<!-- Start: Personal Information -->
					<section class="client-signup-form-sections">
						<h1 style="border-bottom: 1px solid;color: #464e6c;">Personal Information</h1>
						<div class="form-row">
							<div class="col-md-12"><input class="form-control d-none" type="text" value="vr-campus-tours" id="lp-formID"><input class="form-control d-none" type="text" value="" id="lp-pathID"></div>
							<div class="col-6 col-sm-6 col-md-5 col-xl-6"><label><strong>First
										Name </strong><strong class="required-stared">*</strong></label>
								<div id="lp-name-wrapper">
									<input class="form-control" type="text" name="client_firstname" required="" placeholder="First Name" id="lp-name"></div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-xl-6"><label><strong>Last
										Name </strong><strong class="required-stared">*</strong></label>
								<div id="lp-lastname-wrapper">
									<input class="form-control" type="text" name="client_lastname" required="" placeholder="Last Name" id="lp-lastname"></div>
							</div>
							<div class="col-4 col-sm-2 col-md-5"><label><strong>Country Code </strong><strong class="required-stared"> *</strong></label>
								<div id="lp-select1-wrapper" class="input-group">
									<div class="input-group-addon"><i class="fa fa-phone" style="width: 100%;font-size: 29px;padding: 5px;color: rgb(70, 78, 108);"></i>
									</div><select class="form-control" name="client_country_code" id="countryCode" required>
										<option data-countryCode="NG" value="234" select="">Nigeria (+234)</option>
									</select>
								</div>
							</div>
							<div class="col-8 col-sm-4 col-md-7 col-xl-7"><label><strong>Mobile
										Contact </strong><strong class="required-stared">*</strong></label>
								<div id="lp-telnumber-wrapper">
									<input class="form-control" type="tel" name="client_phone_number" required="" placeholder="Phone Number" autocomplete="on"></div>
							</div>
							<div class="col-12 col-sm-6 col-md-12 col-xl-6"><label><strong>Country of
										Resident</strong><strong class="required-stared">*</strong></label>
								<div id="lp-title-wrapper">
									<select id="country" name="client_country_nationality" class="form-control">
										<option value="Nigeria" selected>Nigeria</option>

									</select>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-12 col-xl-6">
								<label>
									<strong>State Of Resident</strong><strong class="required-stared">*</strong>
								</label>
								<div id="lp-title-wrapper">
									<select class="form-control" name="client_country_region" required="">
										<optgroup label="Select your State">
											<option value="Abia State">Abia State</option>
											<option value="Adamawa State">Adamawa State</option>
											<option value="Adamawa State">Adamawa State</option>
											<option value="Akwa Ibom State">Akwa Ibom State</option>
											<option value="Anambra State">Anambra State</option>
											<option value="Bauchi State">Bauchi State</option>
											<option value="Bayelsa State">Bayelsa State</option>
											<option value="Benue State">Benue State</option>
											<option value="Borno State">Borno</option>
											<option value="Cross River State">Cross River State</option>
											<option value="Delta State">Delta State</option>
											<option value="Ebonyi State">Ebonyi State</option>
											<option value="Edo State">Edo State</option>
											<option value="Ekiti State">Ekiti State</option>
											<option value="Enugu State">Enugu State</option>
											<option value="FCT Abuja">FCT Abuja</option>
											<option value="Gombe State">Gombe State</option>
											<option value="Imo State">Imo State</option>
											<option value="Jigawa State">Jigawa State</option>
											<option value="Kaduna State">Kaduna State</option>
											<option value="Kano State">Kano State</option>
											<option value="Katsina State">Katsina State</option>
											<option value="Kebbi State">Kebbi State</option>
											<option value="Kogi State">Kogi State</option>
											<option value="Kwara State">Kwara State</option>
											<option value="Lagos State">Lagos State</option>
											<option value="Nassarawa State">Nassarawa State</option>
											<option value="Niger State">Niger State</option>
											<option value="Ogun State">Ogun State</option>
											<option value="Ondo State">Ondo State</option>
											<option value="Osun State">Osun State</option>
											<option value="Oyo State">Oyo State</option>
											<option value="Plateau State">Plateau State</option>
											<option value="Rivers State">Rivers State</option>
											<option value="Sokoto State">Sokoto State</option>
											<option value="Taraba State">Taraba State</option>
											<option value="Yobe State">Yobe State</option>
											<option value="Zamfara State">Zamfara State</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-12"><label><strong>Occupation</strong><strong class="required-stared">*</strong></label>
								<div id="lp-name-wrapper">
									<input class="form-control" list="listOccupation" type="text" name="client_occupation" required="" placeholder="Occupation" id="occupation">
									<datalist id="listOccupation">
										<option value="Student"></option>
										<option value="Govt Worker"></option>
										<option value="Self Employed"></option>
									</datalist>
								</div>
							</div>
						</div>
					</section>
					<!-- End: Personal Information -->
					<!-- Start: Business Information -->
					<section class="client-signup-form-sections">
						<h1 style="border-bottom: 1px solid;color: #464e6c;">Business Information</h1>
						<div class="form-row">
							<div class="col-md-12"><input class="form-control d-none" type="text" value="vr-campus-tours" id="lp-formID"><input class="form-control d-none" type="text" value="" id="lp-pathID"></div>
							<div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
								<label><strong>Business Name </strong>
									<strong class="required-stared">*</strong>
								</label>
								<div id="lp-name-wrapper">
									<input class="form-control" type="text" name="client_business_brand" required="" placeholder="Business Brand" id="lp-name">
								</div>
							</div>

							<div class="col-12 col-sm-6 col-md-12"><label><strong> Email </strong><strong class="required-stared">*</strong></label>
								<div id="lp-mail-wrapper">
									<input class="form-control" type="email" name="client_business_email" required="" placeholder="Email Address"></div>
							</div>
							<div class="col-12 col-sm-6 col-md-12"><label><strong>Business Line
										Address</strong><strong class="required-stared"> *</strong></label>
								<div id="customfield1-wrapper">
									<input class="form-control" type="text" name="client_business_office_address" placeholder="Shop, Store or Office Address" id="customfield1">
								</div>
							</div>

						</div>
					</section>
					<!-- End: Business Information -->
					<!-- Start: Business Information -->
					<section class="client-signup-form-sections">
						<h1 style="border-bottom: 1px solid;color: #464e6c;">Service Rendering Information</h1>
						<div class="form-row">
							<div class="col-md-12">
								<label>
									<strong>Selected Subscription Plan </strong><strong class="required-stared">*</strong>
								</label>
								<input class="form-control" list="servicePlans" name="client_service_sub_plan" type="text" value="<?= isset($plan) && !empty($plan) ? ucwords($plan) : ''; ?>" required id="lp-formID">
								<datalist id="servicePlans">
									<option value="Basic"></option>
									<option value="Standard"></option>
									<option value="Premium"></option>
								</datalist>

							</div>

							<div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
								<label>
									<strong>What service would you like to offer? e.g: Category: Type.</strong><strong class="required-stared">*</strong>
								</label>
								<div id="lp-name-wrapper">
									<input class="form-control" type="text" name="client_service_category" id="service_rendered" list="serviceRendered" placeholder="Type to show services...">
									<datalist id="serviceRendered">
										<!-- Parse The service type here -->
										<?= isset($service_listing) ? $service_listing : '<option value="No service available yet."></option>'; ?>
									</datalist>
								</div>
							</div>


					</section>
					<!-- End: Business Information -->
					<div class="form-row">
						<div class="col-12 col-sm-12 col-md-12">
							<!-- Start: Blue Button Animated --><button type="submit" class="set_2_button btn color5 set_2_btn-2 icon-down"><span>Get
									Started</span></button>
							<!-- End: Blue Button Animated -->
						</div>
						<div class="col-md-12">
							<!-- Start: Push -->
							<div class="push-progress mt-3"></div>
							<!-- End: Push -->
						</div>
					</div>
				</form>
				<!-- End: TR Form -->
			</div>
		</div>
		<!-- End: JLX Contact Form with Placeholder FI -->
	</div>
	<!-- End: Google Products Accordion -->
</section>