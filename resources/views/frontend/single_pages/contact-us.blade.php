@extends('frontend.layouts.master')
@section('content')
	<!-- Banner Section -->
	<section class="banner_part">
		<img src="{{asset('public/frontend/image/contactbanner.jpg')}}" style="width: 100%">
	</section>

	<!-- contact us Section -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 39%;">Send us a Message</h3>
					<form>
						<div class="form-row" style="background: #ddd;">
							<div class="form-group col-md-6">
								<label for="name">Name <span style="color: red;font-weight: bold;">*</span></label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Write Your Name">
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email <span style="color: red;font-weight: bold;">*</span></label>
								<input type="email" name="email" id="email" class="form-control" placeholder="Write Your Email">
							</div>
							<div class="form-group col-md-6">
								<label for="mobile_no">Mobile No <span style="color: red;font-weight: bold;">*</span></label>
								<input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Write Your Mobile No">
							</div>
							<div class="form-group col-md-6">
								<label for="address">Address <span style="color: red;font-weight: bold;">*</span></label>
								<input type="text" name="address" id="address" class="form-control" placeholder="Write Your Address">
							</div>
							<div class="form-group col-md-12">
								<label for="message">Message <span style="color: red;font-weight: bold;">*</span></label>
								<textarea name="message" class="form-control" id="message" placeholder="Write Your Message" rows="5"></textarea>
							</div>
							<div class="form-group col-md-6">
								<button type="submit" class="btn btn-primary">Send Message</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-5">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 49%;">School Location</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.0601222956343!2d-121.8191312843076!3d39.76075850319499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87e233710b0deb41%3A0xa00241c175031238!2sPleasant%20Valley%20High%20School!5e0!3m2!1sen!2sbd!4v1659877806203!5m2!1sen!2sbd" width=100% height="410" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
@endsection