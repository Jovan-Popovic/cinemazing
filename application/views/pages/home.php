<div id="carouselExampleCaptions" class="carousel slide mt-3" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php foreach (range(0, 3) as $slide) : ?>
			<li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $slide ?>" class="<?php echo $slide === 0 ? 'active' : '' ?>"></li>
		<?php endforeach ?>
	</ol>
	<div class="carousel-inner">
		<?php foreach (range(1, 4) as $slide) : ?>
			<div class="carousel-item  <?php echo $slide === 1 ? ' active' : '' ?>">
				<img src="<?php echo assets_url() ?>images/home/slider/slide-<?php echo $slide ?>.png" class="d-block w-100" alt="slide-<?php echo $slide ?>" data-toggle="modal" data-target="#modal<?php echo $slide ?>">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<!-- <div id="modal<?php echo $slide ?>" class="modal fade modal-dialog modal-dialog-centered modal-dialog-scrollable" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div> -->
		<?php endforeach; ?>
	</div>
	<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</button>
</div>
