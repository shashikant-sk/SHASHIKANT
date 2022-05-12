<?php
include("../db.php");
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST["submit"])){
  $phone = $_POST["phone"];
  $fb = $_POST["fb"];
  $link = $_POST["link"];
  $email = $_POST["email"];
  $ig = $_POST["ig"];
  $result=$con->query("UPDATE contact SET phone='$phone', ig='$ig', fb='$fb', link='$link', email='$email' WHERE id=1");
  if($result){
    echo "<script>alert('Updated')</script>";
  }else{
    die ($con->error);
  }
}
$result= $con->query("SELECT * FROM contact");
$contact=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Panel</h2>
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
    <div class="main_content">
    </div>
</div>
<div class="topnav">
    <a class="active" href="Homepage.php">HomePage</a>
    <a href="contact.php">Contact</a>
    <a href="bestskill.html">Best Skill</a>
  </div>
  <div class="form-content">
  <div class="container">
    <i><h1 class="topic-red">CONTACT</h1></i><br><br>
    <form action="" method="POST">
        <label for="telNo">Phone number:</label>
        <input class="inpt" type="text" name="phone" value="<?php echo $contact['phone']; ?>" id="name" placeholder="Enter Your Contact Number" maxlength="250">
        <br>
        <label for="email">Email ID:</label>
        <input class="inpt" type="text" name="email" value="<?php echo $contact['email']; ?>" id="name" placeholder="Enter Your Email Address" maxlength="250">
        <label for="email">Facebook Link:</label>
        <input class="inpt" type="text" name="fb" value="<?php echo $contact['fb']; ?>" id="name" placeholder="Enter Your Facebook Link" maxlength="250">
        <label for="email">Linkedin:</label>  
        <input class="inpt" type="text" name="link" value="<?php echo $contact['link']; ?>" id="name" placeholder="Enter Your Linkedin Link" maxlength="250">
        <label for="email">Instagram ID:</label>  
        <input class="inpt" type="text" name="ig" value="<?php echo $contact['ig']; ?>" id="name" placeholder="Enter Your Instagram Link" maxlength="250">
        
    <button type="submit" name="submit" class="button">
        <span class="button__text">Save</span>
        <span class="button__icon">
          <ion-icon name="cloud-download-outline"></ion-icon>
        </span>
      </button>
    </form>
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </div>
  </div>
  </body>
  </html>