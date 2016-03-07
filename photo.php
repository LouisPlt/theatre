<!DOCTYPE HTML>
<html>

<!--div pour l'affichage d'une photo lors d'un clique-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<head>

	<?php include("head.html"); ?>
	<title>Yé Mistikrik? - Photos</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="photo-gallery.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style/global-style.css"/>


</head>


<body>
	
	<div class="container">

		<!--Logo en haut de page-->
		<header class="row col-sm-12">
			<div class="page-header">
        	<a href="index"><img src="images/logo_nom.png" id="logo" alt="logo"></a>
			</div>
		</header>

		
		<div class="row col-sm-12" >

			<!--Menu-->
			<nav class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="menu">
				<ul class="nav nav-pills nav-stacked" >
					<li> <a href="index"> <span class="glyphicon glyphicon-home" ></span> Accueil </a> </li>
					<li> <a href="contact"> <span class="glyphicon glyphicon-envelope"  > </span> Réservations </a> </li>
					<li class="active"> <a href="photo"> <span class="glyphicon glyphicon-camera" ></span> Espace Photo </a> </li>
					<li> <a href="troupe"> <span class="glyphicon glyphicon-user"></span> La Troupe </a> </li>
				</ul>
			</nav>


			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="jumbotron" id="galerie">
					
					<h1>Decouvrez nous</h1><br/><br/><br/><br/><br/><br/>

					<!--Galerie-->
					<ul class="row" >

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">

							<img class="img-responsive" src="images/galerie/9.jpg">

						</li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/2.jpg">

						</li>
						<li class="clearfix visible-sm-block clearfix visible-xs-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">								
							<img class="img-responsive" src="images/galerie/10.jpg">

						</li>
						<li class="clearfix visible-md-block clearfix visible-lg-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4"> 								
							<img class="img-responsive" src="images/galerie/14.jpg">

						</li>

						<li class="clearfix visible-sm-block clearfix visible-xs-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">								
							<img class="img-responsive" src="images/galerie/5.jpg">

						</li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/12.jpg">

						</li>

						<li class="clearfix visible-md-block clearfix visible-lg-block"></li>
						<li class="clearfix visible-sm-block clearfix visible-xs-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/7.jpg">

						</li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/4.jpg">

						</li>

						<li class="clearfix visible-sm-block clearfix visible-xs-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/1.jpg">

						</li>
						<li class="clearfix visible-md-block clearfix visible-lg-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/3.jpg">

						</li>

						<li class="clearfix visible-sm-block clearfix visible-xs-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/11.jpg">

						</li>
						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/6.jpg">

						</li>

						<li class="clearfix visible-sm-block clearfix visible-xs-block"></li>
						<li class="clearfix visible-md-block clearfix visible-lg-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/13.jpg">

						</li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/8.jpg">

						</li>

						<li class="clearfix visible-sm-block clearfix visible-xs-block"></li>

						<li class="col-sm-6 col-xs-6 col-lg-4 col-md-4">							
							<img class="img-responsive" src="images/galerie/15.jpg">

						</li>
						<li class="clearfix visible-md-block clearfix visible-lg-block"></li>
					</ul>

				</div>
			</div>
			
		</div>
	</div>
	

	<script type="text/javascript">
		$(document).ready(function(){
			$('li img').on('click',function(){
				var src = $(this).attr('src');
				var img = '<img src="' + src + '" class="img-responsive"/>';

				var index = $(this).parent('li').index();
				var html = '';
				html += img;
				html += '<div style="height:25px;clear:both;display:block;">';
				html += '<a class="controls next" href="'+ (index+2) + '">eeeenext &raquo;</a>';
				html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
				html += '</div>';

				$('#myModal').modal();
				$('#myModal').on('shown.bs.modal', function(){
					$('#myModal .modal-body').html(img);
				});
				$('#myModal').on('hidden.bs.modal', function(){
					$('#myModal .modal-body').html('');
				});

			});
		})
	</script>

	
</body>




</html>