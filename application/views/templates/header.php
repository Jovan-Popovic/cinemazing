<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#25323E" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo assets_url() ?>images/general/favicon.ico" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo assets_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo assets_url() ?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo assets_url() ?>css/main.css">
	<title>Cinemazing</title>
	<script src="<?php echo assets_url() ?>js/ckeditor.min.js"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo base_url() ?>">
				<img class="navbar-logo align-middle" src="<?php echo assets_url() ?>images/general/logo.png" alt="logo">
				<span>Cinemazing</span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav mr-auto">
					<?php foreach (['home', 'collections', 'genres', 'ticket-sale', 'about-us'] as $key => $route) : ?>
						<li class="nav-item<?php echo ((base_url() . $route) === current_url() || ($key === 0 && base_url() === current_url()))  ? ' active' : '' ?>">
							<a class="nav-link" href="<?php echo base_url() . ($key !== 0 ? $route : '') ?>"><?php echo ucwords(str_replace('-', ' ', $route)) ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
				<?php if (!$this->session->userdata('logged_in')) : ?>
					<a href="<?php echo base_url() . 'users/login' ?>" class="btn btn-danger my-2 my-sm-0">
						<i class="fas fa-user"></i> Login
					</a>
					<a href="<?php echo base_url() . 'users/sign-up' ?>" class="btn btn-secondary my-2 my-sm-0 ml-2">
						<i class="fas fa-sign-in-alt"></i> Sign Up
					</a>
				<?php else : ?>
					<a href="<?php echo base_url() . 'users/logout' ?>" class="btn btn-danger my-2 my-sm-0 ml-2">
						<i class="fas fa-sign-out-alt"></i> Logout
					</a>
				<?php endif; ?>
			</div>
		</nav>
	</header>
	<?php
	$danger_data = [
		'user_registered',
		'user_logged_in',
		'movie_created',
		'movie_updated',
		'movie_deleted',
		'genre_created',
	];
	$secondary_data = [
		'username_exists',
		'email_exists',
		'login_failed',
		'user_logged_out',
	];
	?>
	<?php foreach ($danger_data as $message) : ?>
		<?php if ($this->session->flashdata($message)) : ?>
			<p class="alert alert-danger" role="alert">
				<?php echo	$this->session->flashdata($message) ?>
			</p>
		<?php endif; ?>
	<?php endforeach; ?>
	<?php foreach ($secondary_data as $message) : ?>
		<?php if ($this->session->flashdata($message)) : ?>
			<p class="alert alert-secondary" role="alert">
				<?php echo	$this->session->flashdata($message) ?>
			</p>
		<?php endif; ?>
	<?php endforeach; ?>
