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