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
		<a href="<?php echo base_url() ?>collections/edit/<?php echo $post['slug'] ?>" class="btn btn-primary pull-left">
			<i class="fas fa-edit"></i> Edit Movie
		</a>
		<?php echo form_open('/collections/delete/' . $post['id']) ?>
		<button type="submit" class="btn btn-danger mt-4">
			<i class="fas fa-trash"></i> Delete Movie
		</button>
		<?php echo form_close() ?>
	</div>
</section>
