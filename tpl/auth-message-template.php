<?php

$message="MESSAGE_TEMPLATE";

if(isset($_POST['login']))
{
	if ($_POST['username'] != '' && $_POST['password'] !='') {
		if ($_POST['username'] == 'caesar' && $_POST['password'] == 'rome') {
			echo $message;
			exit();
		}
		else {
			$error = 'Login failed !';
		}
	}
	else {
		$error = 'Please user both your username and password to access your account';
	}
}

if (isset($error))
{
	echo $error;
}

?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	Username: <input type="text" id="username" name="username" size="32" value="" /><br />
	Password: <input type="password" id="password" name="password" size="32" value="" /><br />
	<input type="submit" name="login" value="Login" />
</form>
