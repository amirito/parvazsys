<?php 
	if(isset($_POST['logout'])){
		header('Location: logout.php');
		}

	if(!isset($_SESSION['login']) || $_SESSION['login']!='admin'){
	 header('Location: index.php?page=login&access=denied');
	 }
 ?>
admin
<form role="form" method="post">
<input type="submit" name="logout">