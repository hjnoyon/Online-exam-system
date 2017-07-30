<?php require_once 'inc/header.php'; ?>
<div class="row justify-content-md-center">
	<div class="col-12 col-md-auto">
		<h4 class="text-center mt-5">Login</h4>
		<div class="card">
		  <div class="card-block">
		    <form action="" method="post">
		    	<p class="text-danger "><strong>
		    	</strong></p>
		    	<label for="username">Username</label>
		    	<input type="text" id="username" class="form-control" autofocus autocomplete="off" tabindex="1" name="username" required>
		    	<label for="password" class="mt-3 forgot-pass-label">Password <a href="forgot-password" class="label-link">Forgot password?</a></label>
		    	<input type="password" id="password" class="form-control" tabindex="2" name="password" required>
		    	<button type="submit" class="btn btn-success form-control mt-3" name="login">Sign in</button>
		    </form>
		  </div>
		</div>
		<p class="text-center form-control mt-3 card-bg">Don't have account? <a href="register.php">Create an account.</a></p>
	</div>
</div>

<?php require_once 'inc/footer.php'; ?>