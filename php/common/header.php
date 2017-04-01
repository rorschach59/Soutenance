<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="description" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
		<link rel="stylesheet" href="resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="resources/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="resources/css/normalize.css"/>
		<link rel="stylesheet" href="resources/css/main.css"/>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

		<title>Soutenance</title>
	</head>
	<body>
		<!-- Header -->
		<?php if ($_SERVER['REQUEST_URI'] === '/Soutenance/' || $_SERVER['REQUEST_URI'] === '/Soutenance/?page=0') :?>
	    <nav class="navbar">
		<?php else: ?>
			<nav class="navbar navbar-default">
		<?php endif; ?>
		<!-- <nav class="navbar"> -->
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="?page=0"><img src="resources/img/helmet.png" alt="motorbike"> Site soutenance</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="?page=20">Sorties</a></li>
					<li><a href="?page=21">Météo</a></li>
					<li><a href="?page=22">Etat des routes</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?page=11">Inscription</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="?page=10">Connexion</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.container-fluid -->
		</nav>
