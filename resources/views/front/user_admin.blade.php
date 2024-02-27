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
							<p>Welcome to our flight booking website! We're here to make your travel dreams take flight.</p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="{{url('user-admin')}}" method="post" enctype="multipart/form-data">@csrf
								<div class="form-group">
									<div class="form-checkbox">
										<label for="one-way">
											<input type="radio" id="one-way" name="user-type" value="admin">
											<span></span>Admin
										</label>
										<label for="multi-city">
											<input type="radio" id="multi-city" name="user-type" value="user">
											<span></span>User
										</label>
                                        <label>
											<span></span><a href='{{url('log-in')}}'>Log-in</a>
										</label>
                                        <label>
											<span></span><a href='{{url('/')}}'>HOME</a>
										</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Username</span>
											<input class="form-control" name="name" type="text" placeholder="Enter your name" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input class="form-control" type="text" name="email" placeholder="Enter your email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Password</span>
											<input class="form-control" name="password" type="password" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Confirm Password</span>
											<input class="form-control" name="Cpass" type="password" required>
										</div>
									</div>
								</div>

                                

                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">select country</span>
											<select class="form-control" name="country" id="country">
												<option>+91</option>
												<option>+92</option>
												<option>+1</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">mobile number</span>
												<input class="form-control" name="number" type="text">
										</div>
									</div>
									
								</div>





                                
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">photo</span>
											<div class="form-control">
												<input type="file" name="image" required/>
                                            </div>
										</div>
									</div>
									
									
								</div>
								<div class="form-btn">
									<button class="submit-btn">register</button>
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