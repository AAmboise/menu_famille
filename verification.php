<!-- HEADER -->
<?php include('template/layout/header.php') ?>


<?php

// On vérifie que le visiteur a correctement envoyé le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription'){

    // On teste l'existence des variables et on vérifie qu'elle ne sont pas vides
    if (
		isset($_POST['login']) &&
		!empty($_POST['login']) &&
		isset($_POST['mdp1']) &&
		!empty($_POST['mdp1']) &&
		isset($_POST['mdp2']) &&
		!empty($_POST['mdp2'])       
    ){
		// On vérifie que les deux mots de passe sont identiques
		if ($_POST['mdp1'] != $_POST['mdp2']){
		echo'Les 2 password sont differents.';
		}

		// On se connecte à la bdd
		try { $bdd = new PDO('mysql:host=localhost;dbname=menu_familial;charset=utf8', 'root', ''); } 
		catch(Exception $e) { die('Erreur : '.$e->getMessage()); } 

		// On parcourt la bdd
		$req = $bdd->query("SELECT count(*) FROM user WHERE login = '".$_POST['login']."'"); 
      
		// Résultat requête
		$result = $req->fetch();

		// Présence de login en doublon ?
		if ($result[0] > 0);

		// Si aucun autre login identique existe, on inscrit ce nouveau login
		if ($result[0] == 0){
			$req=$bdd->prepare("INSERT INTO user (login, md5) VALUES('".$_POST['login']."', '".$_POST['mdp1']."')");
			$req->execute(array('login'=>$_POST['login'],'md5'=>$_POST['mdp1']));
			echo'inscription reussie !';
			echo"<br/><a href=\"connexion.php\">se connecter</a>";
		}

		// Sinon on n'inscrit pas ce login
		else {
			echo'Echec de l\'inscription !<br/>Un membre possede deja ce login !';
		}
	}

	// Si au moins un des champs est vide
	else {
		echo'Echec de l\'inscription !<br/>Au moins un des champs est vide !';
	}
} ?>

<!-- FOOTER -->
<?php include('template/layout/footer.html') ?>