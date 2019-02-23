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

      {{csrf_field()}}
      <label for="p_name">Your Name</label>
      <input id="name" type="text" name="p_name" required/>

<br>
      <label class='p-form-label'>Age</label>
      <input id="age" type="number" name="p_age" required/>
<br>
      <label class='p-form-label'>Address</label>
      <input id="address" type="" name="p_address" required/>
<br>
      <label class='p-form-label' >City</label>
      <input id="city" type="text" name="p_city" required/>
<br>
      <label class='p-form-label' >Blood Group</label>
      <select name="p_blood_group">
        <option value="A +ve">A +ve</option>
        <option value="A -ve">A -ve</option>
        <option value="B +ve">B +ve</option>
        <option value="B -ve">B -ve</option>
        <option value="O +ve">O +ve</option>
        <option value="O -ve">O -ve</option>
        <option value="AB +ve">AB +ve</option>
        <option value="AB -ve">AB -ve</option>
      </select>
<br>
      <label class='p-form-label' >Family Doctor</label>
      <input id="family_doc" type="text" name="p_fam_doc" required/><br>
      <label class='p-form-label' >Physical Status</label>
      <select name="p_physical_status">
        <option value="physically_challenged">Physically Challenged</option>
        <option value="physically_normal">Normal</option>
</select></br>

      <label class='p-form-label' >Mental Status</label>
       <select name="p_mental_status">
        <option value="mentally_challenged">Mentally Challenged</option>
        <option value="mentally_normal">Normal</option>
</select></br>

      <label class='p-form-label' >Phone Number</label>
      <input id="phone" type="text" name="p_phone" required/><br>

      <label class='p-form-label' >Email</label>
      <input id="email" type="email" name="p_email" required/><br>

      <label class="p-class-label" for="p_password">Password</label>
      <input  type="password" name="p_password" required>
      <br>

      <label class="p-class-label" for="p_photo">Upload Photo</label>
      <input  type="file" name="p_photo" capture="camera" required>
      <br>



      <input type="submit" name="submit" value="SUBMIT" />
    </form>
  </div>
</div>
  

</body>
</html>
