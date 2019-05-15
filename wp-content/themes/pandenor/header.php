<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- app styles-->
	<link href="<?php bloginfo('template_url'); ?>/css/app.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand d-block d-lg-none" href="#">
			<img class="brand-logo-m ml-3" src="<?php bloginfo('template_url');?>/img/lg-pandenor-color.svg" alt="Pandenor">
		</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between" id="collapsibleNavId">
			<ul class="navbar-nav flex-fill justify-content-between mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#">Quem Somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Soluções</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Estrutura</a>
				</li>
			</ul>
			<div class="d-none d-lg-block" style="width: 400px"></div>
			<div class="brand-wrapper d-none d-lg-block">
				<a class="navbar-brand" href="#">
					<img class="brand-bg-path" src="<?php bloginfo('template_url');?>/img/gph-logo.svg" alt="Pandenor">
					<img class="brand-logo" src="<?php bloginfo('template_url');?>/img/lg-pandenor-color.svg" alt="Pandenor">
				</a>
			</div>
			<ul class="navbar-nav flex-fill justify-content-between mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#">Certificações</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Informações</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contato</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- <div class="secondary-nav d-none d-lg-flex justify-content-between">
	<div class="left-side flex-fill"></div>
	<div class="middle"></div>
	<div class="right-side flex-fill"></div>
</div>
<nav class="navbar navbar-expand-lg d-none d-lg-flex secondary-navbar">
	<div class="container">
		<div class="collapse navbar-collapse justify-content-between">
			<ul class="navbar-nav flex-fill justify-content-between mt-2 mt-lg-0 secondary-navbar-title">
				<li class="nav-item">
					<a class="nav-link" href="#">Quem Somos</a>
				</li>
			</ul>
			<div class="d-none d-lg-block" style="width: 400px"></div>
			<ul class="navbar-nav flex-fill justify-content-between mt-2 mt-lg-0 ml-n2 secondary-navbar-subtitle">
				<li class="nav-item">
					<a class="nav-link" href="#">Lorem ipsum dolor sit armet</a>
				</li>
			</ul>
		</div>
	</div>
</nav> -->