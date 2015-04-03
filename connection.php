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
			<div class="connection">

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-1">
	
						<h1>Connection</h1>
						<h2>Entrez votre login et mot de passe</h2>
	
						<form action="login.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
							<div class="form-group">
								<div class="col-md-8"><input name="username" placeholder="Identifiant" class="form-control" type="text" id="UserUsername"/></div>
							</div>

							<div class="form-group">
								<div class="col-md-8"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/></div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-0 col-md-8"><input class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
							</div>

						</form>
						<p class="credits">Développé par <a href="#" target="_blank">Maxime Rovati</a>.</p>
						
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