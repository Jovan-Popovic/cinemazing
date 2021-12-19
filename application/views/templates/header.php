<?php defined('BASEPATH') or exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#25323E" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo assets_url() ?>images/general/favicon.ico" />
	<link rel="stylesheet" href="<?php echo assets_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo assets_url() ?>css/fontawesome.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="<?php echo assets_url() ?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo assets_url() ?>css/main.css">
	<title>Cinemazing</title>
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
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>collections">Collections</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>ticket-sale">Ticket Sale</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>about-us">About Us</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-md-0">
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Login</button>
					<button class="btn btn-outline-secondary my-2 my-sm-0 ml-2" type="submit">Sign Up</button>
				</form>
			</div>
		</nav>
	</header>
	<div class="container-fluid">
