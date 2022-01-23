<?php include'template/header.html'; ?>
<?php include'template/navigation.html'; ?>

<?php
	session_start();
	if (!isset($_SESSION['login'])) {header ('Location: index.php');exit();}
?>

<p><strong>ESPACE MEMBRES</strong><br/>
		Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br/>
		<a href="deconnexion.php">Déconnexion</a>
		</p>
<?php 
	if (isset($_SESSION['user'])){
		$prenom = $_SESSION['prenom'];
		$nom = $_SESSION['nom'];

	} else {
		$nom = 'inconnu';
		$prenom = '';
	}
?>

<!-- Feature -->
<div class="container">
	<div class="row mt-4">
		<div class="col-xs12 col-sm-6">
			<div class="feature text-center text-dark">
				<p><a href="addUser.php"><i class="fas fa-user-plus"></i></a></p> 
				<p>ajouter un membre</p>
			</div> 
		</div>
		<div class="col-xs12 col-sm-6">
			<div class="feature text-center text-dark">
				<p><a href="#"><i class="fas fa-utensils "></i></a></p> 
				<p>ajouter un menu</p>
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-xs12 col-sm-6">
			<div class="feature text-center text-dark">
				<p><a href="addUser.php"><i class="fas fa-user-minus"></i></a></p> 
				<p>Supprimer un membre</p>
			</div> 
		</div>
		<div class="col-xs12 col-sm-6">
			<div class="feature text-center text-dark">
				<p><a href="#"><i class="fas fa-utensils "></i></a></p> 
				<p>Supprimer un menu</p>
			</div>
		</div>
	</div>
</div>

 <!-- Liste des membres -->
<?php
	
	// On se connecte a la bdd
	try { $bdd = new PDO('mysql:host=localhost;dbname=menu_familial;charset=utf8', 'root', ''); } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
	
	// On parccourt la bdd
	$reponse = $bdd->query("SELECT * FROM famille "); 

	// On séléctionne et on affiche les noms et prénoms
	WHILE ($data = $reponse->fetch()){
		echo $data['prenom'].' '.$data['nom']."<br />";
	} $reponse->closeCursor();

	echo("<br />");
?>

<?php include'template/footer.html'; ?>