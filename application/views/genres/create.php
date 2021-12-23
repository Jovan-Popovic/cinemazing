<?php echo validation_errors() ?>
<?php echo form_open_multipart('/genres/create') ?>
<div class="text-center mx-auto border border-light col-12 col-sm-12 col-md-6 col-lg-4 p-5">
	<p class="h4 mb-4">Add new Genre</p>
	<input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Genre Name">
	<button class="btn btn-danger btn-block" type="submit">
		<i class="fas fa-plus-circle"></i> Create New Genre
	</button>
</div>
<?php echo form_close() ?>
