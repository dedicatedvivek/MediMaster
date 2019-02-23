<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Doctor Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  
</head>

<body>
  


<div class="form-container" id="form-container">
  
    <h1 class="form-header">Create Your Profile Now!!</h1>
   
    <form class="signup-form" method="post" action="/insert_doctor">
     {{ csrf_field() }}

      <label class="d-class-label" for="d_name">Your Name</label>
      <input  type="text" name="d_name" required>
      <br>

      <label class="d-class-label" for="d_address"> Address</label>
      <input  type="text" name="d_address" required>
      <br>

      <label class="d-class-label" for="d_city">City</label>
      <input  type="text" name="d_city" required>
      <br>

      <label class="d-class-label" for="d_specialisation">Specialisation</label>
      <select name="d_specialisation" >
         <option value="immunology">Immunologist</option>
         <option value="radiology">Radiologist</option>
         <option value="dermatology">Dermatologist</option>
         <option value="oncology">Oncologist</option>
         <option value="orthopaedic">Orthopaedic</option>
         <option value="immunology">Cardiologist</option>
         <option value="pediatric">Pediatric</option>
         <option value="general_physician">General Physician</option>
        </select>
      <br>

      
      <label class="d-class-label" for="d_phone">Phone Number</label>
      <input  type="text" name="d_phone" required>
      <br>

      <label class="d-class-label" for="d_age">Age</label>
      <input  type="number" name="d_age" required>
      <br>

      <label class="d-class-label" for="d_email">Email</label>
      <input  type="email" name="d_email" required>
      <br>
      <label class="d-class-label" for="d_password">Password</label>
      <input  type="password" name="d_password" required>
      <br>
      <label class="d-class-label" for="d_file">Profile Photo:</label>
      <input  type="file" name="d_photo" capture = "camera" required>
      <br>

      <input type="submit" name="submit" value="submit">
      
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/indexpatientform.js"></script>

</body>
</html>
