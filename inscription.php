<?php include'template/header.html'; ?>
<?php include'template/navigation.html'; ?>

		Inscription à l'espace membre :<br/>
		<form action="verification.php" method="post">
		login&nbsp;&nbsp;=========><input type="text" name="login" value=""><br />
		mot de passe&nbsp;====><input type="password" name="mdp1" value=""><br />
		confirmation mdp=><input type="password" name="mdp2" value=""><br />
		<input type="submit" name="inscription" value="Inscription">
		</form>

<?php include'template/footer.html'; ?>
