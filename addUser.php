<?php include'header.html'; ?>

<?php if (isset($_POST['name'])): ?>

	<?php 
		try { $bdd = new PDO('mysql:host=localhost;dbname=menu_familial;charset=utf8', 'root', ''); } 
		catch(Exception $e) { die('Erreur : '.$e->getMessage()); }	?>

	Bonjour, <?php echo htmlspecialchars($_POST['firstname']); ?>

	<?php $req = $bdd->prepare("INSERT INTO user (nom, prenom) VALUES(:nom, :prenom)");
             $req->execute([
                "nom" => $_POST['name'],
                "prenom" => $_POST['firstname']
                           ])
                 or die(print_r($req->errorInfo())); ?>
                   
<?php endif ?>

		<form action="" method="post" class="form-example">   
			<div class="form-example">     
				<label for="name">Nom: </label>     
				<input type="text" name="name" id="name" required>   
			</div>
			<div class="form-example">     
				<label for="firstname">Prenom: </label>     
				<input type="text" name="firstname" id="firstname" required>   
			</div>
			<div class="form-example">     
				<input type="submit" value="Valider!">   
			</div> 
		</form> 
		<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>

		<?php include'footer.html'; ?>