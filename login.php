<?php
	session_start();
	
	$message='';
	
	try
	{
		$db = new PDO('mysql:host=localhost:3306;dbname=site;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}
	
    if (empty($_POST['username']) || empty($_POST['password'])) { //Oublie d'un champ
        $message = '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="index.php">ici</a> pour revenir</p>';
    }
	else //On check le mot de passe
    {
        $query=$db->prepare('SELECT mot_de_passe, email FROM utilisateur WHERE email = :email');
        $query->bindValue(':email',$_POST['username'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
		
		if ($data['mot_de_passe'] == $_POST['password']) // Acces OK !
		{
			$_SESSION['id'] = 1;
			$message = '<p>Bienvenue '.$data['email'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="index.php">ici</a> 
			pour revenir à la page d accueil</p>';  
		}
		else // Acces pas OK !
		{
			$message = '<p>Une erreur s\'est produite 
			pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="index.php">ici</a> 
			pour revenir à la page précédente</p>';
		}
		
		$query->CloseCursor();
    }
    echo $message;
?>