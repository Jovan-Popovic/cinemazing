<section class="py-5">
	<div class="container text-center">
		<h2> <?php echo $post['title'] ?></h2>
		<img class="img-fluid my-4" src="<?php echo $post['image_url'] ?>" alt="">
		<div class="row mt-5 text-left">
			<div class="col-md-4 d-flex align-items-start">
				<img class="mr-2 mt-2" src="placeholder/icons/check.svg" alt="">
				<div>
					<h3 class="mb-3">Description</h3>
					<p> <?php echo $post['description'] ?></p>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-start">
				<img class="mr-2 mt-2" src="placeholder/icons/check.svg" alt="">
				<div>
					<h3 class="mb-3">Created At</h3>
					<p> <span class="text-muted">Date: </span><?php echo date('d-m-Y', strtotime($post['created_at'])) ?></p>
					<p> <span class="text-muted">Time: </span><?php echo date('h:i', strtotime($post['created_at'])) ?></p>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-start">
				<img class="mr-2 mt-2" src="placeholder/icons/check.svg" alt="">
				<div>
					<h3 class="mb-3">Available At</h3>
					<p><?php echo $post['available_at'] ?></p>
				</div>
			</div>
		</div>
		<!-- <a class="btn btn-primary mt-4" href="#">Read more</a> -->
	</div>
</section>
