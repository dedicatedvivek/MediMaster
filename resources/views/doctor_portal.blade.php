<?
use App\Doctor;
use App\Patients;
?>


<!DOCTYPE html>
<html>
<head>

  <title>Doctor's Portal</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>



  <style type="text/css">
    .one {
  width: auto;
}
.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
      color: white;
}



.dropdown:hover .dropdown-content {
    display: block;
    color: white;
}

#pic{
  border-radius: 50%;
  
}



  </style>

</head>
<body>







<nav class="navbar navbar-default" style="background-color: rgb(35,162,218);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/" style="color: white">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="active" href="{{ url('/new_patient_record') }}"   style="color: white">Add Patient Record</a></li>
        <li><a href="{{ url('/list_patient_records') }}"  style="color: white">Existing Patients' Records</a></li>
        
        
       
        <li><a  href="{{ url('/new_consultancy') }}"  style="color: white">Add Counsultancy Details</a></li>
        <li><a  href="{{ url('/index') }}"  style="color: white">Consultancy history</a></li>
        <li><a  href="{{ url('/overview') }}"  style="color: white">Overview</a></li>
      </ul>
      
    </div>
  </div>
</nav>
 <?php
          $doc_id = e($d_id) ;
          $photo_arr = App\Doctor::select('d_photo')->
          where('d_id',$doc_id)->
          get();

          $photo_elem = $photo_arr[0];
          $photo_path = $photo_elem['d_photo'];

          echo "<script> alert($photo_path);</script>";


        ?>
<div class="portal-container">
  <div id="profile_pic">
    <div id="pic">
     

        <center>
          <img src="<?php echo $photo_path; ?>">
        </center>
    </div>
  </div>
</div>
<center>
  
</center>