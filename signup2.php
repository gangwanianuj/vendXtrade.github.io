<?php
require("header.php");
$sitekey="6Le76gElAAAAANiAwgMJErs87RZRxN-pi8F-4o8G";
$secretkey="6Le76gElAAAAAIb2akuQ2LgmtYHnGWgsbFX-z4Wa";
if(isset($_GET['a']))
{
  ?>
  <div class="alert alert-danger" role="alert" style="text-align:center">
  Email already exists!
</div>
<?php
}
if(isset($_GET['b']))
{
?>
<div class="alert alert-danger" role="alert" style="text-align:center">
 Invalid PAN number!
</div>
<?php
}
if(isset($_GET['c']))
{
  ?>
  <div class="alert alert-danger" role="alert" style="text-align:center">
Invalid Phone number!
</div>
<?php
}
if(isset($_GET['e']))
{
?>
<div class="alert alert-danger" role="alert" style="text-align:center">
Password doesn't match!
</div>
<?php
}
if(isset($_GET['d']))
{
?>
<div class="alert alert-danger" role="alert" style="text-align:center">
Please re-fill captcha!
</div>
<?php
}
?>



  <div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      <form action="signup.php" method="post">
        <span>Create Account</span>
        <div class="form-group">
        
          <input type="text" name="name" class="form-control" placeholder="Full name" required>
        </div>
        <div class="form-group">
          <input type="tel" minlength="10" maxlength="10" name="phone_number" id="phone" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
          <!-- <input type="button" class="btn btn-primary" id="btnSubmit" value="" onclick= /> -->
        </div>
        <div class="form-group mb-3">
          <!-- <input type="text" name="pan" class="form-control" placeholder="PAN CARD"> -->
          <input name="txtPANCard" type="text" id="txtPANCard" class="PAN form-control" placeholder="PAN CARD" required/>
          <span id="lblPANCard" class="error">
          
</span>
            
          
          <style type="text/css">
    .PAN
    {
        text-transform: uppercase;
    }
    .error
    {
        color: Red;
        /* visibility: hidden; */
    }
</style>
        </div>
        
        
       
<!-- </div> -->
       <div class="">
       <div><input type="password" class="form-control" placeholder="Create password" name="password" id="myInput"></div>
       
       <div><input type="password" class="form-control" placeholder="Confirm password" name="cpassword" id="myInput1"></div>
        <input type="checkbox" class="mt-3" onclick="myFunction()"> <label>Show Password </label>
       </div>
        <div class="g-recaptcha" data-sitekey="6Le76gElAAAAANiAwgMJErs87RZRxN-pi8F-4o8G"></div>
      <br/>
     
      <br>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="form-checkbox" required>
          <label class="custom-control-label" for="form-checkbox">I agree to the <a href="t&c.php">Terms &
              Conditions</a></label>
        </div>

        <button type="submit" class="btn btn-primary" >Create Account</button>
         <!-- <form action="?" method="POST"> -->
      <!-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> -->
      <br/>
      
    <!-- </form> -->




      </form>
      <h2>Already have an account? <a href="signin.php">Sign in here</a></h2>
      <?
         require("login.php");
      ?>
    </div>
  </div>

  
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/amcharts-core.min.js"></script>
  <script src="assets/js/amcharts.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

<script type="text/javascript">
    // function ValidatePAN() {
    //     var txtPANCard = document.getElementById("txtPANCard");
    //     var lblPANCard = document.getElementById("lblPANCard")
    //     var regex = /([A-Z]){5}([0-9]){4}([A-Z]){1}$/;
    //     if (regex.test(txtPANCard.value.toUpperCase())) {
    //       alert("pan number is valid");
    //         lblPANCard.style.visibility = "hidden";
            
    //         return true;
    //     } else 
    //     {
    //           alert("pan number is not valid");
    //         lblPANCard.style.visibility = "visible";
    //         return false;
    //     }
    // }
    

    // function ValidatePHONE() {
    //     var txtPhone = document.getElementById("phone_number");
    //     // var lblPhone = document.getElementById("lblPhone")
    //     var regex = /([6-9]){1}([0-9]){9}$/;
    //     if (regex.test(txtPhone.value.())) {
    //        lblPANCard.style.visibility = "hidden";
    //         return true;
    //     } else 
    //     {
    //         alert("phone number is not valid")
    //         return false;
    //     }
    // }
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  myFunction1();
}

function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>


</html>
