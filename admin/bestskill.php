<?php
include("../db.php");
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST["submit"])){
  $link1 = $_POST["link1"];
  $link2 = $_POST["link2"];
  $link3 = $_POST["link3"];
  $result=$con->query("UPDATE bestskills SET link1='$link1', link2='$link2', link3='$link3' WHERE id=1");
  if($result){
    echo "<script>alert('Updated')</script>";
  }else{
    die ($con->error);
  }
  $profile=$_FILES["img1"];
  if(isset($profile["tmp_name"])){
    move_uploaded_file($profile["tmp_name"], "../assets/images/bestskills/img1.png");
  }
  $profile=$_FILES["img2"];
  if(isset($profile["tmp_name"])){
    move_uploaded_file($profile["tmp_name"], "../assets/images/bestskills/img2.png");
  }
  $profile=$_FILES["img3"];
  if(isset($profile["tmp_name"])){
    move_uploaded_file($profile["tmp_name"], "../assets/images/bestskills/img3.png");
  }
}
$result= $con->query("SELECT * FROM bestskills");
$info=$result->fetch_assoc();
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
    <a class="active" href="Homepage.html">HomePage</a>
    <a href="contact.html">Contact</a>
    <a href="bestskill.html">Best Skill</a>
  </div>
  <div class="form-content">
    <i><h1 class="topic-green">BESTSKILLS</h1></i><br><br>
  <div>
    
  <form action="" method="Post" enctype="multipart/form-data">
    <label for="avatar">Choose your First Image:</label>

    <input type="file" name="img1" id="inpFile">
    <div class="image-preview" id="imagePreview">
           <span class="image-preview__default-text">           
             <img src="../assets/images/bestskills/img1.png" alt="Image Preview"  style='display:block' class="image-preview__image">
</span></div>
        <br>
        <label for="telNo">Link 1:</label>
        <input class="inpt" type="text" name="link1" value="<?php echo $info['link1']; ?>" id="name" placeholder="Enter Your 1st Preferable Link" maxlength="250">
        <br>
       <label for="avatar">Choose your Second Image:</label>
       <input type="file" name="img2" id="inpFile">
       <div class="image-preview" id="imagePreview">
           <span class="image-preview__default-text">           
             <img src="../assets/images/bestskills/img2.png" alt="Image Preview"  style='display:block' class="image-preview__image">
</span></div>
           <br>
           <label for="telNo">Link 2:</label>
           <input class="inpt" type="text" name="link2" id="name" value="<?php echo $info['link2']; ?>" placeholder="Enter Your 2nd Preferable Link" maxlength="250">
           <br>
           <label for="avatar">Choose your Third Image:</label>
           <input type="file" name="img3" id="inpFile">
           <div class="image-preview" id="imagePreview">
           <span class="image-preview__default-text">           
             <img src="../assets/images/bestskills/img3.png" alt="Image Preview" style='display:block' class="image-preview__image">
</span></div>
               <label for="telNo">Link 3:</label>
               <input class="inpt" type="text" name="link3" id="name" value="<?php echo $info['link3']; ?>" placeholder="Enter Your 3rd Preferable Link" maxlength="250">
               <br>

           </div>
  <button type="submit" name="submit" class="button">
    <span class="button__text">Save</span>
    <span class="button__icon">
      <ion-icon name="cloud-download-outline"></ion-icon>
    </span>
  </form>
  <br><br>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <br>
  <br>
  </body>
  <script>
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
</script>
  </html>   