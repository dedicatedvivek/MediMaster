

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>

  <link rel="stylesheet" type="text/css" href="css/login_page_css.css">
</head>
<body>

<div id="login">
  <center><h1><font color='grey'>LOGIN</font></h1></center>
  <form id="login_form" method="post" action="/login_check">
    {{csrf_field()}}
    <div class="field_container">
      
      <select name="login_type">
        <option value="doctor">DOCTOR</option>
        <option value="patient">PATIENT</option>
      </select><br><br>

    <div class="field_container">
      <input type="text" name="email" placeholder="Email Address">
    </div>
    
    <div class="field_container">
      <input type="Password" name='passwd' placeholder="Password">
      <button id="sign_in_button">
        <span class="button_text">Sign In</span>
      </button>
    </div>
    

      </div>
</form>
</div>



</body>
</html>

