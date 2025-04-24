@extends('layouts.frontend')
@section('title', 'State-To-State-Auto-Transport - Car Shipping Quote!')
@section('content')
<!-- Start of breadcrumb section
	============================================= -->
	<section id="bi-breadcrumbs" class="bi-bredcrumbs-section position-relative" data-background="public/assets/img/bg/bread-bg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="bi-breadcrumbs-content headline ul-li text-center">
				<h2>Car Shipping Quote!</h2>
				<ul>
					<li><a href="#">Home</a></li>
					<li>Car Shipping Quote!</li>
				</ul>
			</div>
		</div>
	</section>	
<!-- Start of breadcrumb section
	============================================= -->

<!-- Start of contact Form section
	============================================= -->
    <section id="car-shipping-quote" class="bi-job-apply-section inner-page-padding">
        <div class="container">
            <div class="bi-section-title-1 text-center headline pera-content">
                <div class="bi-subtitle text-uppercase wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                    Instant Car Shipping Quote!
                </div>
                <h2 class="headline-title">Get Your Instant Quote</h2>
            </div>
    
            <div class="bi-team-details-contact-info headline pera-content">
                <div class="bi-team-details-contact-title">
                    <div class="bi-team-details-contact-form">
                        <form action="calculate_quote.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="full_name" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="tel" name="phone" placeholder="+1 Phone Number" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="email" name="email" placeholder="Your Email Address" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="pickup_location" placeholder="Pickup Location (Ex: 90005 or Los Angeles)" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="delivery_location" placeholder="Delivery Location (Ex: 90005 or Los Angeles)" required>
                                </div>
                                <!-- Car Information -->
                                <div class="col-md-4">
                                    <select name="car_year" required>
                                        <option value="">Select Year</option>
                                        <!-- Add more years as needed -->
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="car_make" required>
                                        <option value="">Select Make</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Ford">Ford</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="car_model" required>
                                        <option value="">Select Model</option>
                                        <option value="Civic">Civic</option>
                                        <option value="Camry">Camry</option>
                                        <option value="F-150">F-150</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="trailer_type" required>
                                        <option value="">Select Trailer Type</option>
                                        <option value="Open">Open</option>
                                        <option value="Enclosed">Enclosed</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="car_condition" required>
                                        <option value="">Condition</option>
                                        <option value="Running">Running</option>
                                        <option value="Non-running">Non-running</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Vehicle Image:</label>
                                    <input type="file" name="vehicle_image" accept="image/*">
                                </div>
                                <div class="col-md-3">
                                    <label><input type="checkbox" name="is_modified"> Modified?</label>
                                </div>
                                <div class="col-md-3">
                                    <label><input type="checkbox" name="at_auction"> Available at Auction?</label>
                                </div>
    
                                <div class="col-md-12">
                                    <div class="ai-submit-btn d-flex">
                                        <button type="submit">Calculate Price</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>		
<!-- End of  contact Form section
	============================================= -->	
@endsection