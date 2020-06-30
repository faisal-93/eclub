<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include("./layout/head.html");?>

    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="css/util.css">
    	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <?php include("./layout/navbar.html");?>

    <section>
      <div class="limiter">
        <div class="container-login100">
    			<div class="wrap-login100">
    				<div class="login100-form-title" style="background-image: url(img/bg-01.jpg);">
    					<span class="login100-form-title-1">
    						Club Membership Registration
    					</span>
    				</div>
            
    				<form class="login100-form validate-form" id="form_register">
    					<div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
    						<span class="label-input100">Full Name*</span>
    						<input class="input100" type="text" name="fullname" placeholder="Enter full name">
    						<span class="focus-input100"></span>
    					</div>

    					<div class="wrap-input100 validate-input m-b-26">
    						<span class="label-input100">Father's/Husband's Name</span>
    						<input class="input100" type="text" name="fatherName" placeholder="Enter father's name or husband's name">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26">
    						<span class="label-input100">Mother's Name</span>
    						<input class="input100" type="text" name="motherName" placeholder="Enter mother's name">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26" data-validate="Bith date is required">
    						<span class="label-input100">Date of Birth*</span>
    						<input class="input100" type="date" name="dateOfBirth" placeholder="Ex: 29/05/1994">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26" data-validate="NID is required">
    						<span class="label-input100">National ID No.*</span>
    						<input class="input100" type="text" name="nid" placeholder="Ex: 111111111111">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26">
    						<span class="label-input100">Passport No.</span>
    						<input class="input100" type="text" name="passport" placeholder="Ex: BL082115">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26">
    						<span class="label-input100">Date of Marriage</span>
    						<input class="input100" type="date" name="marriageDate" placeholder="Ex: 07/12/2017">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26">
    						<span class="label-input100">Blood Group</span>
    						<input class="input100" type="text" name="bloodGroup" placeholder="Ex: A+">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26" data-validate="Mobile number is required">
    						<span class="label-input100">Mobile*</span>
    						<input class="input100" type="number" name="mobile" placeholder="Ex: 01xxxxxxxxx">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26" data-validate="Present address is required">
    						<span class="label-input100">Present Address*</span>
    						<input class="input100" type="text" name="currentAddress" placeholder="Enter current address">
    						<span class="focus-input100"></span>
    					</div>

              <div class="wrap-input100 validate-input m-b-26" data-validate="Permanent address is required">
    						<span class="label-input100">Permanent Address*</span>
    						<input class="input100" type="text" name="permanentAddress" placeholder="Enter permanent address">
    						<span class="focus-input100"></span>
    					</div>

    					<!-- <div class="flex-sb-m w-full p-b-30">
    						<div class="contact100-form-checkbox">
    							<label for="ckb1">
                    <input id="ckb1" type="checkbox" name="remember-me">
    								Remember me
    							</label>
    						</div> -->

    					<div class="container-login100-form-btn">
    						<button class="btn btn-xl form-control">
    							Register
    						</button>
    					</div>
    				</form>
    			</div>
    		</div>
      </div>
    </div>
    </section>

    <!-- Footer -->
    <?php include("./layout/footer.html"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script src="js/regValidation.js"></script>

  </body>

</html>
