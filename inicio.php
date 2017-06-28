<?php header('Content-Type: text/html;charset=UTF-8');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Textiles de la India</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../recursos/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  	<link rel="stylesheet" href="../../recursos/css/inicio.css">
	<script src="../../recursos/js/jquery-3.1.1.min.js"></script>
	<script src="../../recursos/js/materialize.min.js"></script>
	<script src="../../recursos/js/inicio.js"></script>
</head>
<body>

	<div class="navbar-fixed">
		<nav>	
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">Logo</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				
				<ul id="nav-mobile" class="right hide-on-med-and-down section table-of-contents">
					<li><a href="#banner">INICIO</a></li>
					<li><a href="#nosotros">NOSOTROS</a></li>
					<li><a href="#servicios">SERVICIOS</a></li>
					<li><a href="#productos">PRODUCTOS</a></li>
					<li><a href="#">CONTACTO</a></li>
				</ul>

				<ul class="side-nav" id="mobile-demo" >
					<li><div class="user-view">
						<div class="background">
							<img src="../../recursos/imagenes/inicio/menu.jpg">
						</div>
						<a href="#!user"><img class="circle" src="../../recursos/imagenes/inicio/menu.jpg"></a>
						<a href="#!name"><span class="white-text name">John Doe</span></a>
						<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
					</div></li>
					<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
					<li><a href="#!">Second Link</a></li>
					<li><div class="divider"></div></li>
					<li><a class="subheader">Subheader</a></li>
					<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div id="banner" class="section scrollspy">
		<?php require('banner.html'); ?>
	</div>
	<div id="nosotros" class="section scrollspy">
		
	</div>
	<div id="servicios" class="section scrollspy">
		
	</div>
	<div id="productos" class="section scrollspy">
		
	</div>

	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>

</body>
</html>