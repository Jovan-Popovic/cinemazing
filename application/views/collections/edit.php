<?php echo validation_errors() ?>
<form action="<?php echo site_url('/collections/update/' . $post['id']) ?>" method="POST" class="text-center mx-auto border border-light col-12 col-sm-12 col-md-6 col-lg-4 p-5" action="#!">
	<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
	<p class="h4 mb-4">Update this Movie</p>
	<input type="text" name="title" id="defaultContactFormName" class="form-control mb-4" placeholder="Movie Title" value="<?php echo $post['title'] ?>">
	<div class="form-group">
		<textarea class="form-control rounded-0" name="description" rows="3" placeholder="Movie Description"><?php echo $post['description'] ?></textarea>
	</div>
	<input type="text" id="defaultContactFormName" name="image_url" class="form-control mb-4" value="<?php echo $post['image_url'] ?>" placeholder="Image URL">
	<div class="form-group">
		<textarea class="form-control rounded-0" name="available_at" rows="3" placeholder="Movie Availability"><?php echo $post['available_at'] ?></textarea>
	</div>
	<button class="btn btn-danger btn-block" type="submit">Update Movie</button>
</form>
