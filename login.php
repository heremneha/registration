<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
    $("#frmReg").validate();
});
</script>
</head>
 <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
<link rel="stylesheet" href="style.css" />
<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
 
    <div class="col-md-6 col-sm-6 col-xs-6">
        <form id ="frmReg" name="frmReg" action="auth.php" method="post">
        <div class="form-group ">
        <label class="control-label requiredField" for="user_email">
        Email
        <span class="asteriskField">
            *
        </span>
        </label>
        <div class="input-group">
        <div class="input-group-addon">
            <i class="fa fa-envelope-o">
            </i>
        </div>
        <input class="form-control" id="user_email" name="user_email" placeholder="Email" type="text" required/>
        <div class="input-group-addon">
            <i class="fa fa-envelope">
            </i>
        </div>
        </div>
        <span class="help-block" id="hint_user_email">
        please enter your Email
        </span>
        </div>
        <div class="form-group ">
        <label class="control-label requiredField" for="user_password">
        Password
        <span class="asteriskField">
            *
        </span>
        </label>
        <div class="input-group">
        <div class="input-group-addon">
            <i class="fa fa-compass">
            </i>
        </div>
        <input class="form-control" id="user_password" name="user_password" placeholder="password" type="text" required/>
        </div>
        <span class="help-block" id="hint_user_password">
        Please enter your password
        </span>
        </div>
        <div class="form-group">
        <div>
        <button class="btn btn-primary " name="submit" type="submit">
            Submit
        </button>
        </div>
        </div>
        </form>
    </div>
  </div>
 </div>
</div>
</body>
</html>