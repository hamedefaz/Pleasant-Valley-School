@extends('frontend.layouts.master')
@section('content')
@include('frontend.layouts.slider')
	<!-- Mission and Vision -->
	<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Mission and Vision</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="{{asset('public/frontend/image/mission1.jpg')}}" style="border: 1px solid #ddd;padding: 5px;background: #0F52BA;border-radius: 30px;float: left;margin-right: 20px;">
					<p style="text-align: justify;"><strong>Mission</strong> is to promote individual student educational success via a sequence of teaching, learning, assessment and support.</p>
				</div>
				<div class="col-md-6">
					<img src="{{asset('public/frontend/image/vision1.png')}}" style="border: 1px solid #ddd;padding: 5px;background: #0F52BA;border-radius: 30px;float: left;margin-right: 20px;">
					<p style="text-align: justify;"><strong>Vision</strong> for Pleasant Valley High School provides a framework for commitments and strategic planning and is guided by the following questions:

                        "What do we want students to know and be able to do?"
                        "How will we know if they've learned it?"; 
                        "How will we respond when they don't?"; 
                        "How will we respond when they do?"; 
                        "How will we provide opportunities for every student to connect to the P.V. community?"</p>
				</div>
			</div>
		</div>
	</section>
	<!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
				</div>
				<div class="col-md-9" style="padding-top: 15px;">
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>Image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>11/01/2022</td>
								<td><img src="{{asset('public/frontend/image/n1.jpg')}}"></td>
								<td>Graduation 2022</td>
								<td><a href="" class="btn btn-info">Details</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>22/02/2022</td>
								<td><img src="{{asset('public/frontend/image/n2.jpg')}}"></td>
								<td>Required Senior Review</td>
								<td><a href="" class="btn btn-info">Details</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>23/03/2022</td>
								<td><img src="{{asset('public/frontend/image/n3.jpg')}}"></td>
								<td>PVHS Cource Selection</td>
								<td><a href="" class="btn btn-info">Details</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Services -->
	<section class="our_services">
		<div class="container" style="padding-top: 15px">
			<!-- Nav tab -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#service" class="nav-link active" data-toggle="tab">History</a>
				</li>
				<li class="nav-item">
					<a href="#expertise" class="nav-link" data-toggle="tab">Services</a>
				</li>
				<li class="nav-item">
					<a href="#prouduct" class="nav-link" data-toggle="tab">Expertise</a>
				</li>
			</ul>
			<!-- Tab Content -->
			<div class="tab-content">
				<div id="service" class="container tab-pane active">
					<h3>History</h3>
					<p>50 years of excellence!</p>
				</div>
				<div id="expertise" class="container tab-pane fade">
					<h3>Services</h3>
					<p>Provide state of the art education and on demand facilites to the students.</p>
				</div>
				<div id="prouduct" class="container tab-pane fade">
					<h3>Expertise</h3>
					<p>Bound to produce better human being who will contribute to the world in future.</p>
				</div>
			</div>
		</div>
	</section>
@endsection
	

	