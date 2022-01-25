<!-- HEADER -->
<?php include('layout/header.php') ?>

<div class="container-fluid">
  	<div class="row justify-content-center">
    	<div class="py-2 my-5 text-center message col-5 border border-dark border-3 rounded-3">
			<p class="fw-bold">Connexion à l'espace membre :<br /></p>

				<form action="connexion.php" method="post">
					login&nbsp;&nbsp;=======><input type="text" name="login" value=""><br /><br />
					mot de passe&nbsp;==><input type="password" name="pwd" value=""><br />
					<br />
					<input type="submit" name="connexion" value="Connexion">
				</form>
		</div>
	</div>
</div>
		
<?php

// On vérifie que le visiteur a correctement saisi puis envoyé le formulaire
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion'){

	// On teste l'existence des variables et on vérifie qu'elle ne sont pas vides
	if (
		isset($_POST['login']) && 
		!empty($_POST['login']) && 
		isset($_POST['pwd']) && 
		!empty($_POST['pwd'])
	){
		// On se connecte à la bdd
		try { $bdd = new PDO('mysql:host=localhost;dbname=menu_familial;charset=utf8', 'root', ''); } 
		catch(Exception $e) { die('Erreur : '.$e->getMessage()); } 

		// On parcourt la bdd
		$req = $bdd->query("SELECT count(*) FROM user WHERE login ='".$_POST['login']."' AND md5 ='".$_POST['pwd']."'");

		// Résultat requête
		$data = $req->fetch();

		// Si on obtient une réponse, alors l'utilisateur est un membre
		// On ouvre une session pour cet utilisateur et on le connecte à l'espace membre
		if ($data[0] == 1){
			session_start();
			$_SESSION['login'] = $_POST['login'];
			header('Location: espace-membre.php');
			exit();
		}

		// Si le visiteur a saisi un mauvais login ou mot de passe, on ne trouve aucune réponse
		elseif ($data[0] == 0){
			echo'Login ou mot de passe non reconnu !'; 
			echo"<br/><a href=\"accueil.php\">Revenir à l'accueil</a>";exit();
		}

		// Sinon, il existe un problème dans la base de données
		else {
			echo'Plusieurs membres ont<br/>les memes login et mot de passe !'; 
			echo"<br/><a href=\"accueil.php\">Revenir à l'accueil</a>";exit();
		}
	}
	
	else {
		echo'Errreur de saisie !<br/>Au moins un des champs est vide !'; 
		echo"<br/><a href=\"accueil.php\">Revenir à l'accueil</a>";exit();
	}
} ?>


<!-- FOOTER -->
<?php include('layout/footer.html') ?>