<section class="container mt-3">
	<p class="text-right m-0">
		<a href="<?php echo site_url('/collections/create') ?>" class="btn btn-danger">Add New Movie</a>
	</p>
	<div class="row justify-content-center">
		<?php foreach ($posts as $post) : ?>
			<div class="mt-3 col-lg-3 col-md-4 col-sm-6 col-12">
				<article class="card">
					<img src="<?php echo assets_url() ?>images/data/movies/<?php echo $post['image_slug'] ?>" class="card-img-top" alt="<?php echo $post['image_slug'] ?>" />
					<div class="card-body">
						<h5 class="card-title"><?php echo $post['title'] ?></h5>
						<p class="card-text">
							<span class="text-muted">Description: </span>
							<?php echo $post['description'] ?>
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item text-truncate">
							<span class="text-muted">Release Date: </span>
							<?php echo date('d-m-Y', strtotime($post['created_at'])) ?>
						</li>
						<li class="list-group-item text-truncate">
							<span class="text-muted">Avaliable At: </span>
							<?php echo $post['available_at'] ?>
						</li>
						<li class="list-group-item text-truncate">
							<span class="text-muted">Genre: </span>
							<?php echo $post['name'] ?>
						</li>
					</ul>
					<a href="<?php echo site_url('/collections/' . $post['slug']) ?>" class="btn btn-danger">Read More</a>
				</article>
			</div>
		<?php endforeach; ?>
		<?php if (empty($posts)) : ?>
			<p class="text-center">No Data Found, Come Back Later</p>
		<?php endif; ?>

	</div>
</section>
