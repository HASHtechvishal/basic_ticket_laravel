@extends('front.layouts.layout')
@section('content')
<style>
   body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   }
   .container {
   width: 90%;
   margin: 20px auto;
   }
   table {
   width: 100%;
   border-collapse: collapse;
   }
   th, td {
   padding: 8px;
   text-align: left;
   border-bottom: 1px solid #ddd;
   }
   th {
   background-color: #f2f2f2;
   }
   @media screen and (max-width: 600px) {
   table {
   border: 0;
   }
   table thead {
   display: none;
   }
   table tr {
   border-bottom: 3px solid #ddd;
   display: block;
   margin-bottom: 10px;
   }
   table td {
   display: block;
   text-align: right;
   }
   table td:last-child {
   border-bottom: 0;
   }
   }
</style>
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
                     <?php
                        if(isset(Auth::guard('user')->user()->id)){ ?>
                     <form action="{{url('search_flight/'.Auth::guard('user')->user()->id)}}" method="post">@csrf
                        <?php
                           }else{ ?>
                     <form action="{{url('search_flight')}}" method="post">
                        @csrf
                        <?php
                           }
                           ?>
                        <div class="form-group">
                           <div class="form-checkbox">
                              <label for="one-way">
                              <input type="radio" id="one-way" name="flight-type" value="one way" onclick="enableInput()">
                              <span></span>One way
                              </label>
                              <label for="multi-city">
                              <input type="radio" id="multi-city" name="flight-type" value="two way" onclick="enableInput()">
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
                                 <input class="form-control" type="text" name="from" placeholder="City or airport" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <span class="form-label">Flyning to</span>
                                 <input class="form-control" type="text" name="to" placeholder="City or airport" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <span class="form-label">Departing</span>
                                 <input class="form-control" type="date" name="Departing" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <span class="form-label">Returning</span>
                                 <input class="form-control" type="date" name="Returning" id="textInput" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <span class="form-label">Adults (18+)</span>
                                 <select class="form-control" name="adult">
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
                                 <select class="form-control" name="child">
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
                                 <select class="form-control" name="class">
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
            <div class="container">
               <h2>Flight Details</h2>
               <table>
                  <thead>
                     <tr>
                        <th>Flight Number</th>
                        <th>Airline</th>
                        <th>Departure</th>
                        <th>Departure Time</th>
                        <th>Arrival</th>
                        <th>Arrival Time</th>
                        <th>Price ($)</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>ABC123</td>
                        <td>go air</td>
                        <td>London</td>
                        <td>2024-03-01</td>
                        <td>delhi</td>
                        <td>2024-03-01</td>
                        <td>222</td>
                        <td><button class="btn btn-outline-success">BOOK</button></td>
                     </tr>
                     <!-- Add more rows for additional flights -->
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</body>
@endsection