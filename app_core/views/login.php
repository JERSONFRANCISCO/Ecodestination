<?php
   require_once(__CTR_PATH . "ctr_login.php");
  $ctr_login = new ctr_login();
   //<!-- Bootstrap core CSS -->
    echo "<link href='".__APP_DSG."vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>";
    //<!-- Custom fonts for this template -->

    //<!-- Custom styles for this template -->
    echo "<link href='".__CSS_PATH."login.css' rel='stylesheet'>";
?>

<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>

			</div>
			<div class="card-body">
				
				<form class="login100-form validate-form" name="frm_login" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" id="txt_user" name="txt_user" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="txt_pssw" name="txt_pssw" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit"  name="btn_login" id="btn_login"  class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>


	<?php

		if(isset($_POST['btn_login'])){
			$ctr_login->btn_login_click();
		}

	?>