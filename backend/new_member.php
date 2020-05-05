<?php
	if (isset($_POST['mail']) AND isset($_POST['nom']) AND isset($_POST['tel'])) {
		
		setcookie('nom', 'ulrich', time()+365*24*3600, null, null, false, true);
		header("Location: ../view/membre.php");
	}
?>