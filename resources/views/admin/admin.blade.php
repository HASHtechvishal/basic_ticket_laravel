@extends('admin.layouts.layout')
@section('content')






<div class="col-md-12 col-sm-8 col-xs-12">
   <div class="panel panel-success">
      <div class="panel-heading add">
        <b>Flight Schedule Table</b>
        <a class="button" type="button"> Add Flight </a>
      </div> 
      <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
               <thead>
                  <tr>
                     <th>Flight Number</th>
                     <th>Airline</th>
                     <th>Departure City</th>
                     <th>Departure Time</th>
                     <th>Arrival City</th>
                     <th>Arrival Time</th>
                     <th>Price</th>
                     <th>Status</th>
                     <th>Action</th>

                  </tr>
               </thead>
               <tbody>
                @foreach($admin_dash as $details)
                  <tr>
                     <td>{{$details['FlightNumber']}}</td>
                     <td>{{$details['Airline']}}</td>
                     <td>{{$details['DepartureCity']}}</td>
                     <td>{{$details['DepartureTime']}}</td>
                     <td>{{$details['ArrivalCity']}}</td>
                     <td>{{$details['ArrivalTime']}}</td>
                     <td>{{$details['Price']}}</td>
                     <td>{{$details['status']}}</td>
                     <td></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>



<div class="col-md-12 col-sm-8 col-xs-12">
    <div class="panel panel-success">
       <div class="panel-heading add">
         <b>Final Booking Table (Number of Flights - {{$flight_count}})</b>
       </div> 
       <div class="panel-body">
          <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover">
                <thead>
                   <tr>
                      <th>User ID</th>
                      <th>User Name</th>
                      <th>User Image</th>
                      <th>Adult</th>
                      <th>Child</th>
                      <th>Class</th>
                      <th>Departure City</th>
                      <th>Departure Time</th>
                      <th>Arrival City</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Action</th>
 
                   </tr>
                </thead>
                <tbody>
                    @foreach ($flightBookings as $booking)
                   <tr>
                      <td>{{$booking['user_id']}}</td>
                      <td>{{$booking['user']['username']}}</td>
                      <td><img src="{{asset('admin/user_image/'.$booking['user']['image'])}}" alt="" width="70" height="50"></td>
                      <td>{{$booking['adult']}}</td>
                      <td>{{$booking['child']}}</td>
                      <td>{{$booking['class']}}</td>
                      <td>{{$booking['from']}}</td>
                      <td>{{$booking['departing']}}</td>
                      <td>{{$booking['to']}}</td>
                      <td>{{$booking['price']}}</td>
                      <td>{{$booking['status']}}</td>
                      <td></td>
                   </tr>
                   @endforeach
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>



</div>

</div>
</div>
@endsection

{{--
    Problem Statement #2. Covid Vaccination Booking
Create a web application for covid vaccination booking. A console based application would work. Submissions with a very basic UI will be given extra marks.
Type of Users
c. User
d. Admin
User Use Cases
● Login
● Sign up
● Searching for Vaccination center and working hours
● Apply for a vaccination slot (only 10 candidates allowed per day) ● Logout
Admin Use Cases
● Login (Seperate login for Admin)
● Add Vaccination Centres
● Get dosage details (group by centers)
--}}