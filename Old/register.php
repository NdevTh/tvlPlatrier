<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registration</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Identifiant</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirmation de Mot de passe</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Vous êtes chez nous ? <a href="login.php">Inscrivez-vous
			</a>
		</p>
	</form>
</body>
</html>