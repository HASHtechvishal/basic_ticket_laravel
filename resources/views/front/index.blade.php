@extends('front.layouts.layout')
@section('content')
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>Book your flight today</h1>
							<p>Welcome to our flight booking website! We're here to make your travel dreams take flight.
							</p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form>
								<div class="form-group">
									<div class="form-checkbox">
										<label for="one-way">
											<input type="radio" id="one-way" name="flight-type">
											<span></span>One way
										</label>
										<label for="multi-city">
											<input type="radio" id="multi-city" name="flight-type">
											<span></span>Two way
										</label>
										<label>
											<span></span><a href='{{url('user-admin')}}'>User/Admin</a>
										</label>

										<label>
											<span></span>Welcome -> {{Auth::guard('user')->user()->username ?? ''}} &nbsp;

											<?php
											if(isset(Auth::guard('user')->user()->image)){ ?>
											    <img src="{{url('/admin/user_image/'.Auth::guard('user')->user()->image)}}" alt="" style="width: 60px; height: 60px;"></span>
												&nbsp; &nbsp; &nbsp;
											    <a href="{{ url('user_logout')}}"><i class="fa fa-sign-out" style="font-size:24px"></i></a>
											<?php
											}else{ ?>
												<img src="" alt="">
											<?php
											}
											?>
											
										</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flying from</span>
											<input class="form-control" type="text" placeholder="City or airport">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flyning to</span>
											<input class="form-control" type="text" placeholder="City or airport">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Departing</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Returning</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Adults (18+)</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Children (0-17)</span>
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Travel class</span>
											<select class="form-control">
												<option>Economy class</option>
												<option>Business class</option>
												<option>First class</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Show flights</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection