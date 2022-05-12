<?php 
include('../db.php'); 
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST['save'])){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $tagline=$_POST['tagline'];
  $link=$_POST['link'];
  $img=$con->query("SELECT * FROM portfolio WHERE id=$id")->fetch_assoc()["image"];
  if($_FILES['inpFile']['tmp_name']!=""){
    unlink("../assets/images/portfolio/$img");
    $image = time().$_FILES['inpFile']['name'];
    move_uploaded_file($_FILES['inpFile']['tmp_name'], "../assets/images/portfolio/$image");
  }else{
    $image = $img;
  }
  $result=$con->query("UPDATE portfolio SET title='$title', tagline='$tagline', link='$link', image='$image' WHERE id=$id");
  if($result){
    echo "<script>alert('Updated'); </script>";
  }
}
if(isset($_POST['delete'])){
  $id=$_POST['id'];
  $img=$con->query("SELECT * FROM portfolio WHERE id=$id")->fetch_assoc()["image"];
  unlink("../assets/images/portfolio/$img");
  $result=$con->query("DELETE FROM portfolio WHERE id=$id");
  if($result){
    echo "<script>alert('Deleted'); </script>";
  }
}
if(isset($_POST['addNew'])){
  $title=$_POST['title'];
  $tagline=$_POST['tagline'];
  $link=$_POST['link'];
  $image = time().$_FILES['inpFile']['name'];
  move_uploaded_file($_FILES['inpFile']['tmp_name'],'../assets/images/portfolio/'.$image);
  $result=$con->query("INSERT INTO portfolio (title, tagline, link, image) VALUES ('$title', '$tagline', '$link', '$image')");
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
    <div class = "form-content">
      <i><h1 class="topic-green">My PORTFOLIO</h1></i><br><br>
<?php 
$result=$con->query("SELECT * FROM portfolio ORDER BY id");
$i=0;
while($row=$result->fetch_assoc()){
  $i++;
  echo"
      <form action='' method='POST' enctype='multipart/form-data'>
      <input value='".$row['id']."' name='id' style='display:none;'>
      <label for='avatar'>Choose Image no $i:</label>

<input type='file' name='inpFile' id='inpFile'>
<div class='image-preview' id='imagePreview'>
    <span class='image-preview__default-text'>
    <img src='../assets/images/portfolio/".$row["image"]."' style='display:block' alt='Image Preview' class='image-preview__image'>
    </span></div>
    <br>
    <label for='telNo'>Title $i:</label>
    <input class='inpt' type='text' value='".$row['title']."' name='title' id='name' placeholder='Enter Title $i' maxlength='50'><br>
    <label for='telNo'>Tagline $i:</label>
    <input class='inpt' type='text' name='tagline' value='".$row['tagline']."' id='tagline' placeholder='Enter Tagline $i' maxlength='250'>
    <label for='telNo'>Link $i:</label>
    <input class='inpt' type='text' name='link' id='name' value='".$row['link']."' placeholder='Enter Your Preferable Link' maxlength='250'>
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
    <br><br><br><br><br>
      </form>
      ";
}
?>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        <form action="" enctype="multipart/form-data" method="POST">
        <label for="avatar">Choose Image:</label>
        <input type="file" name="inpFile" id="inpFile" required>
            <div class="image-preview" id="imagePreview">
                <img src="" alt="Image Preview" class="image-preview__image">
                <span class="image-preview__default-text">Image Preview</span></div>
                <br>
            <label for="telNo">Title:</label>
            <input class="inpt" type="text" name="title" id="name" placeholder="Enter Title" maxlength="50" required><br>
            <label for="telNo">Tagline:</label>
            <input class="inpt" type="text" name="tagline" id="name" placeholder="Enter Tagline" maxlength="250" required>
            <label for="telNo">Link :</label>
            <input class="inpt" type="text" name="link" id="name" placeholder="Enter Your Preferable Link" maxlength="250" required>
            <button type="submit" name="addNew" class="button">
                <span class="button__text">Add New</span>
                <span class="button__icon">
                  <ion-icon name="cloud-download-outline"></ion-icon>
                </span>
              </button>
              <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
            <br><br><br><br><br>
            </form>
    </div>
</div>
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