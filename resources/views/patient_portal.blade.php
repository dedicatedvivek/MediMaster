<html>

<?php
use App\Patients;
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/login_page_css.css">

<style type="text/css">
	
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
        <li><a href="{{ url('/newapplicant') }}"   style="color: white">Checkups</a></li>
        <li><a href="{{ url('/listapplicant') }}"  style="color: white">Reports</a></li>
        <li><a href="{{ url('/listapplicant') }}"  style="color: white">Medication</a></li>
        <li><a href="{{ url('/listapplicant') }}"  style="color: white">Health Care</a></li>
        <li><a href="{{ url('/listapplicant') }}"  style="color: white">My Chemists</a></li>
        
              
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php

   	$p_ide = e($p_id);
    $p_details = App\Patients::select('p_name','p_age','p_fam_doc')->where('p_id',$p_ide)->get();
    $p_details1 = $p_details[0];
    $p_name = $p_details1['p_name'];
    $p_age = $p_details1['p_age'];
    $p_age = $p_details1['p_fam_doc'];
     echo $pname;
    ?>
<center>
<div class="w3-container">
  <h2>Welcome !</h2>
  <img src="batman_img.jpg" class="w3-circle" alt="Car" style="width:400px">
</div>
</center> <br> <br>

<center>
	<div class="w3-container">
	<div class="w3-panel w3-card">



  <label> Name : <?php echo $p_name; ?> </label>

   

	</div>	
    </div>

</center>	


</body>
</html>