<?php 
include('../db.php'); 
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST['save'])){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $tagline=$_POST['tagline'];
  $dataFeather=$_POST['dataFeather'];
  $result=$con->query("UPDATE whatido SET title='$title', tagline='$tagline', dataFeather='$dataFeather' WHERE id=$id");
  if($result){
    echo "<script>alert('Updated'); </script>";
  }
}
if(isset($_POST['delete'])){
  $id=$_POST['id'];
  $result=$con->query("DELETE FROM whatido WHERE id=$id");
  if($result){
    echo "<script>alert('Deleted'); </script>";
  }
}
if(isset($_POST['addNew'])){
  $title=$_POST['title'];
  $tagline=$_POST['tagline'];
  $dataFeather=$_POST['dataFeather'];
  $result=$con->query("INSERT INTO whatido (title, tagline, datafeather) VALUES ('$title', '$tagline', '$dataFeather')");
  if($result){
    echo "<script>alert('Inserted'); </script>";
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
<div class="container">
<div class="form-content">
  <i><h1 class="topic-red">FEATURES/WHAT I DO?</h1></i><br><br>
  <?php
  $result=$con->query("SELECT * FROM whatido ORDER BY id");
  $i=0;
  while($row = $result->fetch_assoc()){
    $i++;
    echo "
    <form action='' method='post'>
    <input type='text' name='id' value='".$row["id"] ."' style='display:none'>
        <label for='telNo'>Title $i:</label>
        <input class='inpt' type='text' name='title' value='".$row["title"] ."' placeholder='Enter Title 1' maxlength='50'><br>
        <label for='telNo'>Tagline $i:</label>
        <input class='inpt' type='text' name='tagline' value='".$row["tagline"] ."' placeholder='Enter Tagline 1' maxlength='250'>
        <label for='telNo'>data-feather name $i:</label>
        <input class='inpt' type='text' name='dataFeather' value='".$row["dataFeather"] ."' placeholder='Enter Icon Box Name' maxlength='250'>
        <button type='submit' name='save' class='button'>
          <span class='button__text'>Save</span>
          <span class='button__icon'>
            <ion-icon name='cloud-download-outline'></ion-icon>
          </span>
        </button>
        <button type='submit' name='delete' style='background-color:red' class='button'>
          <span class='button__text'>Delete</span>
          <span class='button__icon'>
            <ion-icon name='cloud-download-outline'></ion-icon>
          </span>
        </button>
        </form>
        <br><br><br><br><br>
    ";
  }?>
  <form action="" method="post">
        <label for='telNo'>Title:</label>
        <input class='inpt' type='text' name='title' placeholder='Enter Title' maxlength='50'><br>
        <label for='telNo'>Tagline:</label>
        <input class='inpt' type='text' name='tagline' placeholder='Enter Tagline' maxlength='250'>
        <label for='telNo'>data-feather name:</label>
        <input class='inpt' type='text' name='dataFeather' placeholder='Enter Icon Box Name' maxlength='250'>
        <button type='submit' name='addNew' class='button'>
          <span class='button__text'>Add New</span>
          <span class='button__icon'>
            <ion-icon name='cloud-download-outline'></ion-icon>
          </span>
        </button>
  </form>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<br>
    </div>
    </div>
</body>
</html>