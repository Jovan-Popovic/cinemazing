<section class="container mt-3">
	<p class="text-right m-0">
		<a href="<?php echo site_url('/genres/create') ?>" class="btn btn-danger">Add New Genre</a>
	</p>
	<ul class="list-group text-center mt-5">
		<?php foreach ($genres as $genre) : ?>
			<li class="list-group-item d-flex justify-content-center align-middle">
				<a href="<?php echo site_url('/genres/collections/' . $genre['id']) ?>"><?php echo $genre['name'] ?></a>
				<?php if ($this->session->userdata('user_id') === $genre['user_id']) : ?>
					<?php echo form_open('/genres/delete/' . $genre['id']) ?>
					<button type="submit" class="btn btn-sm btn-danger ml-3"><i class="fas fa-trash"></i></button>
					<?php echo form_close() ?>
				<?php endif; ?>
			</li>

		<?php endforeach; ?>
	</ul>
</section>
