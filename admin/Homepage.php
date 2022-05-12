<?php
include("../db.php");
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $title = $_POST["title"];
  $des = $_POST["des"];
  $result=$con->query("UPDATE info SET name='$name', title='$title', description='$des' WHERE id=1");
  if($result){
    echo "<script>alert('Updated')</script>";
  }else{
    die ($con->error);
  }
  $profile=$_FILES["profile"];
  if(isset($profile["tmp_name"])){
    move_uploaded_file($profile["tmp_name"], "../assets/images/slider/shashikant.jpg");
  }
  $profile=$_FILES["nav"];
  if(isset($profile["tmp_name"])){
    move_uploaded_file($profile["tmp_name"], "../assets/images/logo/navbar.png");
  }
  $profile=$_FILES["tab"];
  if(isset($profile["tmp_name"])){
    move_uploaded_file($profile["tmp_name"], "../assets/images/logo/logo.png");
  }
}
$result= $con->query("SELECT * FROM info");
$info=$result->fetch_assoc();
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
</div>
<div class="topnav">
    <a class="active" href="Homepage.html">HomePage</a>
    <a href="contact.html">Contact</a>
    <a href="bestskill.html">Best Skill</a>
  </div>
  <div class="form-content">
    <i><h1 class="topic-green">HOMEPAGE</h1></i><br><br>
      <form action="" method="post" enctype="multipart/form-data">   
      
      <label for="username">
      Profile Name:
      </label>
<br>    
<input type="text" id="fname" name="name" width="50" value="<?php echo $info['name']; ?>" placeholder="Enter Your Profile Name" maxlength="50"><br>
<label for="username">
  Browser/title Name:
  </label>
<br>    
<input type="text" id="fname" name="title" width="50" value="<?php echo $info['title']; ?>" placeholder="Enter Your title Name" maxlength="50"><br>
<label for="telNo">Description:</label>
<input class="inpt" type="text" name="des" id="name" value="<?php echo $info['description']; ?>" placeholder="Description" maxlength="500">
<div class="dropdown">

    <br>
    <br>

    <label for="avatar">Choose a profile picture:</label>

    <input type="file" name="profile" id="inpFile">
    <div class="image-preview" id="imagePreview">
        
        <span class="image-preview__default-text"><img src="../assets/images/slider/shashikant.jpg" alt="Image Preview" style="display: block;" class="image-preview__image"></span></div>
        <br>


        <br>
       <label for="avatar">Choose a Browser Tab Image:</label>
       <input type="file" name="tab" id="inpfile">
       <div class="image-preview" id="imagepreview">
           <span class="image-preview__default-text">
           <img src="../assets/images/logo/logo.png" alt="Image Preview" style="display: block;" class="image-preview__image">
           </span></div>
           <br>


           <label for="avatar">Choose a Nav Bar Image:</label>
           <input type="file" name="nav" class="inpFile">
           <div class="image-preview" class="imagePreview">
               <span class="image-preview__default-text">
               <img src="../assets/images/logo/navbar.png" alt="Image Preview" style="display: block;" class="image-preview__image">
               </span></div>

       
               <button type="submit" class="button" name="submit">
    <span class="button__text">Save</span>
    <span class="button__icon">
      <ion-icon name="cloud-download-outline"></ion-icon>
    </span>
  </button>
</form><br>
<br>

  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<br>
</div>
  </div>
</div>
</div>
</body> 
<!-- <script>
  const inpFile = document.getElementById("inpFile");
  const previewContainer = document.getElementById("imagePreview");
  const previewImage = previewContainer.querySelector(".image-preview__image");
  const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

  inpFile.addEventListener("change", function(){
      const file = this.files[0];

      if (file) {
          const reader = new FileReader();

          previewDefaultText.style.display = "none";
          previewImage.style.display = "block";
          
          reader.addEventListener("load", function() {
              console.log(this);
              previewImage.setAttribute("src", this.result);
          });

          reader.readAsDataURL(file);
      }
  });
</script> -->

</html>