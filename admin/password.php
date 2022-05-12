<?php
include("../db.php");
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST["change"])){
  $uname= $_COOKIE["uname"];
  if($con->query("SELECT * FROM users WHERE uname='$uname' and password='".$_POST["current"]."'")->fetch_assoc()){
    $con->query("UPDATE users set password = '".$_POST["new"]."' where uname='$uname'");
    echo "<script>alert('updated'); </script>";
  }else{
    echo "<script>alert('Incorrect Password'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
   

</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2 >Admin Panel</h2>
        <ul>    
        <li><a href="Homepage.php"><i class="fas fa-home"></i>HomePage</a></li>
            <li><a href="features.php"><i class="fas fa-stroopwafel fa-spin"></i>Features/What I Do</a></li>
            <li><a href="portfolio.php"><i class="fas fa-project-diagram"></i>portfolio</a></li>
            <li><a href="resume.php"><i class="fas fa-address-card"></i>My Resume</a></li>
            <li><a href="testimonial.php"><i class="fas fa-blog"></i>Testimonial</a></li>
            <li><a href="pricing.php"><i class="fas fa-address-book"></i>My pricing</a></li>
            <li><a href="blog.php"><i class="fas fa-map-pin"></i>My Blog</a></li>
            <li><a href="message.php"><i class="fas fa-sms"></i>Veiw Message</a></li>
            <li><a href="password.php"><i class="fas fa-address-card"></i>Password Change</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-spin"></i>LOGOUT</a></li>
        </ul> 
        <div class="social_media"></div>
      </div>
    </div>
   
   <div class="form-content">
       <div class="container">
        <form action="" method="post">
<label for="pwd"><h3>Current Password:</h3> </label><br><br>
<input class="inpt" type="password" name="current" id="name" placeholder="Current Password" maxlength="250" size="40" required>
<br><br><br><br>
<label for="pwd"><h3>New Password:</h3> </label><br><br>
<input onkeyup="check()" class="inpt" type="password" name="new" placeholder="New Password" id='new' maxlength="250" size="40" required>
<br><br><br><br>
<label for="pwd"><h3>Confirm Password:</h3> </label><br><br>
<input onkeyup="check()" class="inpt" type="password" name="rnew" placeholder="Confirm Password" id='rnew' maxlength="250" size="40" required>

<br>
<br><br><br>
<button type="submit" name="change" id='submit' class="button">
    <span class="button__text">Change</span>
    <span class="button__icon">
      <ion-icon name="cloud-download-outline"></ion-icon>
    </span>
  </button>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</form>

</div>
</div>
</body>
<script>
  function check(){
    var n = document.getElementById("new").value;
    var r = document.getElementById("rnew").value;
    if(n==r){
      document.getElementById("submit").setAttribute('type','submit');
    }else{
      document.getElementById("submit").setAttribute('type','button');
    }
  }
</script>

</html>