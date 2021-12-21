<?php echo validation_errors() ?>
<form action="<?php echo site_url('/collections/create') ?>" method="POST" class="text-center mx-auto border border-light col-12 col-sm-12 col-md-6 col-lg-4 p-5" action="#!">
	<p class="h4 mb-4">Add new Movie to our Collections</p>
	<input type="text" name="title" id="defaultContactFormName" class="form-control mb-4" placeholder="Movie Title">
	<div class="form-group">
		<textarea class="form-control rounded-0" name="description" rows="3" placeholder="Movie Description"></textarea>
	</div>
	<input type="text" id="defaultContactFormName" name="image_url" class="form-control mb-4" placeholder="Image URL">
	<div class="form-group">
		<textarea class="form-control rounded-0" name="available_at" rows="3" placeholder="Movie Availability"></textarea>
	</div>
	<button class="btn btn-danger btn-block" type="submit">Post New Movie</button>
</form>
