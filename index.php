<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>پرواز سیستم</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body dir="rtl">
    <div class="container">     
	<?php
	 include('include/header.php');
	 if(isset($_GET['page'])){
		$page =  $_GET['page'];
		if($page == 'building'){
			include('include/building.php');
			}
		elseif($page == 'adslhome'){
			include('include/adslhome.php');
			}
		elseif($page == 'contactus'){
			include('include/contactus.php');
			}
		elseif($page == 'aboutus'){
			include('include/aboutus.php');
			}
		elseif($page == 'cctv'){
			include('include/cctv.php');
			}
		elseif($page == 'hire'){
			include('include/hire.php');
			}
		else{
			include('include/main.php');
			}
		 }
	 else{
	 	include('include/main.php');
	 }
	 include('include/section.php');
	 include('include/footer.php');
	 ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript">
            if (typeof jQuery == 'undefined') {
                document.write(unescape("%3Cscript src='js/jquery.js' type='text/javascript'%3E%3C/script%3E"));
            }
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
