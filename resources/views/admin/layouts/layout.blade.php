<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{url('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="{{url('admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{url('admin/assets/css/style.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--sweet alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
  .add {
  display: flex;
  justify-content: space-between; /* or flex-end */
    }

.button {
  background-color: #007bff; /* Blue background */
  color: #fff; /* White text */
  padding: 10px 20px; /* Padding */
  float: right;
  border: none; /* No border */
  border-radius: 5px; /* Rounded corners */
  cursor: pointer; /* Cursor on hover */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow */
  transition: background-color 0.3s ease; /* Smooth color transition */
}

.button:hover {
  background-color: #0056b3; /* Darker blue background on hover */
}


  </style>
</head>
<body>
    @include('admin.layouts.header')
     <!-- MENU SECTION END-->
    @yield('content')
     <!-- CONTENT-WRAPPER SECTION END-->
    @include('admin.layouts.footer')
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{url('admin/assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{url('admin/assets/js/bootstrap.js')}}"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="{{url('admin/assets/js/custom.js')}}"></script>
   
    {{--admin.js--}}
    <script src="{{url('admin/admin.js')}}"></script>


  
</body>
</html>
