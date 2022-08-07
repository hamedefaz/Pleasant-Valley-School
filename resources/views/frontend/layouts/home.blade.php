<!DOCTYPE html>
<html>
<head>
	<title>Pleasant Valley School</title>
	<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/customize.css')}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Header Section -->
	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a href="" class="navbar-brand"><img src="{{asset('public/frontend/image/logo1.png')}}" style="height: 80px;"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
					<div class="navbar-nav popular">
						<a href="index.html" class="nav-item nav-link active">Home</a>
						<div class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
							<div class="dropdown-menu" style="background: #BADDFB;">
								<a href="aboutus.html" class="dropdown-item">About Us</a>
								<a href="" class="dropdown-item">Mission</a>
								<a href="" class="dropdown-item">Vision</a>
							</div>
						</div>
						<a href="" class="nav-item nav-link">News and Event</a>
						<a href="contact.html" class="nav-item nav-link">Contact Us</a>
						<a href="" class="nav-item nav-link">Login</a>
					</div>
					<div class="navbar-nav">
						<form class="form-inline">
							<div class="input-group">
								<input type="text" name="search" placeholder="Search">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</section>
	<!-- Slider Section -->
	<section class="slider_part">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner" role="listbox">
		      <!-- Slide One - Set the background image for this slide in the line below -->
		      <div class="carousel-item active" style="background-image: url('public/frontend/image/slide5.jpg')">
		        <div class="carousel-caption d-none d-md-block">
		          <h3 class="display-4"><strong>PLEASANT VALLEY SCHOOL</strong></h3>
		          <p class="lead"><strong>The leading school of Chico, California</strong></p>
		        </div>
		      </div>
		      <!-- Slide Two - Set the background image for this slide in the line below -->
		      <div class="carousel-item" style="background-image: url('public/frontend/image/slider6.jpg')">
		        <div class="carousel-caption d-none d-md-block">
                <h3 class="display-4"><strong>PERSUADING EXCELLENCE</strong></h3>s
                <p class="lead"><strong>Exceeds expectations when it comes to opportunities</strong></p>
		        </div>
		      </div>
		      <!-- Slide Three - Set the background image for this slide in the line below -->
		      <div class="carousel-item" style="background-image: url('public/frontend/image/slider7.jpg')">
		        <div class="carousel-caption d-none d-md-block">
                <h3 class="display-4"><strong>HOME OF THE VIKINGS</strong></h3>s
                <p class="lead"><strong>Where today decides tomorrow!</strong></p>
		        </div>
		      </div>
		    </div>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
	        </a>
		</div>
	</section>
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

	<!-- Footer Part -->
	<section class="footer_part">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h4 style="color: white">Reach Us</h4>
					<p style="color: white">Address: 1475 East Avenue, Chico, CA 95926 <br> Phone: (530) 891-3050. <br> Fax: (530) 891-2872</p>
				</div>
				<div class="col-md-4">
					<h4 style="color: white">Follow Us</h4>
					<div class="social">
						<ul>
							<li><a href="http://pvhs.chicousd.org/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="http://pvhs.chicousd.org/"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="http://pvhs.chicousd.org/" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
							<li><a href="http://pvhs.chicousd.org/"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="color: white;padding: 50px 0px 10px 0px;">
						Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> Chico Unified School District and its licensors.
					</p>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="gotoup">
					<img src="{{asset('public/frontend/image/scrollup.png')}}" style="width: 70px; height: 70px;">
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()>300){
					$('.gotoup').fadeIn();
				}else{
					$('.gotoup').fadeOut();
				}
			});
			$('.gotoup').click(function(){
				$('html,body').animate({scrollTop:0},1000);
			});
		});
	</script>
	<script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>