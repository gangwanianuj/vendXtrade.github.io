<?php
require("header.php");
if(isset($_GET['f']))
{
?>
<div class="alert alert-danger" role="alert" style="text-align:center">
  Incorrect password!
</div>
<?php
}
if(isset($_GET['i']))
{
?>
<div class="alert alert-success" role="alert" style="text-align:center">
  You have been registered successfully!!
  To continue,Please Login!!
</div>
<?php
}
?>
  <div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      <form action="login.php" method="post">
        <span>Login to Account</span>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="">
       <input type="password" class="form-control" placeholder="Create password" name="password" id="myInput">
        <input type="checkbox" class="mt-3" onclick="myFunction()"> <label>Show Password </label>
       </div>
        
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="form-checkbox" required>
          <label class="custom-control-label" for="form-checkbox">I agree to the <a href="t&c.php">Terms &
              Conditions</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <h2>Already have an account? <a href="signin-light.html">Sign in here</a></h2>
    </div>
  </div>
<script type="text/javascript">
   function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/amcharts-core.min.js"></script>
  <script src="assets/js/amcharts.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>


<!-- Mirrored from crypo.netlify.app/signup-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2022 06:21:46 GMT -->
</html>
