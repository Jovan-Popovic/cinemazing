<?php echo validation_errors() ?>
<form action="<?php echo site_url('/users/login') ?>" method="POST" class="text-center mx-auto border border-light col-12 col-sm-12 col-md-6 col-lg-4 p-5">
	<p class="h4 mb-4">Login</p>
	<input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
	<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
	<!-- <div class="custom-control custom-checkbox">
		<input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
		<label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
	</div> -->
	<button class="btn btn-danger my-4 btn-block" type="submit">
		<i class="fas fa-user"></i> Login
	</button>
</form>
