<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title></title>
</head>
<body>


<body>
 <div class="container-fluid">
 
    <div class="lc-block col-xs-12 col-lg-12" id="l-login">
        <form method="post" action="login.php">
        <div class="form-group">
            <input type="text" class="form-control form-control-sm" name="mail" placeholder="mailbox number">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-sm" name="pass" placeholder="Login password">
        </div><p>Remember the Password</p>
        <div class="sliderdiv">
        <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
        </label>
        </div>
        <div class="form-group text-center">
          <button type="submit" name="log" class="btn btn-block btn-primary btn-float m-t-25">Sign In</button> 
        </div>
        <div class="form-group text-center">
        <a class="sign" href="signup.php" style="color:black;">Sign Up</a>
        </div>
        </form>
    </div>
</div>
</body>

</body>
</html>