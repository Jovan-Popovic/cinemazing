<section id="intro-example" class="text-center bg-image" style="background-image: url('<?php echo assets_url() ?>images/home/banner.png');">
	<div class="mask p-5" style="background-color: rgba(0, 0, 0, 0.5);">
		<div class="d-flex justify-content-center align-items-center h-100">
			<div class="text-white">
				<h1 class="mb-3">Welcome to Cinemazing</h1>
				<h5 class="mb-4">Best & free cinema and streaming service</h5>
				<a class="btn btn-outline-light btn-lg m-2" href="<?php echo base_url() ?>about-us" role="button" rel="nofollow" target="_blank">Check our Collections</a>
				<a class="btn btn-outline-light btn-lg m-2" href="<?php echo base_url() ?>about-us" target="_blank" role="button">Learn about us</a>
			</div>
		</div>
	</div>
</section>
<section class="container">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
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
				<div class="modal fade" id="modal<?php echo $slide ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Slide <?php echo $slide ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								Random desc for slide <?php echo $slide ?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
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
</section>
<section class="py-5">
	<div class="container">
		<h2 class="text-center">Discard, Spontaneity, Scan.</h2>
		<div class="d-flex justify-content-center my-4">
			<img class="mx-1" src="placeholder/icons/unicorn.svg" alt="">
			<img class="mx-1" src="placeholder/icons/unicorn.svg" alt="">
			<img class="mx-1" src="placeholder/icons/unicorn.svg" alt="">
		</div>
		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora voluptatem molestiae quis deserunt, iste expedita. Placeat vero dolorum doloribus quam, et natus sequi tempora, consequuntur laudantium inventore odio reprehenderit architecto.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolor commodi doloribus nam cupiditate, aut odit.</p>
	</div>
</section>
