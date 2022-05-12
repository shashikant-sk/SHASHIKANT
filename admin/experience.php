<?php 
include('../db.php'); 
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST['save'])){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $cmpName=$_POST['cmpName'];
  $des=$_POST["des"];
  $evaluation=$_POST['evaluation'];
  // $img=$con->query("SELECT * FROM expirence WHERE id=$id")->fetch_assoc()["image"];
  // if($_FILES['inpFile']['tmp_name']!=""){
  //   unlink("../assets/images/portfolio/$img");
  //   $image = time().$_FILES['inpFile']['name'];
  //   move_uploaded_file($_FILES['inpFile']['tmp_name'], "../assets/images/portfolio/$image");
  // }else{
  //   $image = $img;
  // }
  $result=$con->query("UPDATE expirence SET title='$title', cmpName='$cmpName', des='$des', evaluation='$evaluation' WHERE id=$id");
  if($result){
    echo "<script>alert('Updated'); </script>";
  }
}
if(isset($_POST['delete'])){
  $id=$_POST['id'];
  // $img=$con->query("SELECT * FROM ed WHERE id=$id")->fetch_assoc()["image"];
  // unlink("../assets/images/portfolio/$img");
  $result=$con->query("DELETE FROM expirence WHERE id=$id");
  if($result){
    echo "<script>alert('Deleted'); </script>";
  }
}
if(isset($_POST['addNew'])){
  $title=$_POST['title'];
  $cmpName=$_POST['cmpName'];
  $des=$_POST["des"];
  $evaluation=$_POST['evaluation'];
  // $image = time().$_FILES['inpFile']['name'];
  // move_uploaded_file($_FILES['inpFile']['tmp_name'],'../assets/images/portfolio/'.$image);
  $result=$con->query("INSERT INTO expirence (title, cmpName, des, evaluation) VALUES ('$title', '$cmpName', '$des', '$evaluation')");
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
</div>
<div class="topnav">
    <a class="active" href="resume.html">expirence</a>
    <a href="skill.html">Skill</a>
    <a href="experience.html">Experience</a>
  </div>

  <div class="form-content">
    <div class="container">
      <i><h1 class="topic-red">MY EXPERIENCE</h1></i><br><br>
      <?php 
$result=$con->query("SELECT * FROM expirence ORDER BY id");
$i=0;
while($row=$result->fetch_assoc()){
  $i++;
  echo"
  <form action='' method='POST'>
  <input name='id' value='".$row["id"]."' style='display:none'>
  <label for='telNo'>Job Name:</label>
  <input class='inpt' type='text' name='title' value='".$row["title"]."' id='name' placeholder='Enter The name of your Job' maxlength='250'>
  <br>
  <label for='email'>Company Name:</label>
  <input class='inpt' type='text' name='cmpName' value='".$row["cmpName"]."' id='name' placeholder='Enter The Company you are working in' maxlength='250'>
  <label for='email'>Description:</label>
  <input class='inpt' type='text' name='des' id='name' value='".$row["des"]."' placeholder='Enter Further Details Regarding the same' maxlength='250'>
   <div class='dropdown'>
    <button class='dropbtn'>Self Evaluation</button>
    <select name='evaluation'>
      <option href='#'>⭐</option>
      <option href='#'>⭐⭐</option>
      <option href='#'>⭐⭐⭐</option>
      <option href='#'>⭐⭐⭐⭐</option>
      <option href='#'>⭐⭐⭐⭐⭐</option>
      <option selected='selected'>".$row["evaluation"]."</option>
    </select></div>
 <br><br>
 <br><br>
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
</form><br><br>
";
}
?>
<hr><hr><br><br>
<form action='' method="post">
  <label for='telNo'>Job Name:</label>
  <input class='inpt' type='text' name='title' id='name' placeholder='Enter The name of your Job' maxlength='250'>
  <br>
  <label for='email'>Company Name:</label>
  <input class='inpt' type='text' name='cmpName' id='name' placeholder='Enter The Company you are working in' maxlength='250'>
  <label for='email'>Description:</label>
  <input class='inpt' type='text' name='des' id='name' placeholder='Enter Further Details Regarding the same' maxlength='250'>
   <div class='dropdown'>
    <button class='dropbtn'>Self Evaluation</button>
    <select name="evaluation">
      <option href='#'>⭐</option>
      <option href='#'>⭐⭐</option>
      <option href='#'>⭐⭐⭐</option>
      <option href='#'>⭐⭐⭐⭐</option>
      <option href='#'>⭐⭐⭐⭐⭐</option>
    </select></div>
 <br><br>
   <br><br>
<button type="submit" name="addNew" class="button">
  <span class="button__text">Add New</span>
  <span class="button__icon">
    <ion-icon name="cloud-download-outline"></ion-icon>
  </span>
</button>
</form>
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
    </div>
    </div>
</body>
</html>