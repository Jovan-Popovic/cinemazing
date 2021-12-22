<?php echo validation_errors() ?>
<form action="<?php echo site_url('/users/sign-up') ?>" method="POST" class="text-center mx-auto border border-light col-12 col-sm-12 col-md-6 col-lg-4 p-5">
	<p class="h4 mb-4">Sign Up</p>
	<div class="form-row mb-4">
		<div class="col">
			<input type="text" name="first_name" class="form-control" placeholder="First Name">
		</div>
		<div class="col">
			<input type="text" name="last_name" class="form-control" placeholder="Last Name">
		</div>
	</div>
	<input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
	<input type="date" name="birth_date" class="form-control mb-4" placeholder="Birth Date">
	<input type="text" name="phone_number" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
	<small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
		Please enter it in your valid format
	</small>
	<select name="city" class="form-control mb-4">
		<?php foreach (['London', 'New York', 'Paris', 'Singapore', 'Rome', 'Bangkok', 'Dubai'] as $city) : ?>
			<option value="<?php echo $city ?>"><?php echo $city ?></option>
		<?php endforeach; ?>
	</select>
	<input type="text" name="username" class="form-control mb-4" placeholder="Username">
	<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
	<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
		It should contain at least 8 characters and 1 digit
	</small>
	<input type="password" name="confirm_password" class="form-control" placeholder="Password Confirm" aria-describedby="defaultRegisterFormPasswordConfirmHelpBlock">
	<small id="defaultRegisterFormPasswordConfirmHelpBlock" class="form-text text-muted mb-4">
		Repeat the password you previously entered
	</small>
	<div class="custom-control custom-checkbox">
		<input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
		<label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
	</div>
	<button class="btn btn-danger my-4 btn-block" type="submit">
		<i class="fas fa-sign-in-alt"></i> Sign Up
	</button>
	<p>By clicking
		<em>Sign Up</em> you agree to our
		<a href="https://policies.google.com" class="text-danger" target="_blank">terms of service</a>
</form>
