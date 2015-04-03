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