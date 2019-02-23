<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Patient Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  
</head>

<body>
  


<div class="form-container" id="form-container">
  
    <h1 class="form-header">Create Your Profile Now!!!</h1>
   
    <form class="signup-form" method="post" action="/insert_patient">
      <label for="p_name">Your Name</label>
      <input id="name" type="text" name="p_name" required/>

<br>
      <label class='p-form-label'>Age</label>
      <input id="age" type="number" name="p_age" required/>
<br>
      <label class='p-form-label'>Address</label>
      <input id="address" type="" name="p_address" autocomplete="off"/>
<br>
      <label class='p-form-label' >City</label>
      <input id="city" type="text" name="p_city" autocomplete="off"/>
<br>
      <label class='p-form-label' >Blood Group</label>
      <input id="blood_group" type="text" name="p_blood_group" autocomplete="off"/>
<br>
      <label class='p-form-label' >Family Doctor</label>
      <input id="family_doc" type="text" name="p_fam_doc" autocomplete="off"/><br>
      <label class='p-form-label' >Physical Status</label>
      <input id="physical_status" type="text" name="p_physical_status" autocomplete="off"/><br>

      <label class='p-form-label' >Mental Status</label>
      <input id="mental_status" type="text" name="p_mental_status" autocomplete="off"/><br>


      <label class='p-form-label' >Phone Number</label>
      <input id="phone" type="number" name="p_phone" autocomplete="off"/><br>

      <label class='p-form-label' >Email</label>
      <input id="email" type="email" name="p_email" autocomplete="off"/><br>



      <input type="submit" name="submit" value="SUBMIT" />
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/indexpatientform.js"></script>

</body>
</html>
