<?php include'header.html'; ?>

      	<?php 
      	if (isset($_SESSION['user'])) {
      		$prenom = $_SESSION['prenom'];
      		$nom = $_SESSION['nom'];
      	}else
      	{$nom = 'inconnu';}
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
	    	try { $bdd = new PDO('mysql:host=localhost;dbname=menu_familial;charset=utf8', 'root', ''); } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
	    	
	    	$reponse = $bdd->query("SELECT * FROM user "); 

	    	WHILE ($data = $reponse->fetch()) {

            	//echo $data['id']. (' ');           	
            	echo $data['prenom']. (' ');
            	echo $data['nom']. (' ');
            	echo ("<br />");
        	}$reponse->closeCursor();

        	echo("<br />");
      	?>

	<?php include'footer.html'; ?>