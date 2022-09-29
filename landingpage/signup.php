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
    <form method="post" action="signup.php">
    <div class="lc-block text-center col-xs-12 col-lg-12" id="l-login">
        <div class="form-group">
            <input type="text" class="form-control form-control-sm" name="mail" placeholder="mailbox number">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-sm" name="pass" placeholder="Login password">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-sm" name="secpass" placeholder="Security password">
        </div>
         <div class="form-group">
            <input type="text" class="form-control form-control-sm" name="code" placeholder="Invite code">
        </div>
        <button type="submit" class="btn btn-block btn-primary btn-float m-t-25" name="register">Sign Up</button>
    </div>
    </form>
</div>
</body>

</body>
</html>