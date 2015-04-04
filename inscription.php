<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<title>Site Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Connexion à mon application">
		
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		
		<!-- ci-dessous notre fichier CSS -->
		<link rel="stylesheet" href="stylesheet.css">
		
		<!-- Google -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />
		
		<!-- JS/ Jquery & Bootstrap -->
		<script type="text/javascript" src="validation.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <?php
	if (file_exists("header.php")){
		include_once("header.php");
    } else {
		echo "Erreur, veuillez contactez l'administrateur pour lui signaler ce problème";
	}
	?>
	 
    <!-- Le menu -->
    
    <?php
	if (file_exists("menu.php")){
		include_once("menu.php");
	} else {
		echo "Erreur, veuillez contactez l'administrateur pour lui signaler ce problème";
	}
	?>

    <!-- Le corps -->
    <div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="inscription">

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-1">
	
						<h1>Inscription</h1>
						<h2>Renseignez vos informations pour vous inscrire</h2>
						
						<form action="register.php" name="login" role="form" class="form-horizontal" onsubmit="return validateForm()" method="post" accept-charset="utf-8" data-toggle="validator">
							<div class="form-group">
								<div class="col-md-8"><input name="name" placeholder="Nom" type="text"/><br/><br/></div>
								<div class="col-md-8"><input name="firstName" placeholder="Prénom" type="text"/><br/><br/></div>
								<div class="col-md-8"><input name="dateOfBirth" placeholder="Date de naissance (yyyy-mm-dd)" type="date" min="1950-01-01"/><br/><br/></div>
								<div class="col-md-8"><input type="email" name="email" placeholder="email"/><br/><br/></div>
								<div class="col-md-8"><input name="password" placeholder="Mot de passe" type="password" id="UserPassword"/><br/><br/></div>
								<div class="col-md-8"><input name="passwordConfirm" placeholder="Confirmer le mot de passe" type="password" id="UserPassword"/><br/><br/></</div>
								<div class="col-md-offset-0 col-md-8"><input id="send" class="btn btn-success" name="boutonInscription" type="submit" value="Inscription"/></div>
							</div>
						</form>
						
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>
	
    <!-- Le pied de page -->
	<?php
    if (file_exists("footer.php")){
		include_once("footer.php");
    } else {
		echo "Erreur, veuillez contactez l'administrateur pour lui signaler ce problème";
	}
    ?>
    
    </body>
</html>