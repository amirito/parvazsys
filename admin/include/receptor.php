<?php 
	if(isset($_POST['logout'])){
		header('Location: logout.php');
		}

	//if(!isset($_SESSION['login']) || $_SESSION['login']!='receptor'){
	// header('Location: index.php?page=login&access=denied');
	// }
 ?>
<form role="form" method="post">
	<input type="submit" name="logout" value="خروج" class="btn btn-primary" style="position:fixed;top:10px;left:10px;">
</form>
<?php
if(!isset($_GET['request'])){
	echo '<br><br>
<div class="row">
	<a href="index.php?page=receptor&request=laptop" ><div class="col-lg-5 col-sm-12 thumbnail text-center">
    <br><br><br><br>
    	<h2>لپ تاپ</h2>
    <br><br><br><br>
    </div></a>
    <a href="index.php?page=receptor&request=translate" ><div class="col-lg-5 col-lg-offset-2 col-sm-12 thumbnail text-center">
    <br><br><br><br>
    	<h2>ترجمه</h2>
    <br><br><br><br>
    </div></a>
</div>';
}
elseif(isset($_GET['request']) && $_GET['request']=='laptop'){
	include('laptop.php');
	echo '
	<a class="btn btn-warning" href="index.php?page=receptor" style="position:fixed;top:10px;right:10px;">بازگشت</a>
	';
	}
elseif(isset($_GET['request']) && $_GET['request']=='translate'){
	include('translate.php');
	echo '
	<a class="btn btn-warning" href="index.php?page=receptor" style="position:fixed;top:10px;right:10px;">بازگشت</a>
	';
	}
?>
