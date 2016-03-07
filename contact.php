<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>

	<?php include("head.html"); ?>


	<title>Yé Mistikrik? - Contact et Réservations</title>

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
					<li> <a href="index"> <span class="glyphicon glyphicon-home"></span> Accueil </a> </li>
					<li class="active"> <a href="contact"> <span class="glyphicon glyphicon-envelope"> </span> Réservations </a> </li>
					<li> <a href="photo"> <span class="glyphicon glyphicon-camera" ></span> Espace Photo </a> </li>
					<li> <a href="troupe"> <span class="glyphicon glyphicon-user" ></span> La Troupe </a> </li>
				</ul>
			</nav>



			<section class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="jumbotron">
					<h1>Réserve ta place ! </h1><br><br><br>

					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
							<p><!--Tu veux en savoir plus sur l’association ? Tu veux nous rejoindre ? -->
								Tu veux <b>réserver ta place</b> pour notre prochaine représentation ? Alors tu es au bon endroit.
								Tu peux nous retrouver sur scène le <b>2, 3 et 4 mars</b>.<br><br>
								Cette année Yé Mistikrik? a selectioné pour vous la comédie policière: <b>Piège pour un homme seul</b> de Robert Thomas.<br>
								Un jeune marié déplore la disparition de sa femme. Alors qu'il ne l'attendait plus, elle revient. Mais il ne la reconnaît plus ... Petit-à-petit, la toile se tisse ! Piège ou folie ? 
								<br><br>
								Une histoire rocambolesque, où le rire et le mystère se croisent au fil des minutes et où le spectateur a parfois lui aussi l'impression de se retrouver dans le piège...
								<!--Si tu veux juste discuter avec nous il te suffit de remplir le formulaire ! -->
								<br><br>Pour réserver, remplit le formulaire et n’oublie pas de bien indiquer <b>ton nom et 
								prénom ainsi que la date choisie</b>.<br><br> <b>Tarifs:</b><br>
								- Etudiant: 5€<br>
								- Autre: 8€ <br><br></p>
								
								

							</div>

							<img class="col-lg-5 col-md-5 col-sm-12 col-xs-12" src="images/piece.jpg" alt="piece" id="piece" style="height:50%"> 
						</div>
						
						
						<p>Pour le règlement ? C’est très simple, tu peux nous 
							retrouver sur le campus ou tu payeras sur place.</p><br><br><br>
							

							<!--Formulaire d'envoi de mail-->
							<form id="form" action="form.php" method="post" class="form-horizontal" novalidate="true"  role="form">
								<div><input name="my-contact-form" type="hidden" value="1"  class="form-control"></div>
								
								<fieldset>
									<legend>N'hesite pas à résever !</legend>

									<!--Nom-->
									<div class="form-group">
										<label for="name" class="col-sm-4 control-label">Ton nom</label>
										<div class="col-sm-8">
											<input id="name" name="name" type="text" value="" required="required" class="form-control">
										</div>
									</div>

									<!--Email-->
									<div class="form-group">
										<label for="email" class="col-sm-4 control-label">Ton email</label>
										<div class="col-sm-8">
											<input id="email" name="email" type="email" value="" required="required" class="form-control">
										</div>
									</div>

									<!--Objet du mail-->
									<div class="form-group">
										<label for="object" class="col-sm-4 control-label">Objet </label>
										<div class="col-sm-8">
											<input id="object" name="object" type="text" value="" required="required" class="form-control">
										</div>
									</div>

									<!--Message-->
									<div class="form-group">
										<label for="message" class="col-sm-4 control-label">Ton message</label>
										<div class="col-sm-8">
											<textarea id="message" name="message" cols="30" rows="4" required="required" class="form-control"></textarea>
										</div>
									</div>

									<!--Boutton d'envoi-->
									<div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
											<button type="submit" name="submit-btn"  style="background-color:#5919B8" value="1" class="btn btn-success">Envoyer</button>
										</div>
									</div>
								</fieldset>
							</form>

							<div name="message">
								<?php 

								if(isset($_GET['email']) && $_GET['email']== 'send'){
									?><div class="alert alert-success" role="alert">Mail envoyé !</div><?php
								}
								elseif (isset($_GET['email']) && $_GET['email'] == 'error'){
									?><div class="alert alert-danger" role="alert">Erreur dans l'envoie du mail !</div>
									<?php
								}
								?>
							</div>
						</div>
					</section>

				</div>
			</div>
		</body>

		</html>