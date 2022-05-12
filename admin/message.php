<?php
include("../db.php");
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<style>
    .image-preview {
  width: 300px;
  min-height: 100px;
  border: 2px solid #fff;
  margin-top: 15px;

  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: #cccccc;
}
.image-preview__image{
  display:none;
  width: 100%;
}
.message-box{
  margin-left: 50%;
  color:white;
}
</style>
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
    <div class="main_content">
    </div>

    <div class="topnav">
      <a class="active" >client message's</a>
    </div>
  <?php
    if(isset($_REQUEST["page"])){
      $page = $_REQUEST["page"];
    }else{
      $page=0;
    }
    $messages = $con->query("Select * from message order by id desc limit 10 offset ".$page*10);
    while($message=$messages->fetch_assoc()){
      echo "
      <div class='message-box'>
      <b>Name:&emsp;</b>".$message["name"]."<br>
      <b>IP:&emsp;</b>".$message["ip"]."<br>
      <b>Time:&emsp;</b>".$message["time"]."<br>
      <b>Phone:&emsp;</b><a href='tel:".$message["phone"]."'>".$message["phone"]."</a><br>
      <b>Email:&emsp;</b><a href='mailto:".$message["email"]."'>".$message["email"]."</a><br>
      <b>Subject:&emsp;</b>".$message["subject"]."<br>
      <b>Message: </b><br>
      <code>".$message["message"]."</code>
      </div> 
      <hr>
      ";
    }
    if($page > 0){
      echo "<a href='message.php?page=".($page-1)."'><button id='prev'>Prev</button></a>";
    }
    if($con->query("SELECT * FROM message")->num_rows > ($page+1)*10){
      echo "<a href='message.php?page=".($page+1)."'><button id='next'>Next</button></a>";
    }
  ?>

</div>
  </body>
  </html>