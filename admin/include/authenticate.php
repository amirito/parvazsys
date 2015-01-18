<?php
	if(isset($_POST['submit'])){
		$router = NULL;
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
		if($user_name=='admin' && $password=='123'){
			$_SESSION['login'] = 'admin';
			header('Location: index.php?page=admin');
		}
			else if($user_name=='1' && $password=='1'){
			$_SESSION['login'] = 'receptor';
			header('Location: index.php?page=receptor');
		}
		else{
			$error = '
			<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>خطا</strong> نام کاربری یا رمز عبور اشتباه است
	</div>
			';
			}
		}
?>