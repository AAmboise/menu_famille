<!-- HEADER -->
<?php include('layout/header.php') ?>

<div class="container-fluid">
  	<div class="row justify-content-center">
    	<div class="py-2 my-5 text-center message col-5 border border-dark border-3 rounded-3">
			<p class="fw-bold">Inscription à l'espace membre :<br/></p>
			<form action="verification.php" method="post">
				login&nbsp;&nbsp;=========><input type="text" name="login" value=""><br />
				mot de passe&nbsp;====><input type="password" name="mdp1" value=""><br />
				confirmation mdp&nbsp;=><input type="password" name="mdp2" value=""><br />
				<br />
				<input type="submit" name="inscription" value="Inscription">
			</form>
		</div>
	</div>
</div>

<!-- FOOTER -->
<?php include('layout/footer.html') ?>