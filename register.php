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
	
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['passwordConfirm'])) { //Oublie d'un champ
        $message = '<p>une erreur s\'est produite pendant votre inscription.
		Vous devez remplir tous les champs correctement</p>
		<p>Cliquez <a href="index.php">ici</a> pour revenir</p>';
    }
	else //On inscrit la personne
    {
        $query=$db->prepare('INSERT INTO utilisateur VALUES (NULL, :firstName, :name, MD5(:password), :username, :phoneNumber, :dateOfBirth, :country, :city, :postalCode)');
        $query->bindValue(':name',$_POST['name'], PDO::PARAM_STR);
        $query->bindValue(':firstName',$_POST['firstName'], PDO::PARAM_STR);
        $query->bindValue(':password',$_POST['password'], PDO::PARAM_STR);
        $query->bindValue(':username',$_POST['username'], PDO::PARAM_STR);
        $query->bindValue(':phoneNumber',$_POST['phoneNumber'], PDO::PARAM_STR);
        $query->bindValue(':dateOfBirth',$_POST['dateOfBirth'], PDO::PARAM_STR);
        $query->bindValue(':country',$_POST['country'], PDO::PARAM_STR);
        $query->bindValue(':city',$_POST['city'], PDO::PARAM_STR);
        $query->bindValue(':postalCode',$_POST['postalCode'], PDO::PARAM_STR);
		$query->execute();
        if ($query->rowCount()>0)
		{
			$_SESSION['id'] = 1;
			$message = '<p>Bienvenue, 
			vous êtes maintenant inscrit!</p>
			<p>Cliquez <a href="index.php">ici</a> 
			pour revenir à la page d accueil</p>';  
		}
		else //Echec de la requête
		{
			$query->debugDumpParams();
			$message = '<p>Une erreur s\'est produite 
			pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="inscription.php">ici</a> 
			pour revenir à la page précédente</p>';
		}
		
		$query->CloseCursor();
    }
    echo $message;
?>