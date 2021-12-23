<section class="py-5">
	<div class="container text-center">
		<h2> <?php echo $post['title'] ?></h2>
		<img class="img-fluid my-4" src="<?php echo assets_url() ?>images/data/movies/<?php echo $post['image_slug'] ?>" alt="<?php echo $post['image_slug'] ?>">
		<div class="row mt-5 text-left">
			<div class="col-md-4 d-flex align-items-start">
				<div>
					<h3 class="mb-3">Description</h3>
					<p> <?php echo $post['description'] ?></p>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-start">
				<div>
					<h3 class="mb-3">Created At</h3>
					<p> <span class="text-muted">Date: </span><?php echo date('d-m-Y', strtotime($post['created_at'])) ?></p>
					<p> <span class="text-muted">Time: </span><?php echo date('h:i', strtotime($post['created_at'])) ?></p>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-start">
				<div>
					<h3 class="mb-3">Available At</h3>
					<p><?php echo $post['available_at'] ?></p>
				</div>
			</div>
		</div>
		<?php if ($this->session->userdata('user_id') === $post['user_id']) : ?>
			<a href="<?php echo base_url() ?>collections/edit/<?php echo $post['slug'] ?>" class="btn btn-primary pull-left">
				<i class="fas fa-edit"></i> Edit Movie
			</a>
			<?php echo form_open('/collections/delete/' . $post['id']) ?>
			<button type="submit" class="btn btn-danger mt-4">
				<i class="fas fa-trash"></i> Delete Movie
			</button>
			<?php echo form_close() ?>
		<?php endif; ?>
		<h4 class="mt-5">Comment Section</h4>
		<?php if ($comments) : ?>
			<ul class="list-group text-left">
				<?php foreach ($comments as $comment) : ?>
					<li class="list-group-item mt-5">
						<span class="font-weight-bold"><?php echo $comment['username'] ?></span> says: <?php echo $comment['body'] ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else : ?>
			<p class="text-center mt-5">No Comments To Display</p>
		<?php endif; ?>
		<?php echo form_close() ?>
		<?php if ($this->session->userdata('logged_in')) : ?>
			<h4 class="mt-5">Add a Comment</h4>
			<?php echo form_open('comments/create/' . $post['id']) ?>
			<input type="hidden" name="slug" value="<?php echo $post['slug'] ?>">
			<textarea class="form-control rounded-0" id="comment" name="body" rows="3" placeholder="Write something here..."></textarea>
			<button type="submit" class="btn btn-danger mt-4">
				<i class="fas fa-edit"></i> Post Comment
			</button>
			<?php echo form_close() ?>
		<?php endif; ?>
	</div>
</section>
<script>
	ClassicEditor
		.create(document.querySelector('#comment'))
</script>
