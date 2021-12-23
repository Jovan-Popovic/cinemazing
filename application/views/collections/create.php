<?php echo validation_errors() ?>
<?php echo form_open_multipart('/collections/create') ?>
<div class="text-center mx-auto border border-light col-12 col-sm-12 col-md-6 col-lg-4 p-5">
	<p class="h4 mb-4">Add new Movie to our Collections</p>
	<input type="text" name="title" id="defaultContactFormName" class="form-control mb-4" placeholder="Movie Title">
	<div class="form-group">
		<textarea class="form-control rounded-0" id="description" name="description" rows="3" placeholder="Movie Description"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlFile1">Movie Image</label>
		<input name="userfile" type="file" class="form-control-file" id="exampleFormControlFile1">
	</div>
	<div class="form-group">
		<select name="genre_id" id="" class="form-control">
			<?php foreach ($genres as $genre) : ?>
				<option value="<?php echo $genre['id'] ?>"><?php echo $genre['name'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<textarea class="form-control rounded-0" name="available_at" rows="3" placeholder="Movie Availability"></textarea>
	</div>
	<button class="btn btn-danger btn-block" type="submit">
		<i class="fas fa-plus-circle"></i> Post New Movie
	</button>
</div>
<?php echo form_close() ?>
<script>
	ClassicEditor
		.create(document.querySelector('#description'))
</script>
