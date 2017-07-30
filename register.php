<?php require_once 'inc/header.php'; ?>
<?php require_once 'classes/class.user.php'; ?>

<?php 
	if (isset($_POST['join'])) {
		extract($_POST);
		$register = new Users();
		$result = $register->register( $fullname, $email, $username, $password );
		
	}

 ?>
<div class="row justify-content-md-center">
	<div class="col-12 col-md-auto">
		<?php if (isset($result)) {
			echo $result;
		} ?>
		<h4 class="text-center mt-5">Register</h4>
		<div class="card">
		  <div class="card-block">
		    <form action="" method="post">
		    	<label for="username">Pick a username</label>
		    	<input type="text" id="username" class="form-control" autofocus autocomplete="off" tabindex="1" name="username">
		    	<label for="fullname" class="mt-3">Fullname</label>
		    	<input type="text" id="fullname" name="fullname" class="form-control" tabindex="2">
		    	<label for="email" class="mt-3">Email </label>
		    	<input type="email" id="email" class="form-control" tabindex="2" name="email">
		    	<label for="password" class="mt-3">Choose password <small>(minimum 8)</small></label>
		    	<input type="password" id="password" class="form-control" tabindex="3" name="password">
		    	
		    	<label for="terms" class="mt-3">
		    		<input type="checkbox"  id="terms" required tabindex="5"> I accept the <a href="">Terms and Conditions.</a>
		    	</label>
		    	<div class="g-recaptcha mt-3" data-sitekey="6LcAGxETAAAAAB4uxuWzzimUxunWWGIqV2iogUTJ"></div>
		    	<button type="submit" class="btn btn-success form-control mt-3" name="join" tabindex="6">Create account</button>
		    </form>
		  </div>
		</div>
		<p class="text-center form-control mt-3 card-bg">Already have account? <a href="login.php">Login.</a></p>
	</div>
</div>
<?php require_once 'inc/footer.php'; ?>