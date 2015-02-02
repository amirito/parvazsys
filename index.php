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
    <div class="masthead">
        <a href="?page=main"><img src="images/20.png" width="100" style="display:inline-block;"></a>
                <h3 class="text-muted" style="display:inline-block; color:#01a2e8;">پرواز سیستم</h3>
        <ul class="nav nav-justified" style="padding-right:0;">
          <li class="<?php if((isset($_GET['page']) && $_GET['page']=='main') || !isset($_GET['page'])){echo 'active';} ?>" ><a href="?page=main">صفحه اصلی</a></li>
          <li class="dropdown <?php if(isset($_GET['page']) && ($_GET['page']=='adslhome' || $_GET['page']=='building' || $_GET['page']=='dedicatebandwidth')){echo 'active';} ?>">
            <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
    				اینترنت <span class="caret"></span>
 				 </a>
          	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="?page=adslhome"><span class="glyphicon glyphicon-home"></span> ADSL خانگی</a></li>
                <li><a href="?page=building"><span class="glyphicon glyphicon-signal"></span> ADSL مجتمع</a></li>
                <li><a href="?page=dedicatebandwidth"><span class="glyphicon glyphicon-road"></span> پهنای باند اختصاصی</a></li>	
            </ul></li>
          <li class="dropdown <?php if(isset($_GET['page']) && $_GET['page']=='wireless'){echo 'active';} ?>"><a id="label" data-toggle="dropdown" data-target="#" href="#">شبکه <span class="caret"></span></a>
          	<ul class="dropdown-menu btn" role="menu" aria-labelledby="dLabel">
            	<li><a href="?page=wireless"><span class="glyphicon glyphicon-signal"></span> شبکه وایرلس</a></li>
            </ul>
          </li>
          <li class="<?php if(isset($_GET['page']) && $_GET['page']=='cctv'){echo 'active';} ?>"><a href="?page=cctv">دوربین مدار بسته</a></li>
          <li class="<?php if(isset($_GET['page']) && $_GET['page']=='parking'){echo 'active';} ?>"><a href="?page=parking">اتوماسیون پارکینگ</a></li>
          <li class="<?php if(isset($_GET['page']) && $_GET['page']=='hire'){echo 'active';} ?>"><a href="?page=hire">استخدام</a></li>
          <li class="<?php if(isset($_GET['page']) && $_GET['page']=='contactus'){echo 'active';} ?>"><a href="?page=contactus">تماس با ما</a></li>
          <li class="<?php if(isset($_GET['page']) && $_GET['page']=='aboutus'){echo 'active';} ?>"><a href="?page=aboutus">درباره ما</a></li>
        </ul>
      </div>
	<br> 
	<?php
	if(isset($_GET['page'])){
				if(is_file('include/'.$_GET['page'].'.php')){
					include 'include/'.$_GET['page'].'.php';
					}else{
					die('صفحه مورد نظر وجود ندارد');
					}
				}else{
					include 'include/main.php';
					}
?>
     <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <h2>خدمات اینترنت</h2>
          	
          <p>
          		آزادی برای استفاده از برنامه به معنای آزادی هر شخص و یا سازمانی برای استفاده از آن برنامه بر روی هر سیستم کامپیوتری، برای هر کاری، و بدون نیاز به هر گونه ارتباط بعدی با توسعه‌دهنده و یا هر نهاد خاصی می‌باشد. در این نوع آزادی، هدف کاربر اهمیت دارد نه هدف توسعه‌دهنده.
          </p>
          <p><a class="btn btn-primary" href="#" role="button">ادامه مطلب &raquo;</a></p>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <h2>شبکه وایرلس</h2>
          <p class="blockquote-reverse">
          	آزادی برای استفاده از برنامه به معنای آزادی هر شخص و یا سازمانی برای استفاده از آن برنامه بر روی هر سیستم کامپیوتری، برای هر کاری، و بدون نیاز به هر گونه ارتباط بعدی با توسعه‌دهنده و یا هر نهاد خاصی می‌باشد. در این نوع آزادی، هدف کاربر اهمیت دارد نه هدف توسعه‌دهنده.
           </p>
          <p><a class="btn btn-primary" href="#" role="button">ادامه مطلب &raquo;</a></p>
       </div>
       <div class="clearfix visible-sm visible-md"></div>
       <div class="col-lg-3 col-sm-6 col-xs-12">
          <h2>دوربین مدار بسته</h2>
          <p  class="blockquote-reverse">
          	آزادی برای استفاده از برنامه به معنای آزادی هر شخص و یا سازمانی برای استفاده از آن برنامه بر روی هر سیستم کامپیوتری، برای هر کاری، و بدون نیاز به هر گونه ارتباط بعدی با توسعه‌دهنده و یا هر نهاد خاصی می‌باشد. در این نوع آزادی، هدف کاربر اهمیت دارد نه هدف توسعه‌دهنده.
           </p>
          <p><a class="btn btn-primary" href="#" role="button">ادامه مطلب &raquo;</a></p>
       </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <h2>اتوماسیون پارکینگ</h2>
          <p  class="blockquote-reverse">
          		آزادی برای استفاده از برنامه به معنای آزادی هر شخص و یا سازمانی برای استفاده از آن برنامه بر روی هر سیستم کامپیوتری، برای هر کاری، و بدون نیاز به هر گونه ارتباط بعدی با توسعه‌دهنده و یا هر نهاد خاصی می‌باشد. در این نوع آزادی، هدف کاربر اهمیت دارد نه هدف توسعه‌دهنده.
          </p>
          <p><a class="btn btn-primary" href="#" role="button">ادامه مطلب &raquo;</a></p>
        </div>
      </div>
    </div>
    <footer class="footer">
 	 <p>
  	  كليه حقوق اين وب سايت متعلق به شرکت پرواز سیستم&copy; مي باشد. 1392
 	 </p>
 	 <p class="center">
  	<small>
  			طراح سایت : شرکت <a href="http://www.rayweb.ir">رای وب</a>
    </small>    
 	 </p>
	</footer>
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
