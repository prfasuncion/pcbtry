<?php 
  session_start();
  $mail ='';
  $secpass ='';
  $errors = array(); 
  

  // connect to database
  $con = mysqli_connect('localhost','root','','');
  $db = mysqli_select_db($con,'application');

  
  // if the sign up button is clicked
  if(isset($_POST['register'])) {
    $mail = mysqli_real_escape_string($con,$_POST['mail']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);
    $secpass = mysqli_real_escape_string($con,$_POST['secpass']);
    $code = mysqli_real_escape_string($con,$_POST['code']);
  
    
  //ensure that form fields are filled properly
  if (empty($mail)){
    array_push($errors, "Mail box is Required");
  }
  if (empty($pass)){
    array_push($errors, "Password is Required");
  }
  if (empty($secpass)){
    array_push($errors, "Security Password is Required");
  }
   if (empty($code)){
    array_push($errors, "Invitation Code is Required");
  }
  
  $querye="SELECT * FROM users where mail ='$mail'";
    $quere=mysqli_query($con,$querye);
  
  if(mysqli_num_rows($quere) > 0){
    array_push($errors, "Username already taken");
  }
  else{ 
  // if there are no errors , save user to database
  if (count($errors) == 0){
    $pass = md5($pass); //encrypt password before storing in database(security)
    $sql = "INSERT INTO users (mail, pass, secpass,code) VALUES ('$mail', '$pass', '$secpass','$code')";
    mysqli_query($con, $sql);
    echo "<script>alert('You are now registered.');</script>";
      echo "<script type='text/javascript'> document.location ='login.php'; </script>";
    
}

}
}


  //log user in
  if (isset($_POST['log'])) {
    $mail = mysqli_real_escape_string($con,$_POST['mail']);
  
    $pass = mysqli_real_escape_string($con,$_POST['pass']);

  //ensure that form fields are filled properly
  if (empty($mail)){
    array_push($errors, "Mail Box is Required");
  }
  if (empty($pass)){
    array_push($errors, "Password is Required");
  }
  if (count($errors) == 0) {
    $pass = md5($pass);//encrypt password before comparing with that from database
    $query = "SELECT * FROM users WHERE mail='$mail' AND pass='$pass'";
    $result = mysqli_query($con, $query);
    $row=mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 1){
      //logged in user
    $_SESSION['mail']=$mail;
    header('location: index.php');
    }
    else{
      array_push($errors, "Invalid Username/Password try again");
    }
  }


  }

  //logout
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }
     
?>







      