<?php if(isset($error)){echo $error;} ?>
<form class="form-signin" role="form" method="post">
    <h2 class="form-signin-heading">صفحه ورود</h2>
    <input type="text" class="form-control" placeholder="نام کاربری" required autofocus name="user_name">
    <input type="password" class="form-control" placeholder="کلمه عبور" required name="password">
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">ورود</button>
</form>
