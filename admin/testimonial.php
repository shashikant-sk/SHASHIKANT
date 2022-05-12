<?php 
include('../db.php'); 
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST['save'])){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $company=$_POST['company'];
  $name=$_POST['name'];
  $post=$_POST['post'];
  $duration=$_POST['duration'];
  $des=$_POST['des'];
  $evaluation=$_POST['evaluation'];
  $img=$con->query("SELECT * FROM testimonial WHERE id=$id")->fetch_assoc()["img"];
  if($_FILES['inpFile']['tmp_name']!=""){
    unlink("../assets/images/testimonial/$img");
    $image = time().$_FILES['inpFile']['name'];
    move_uploaded_file($_FILES['inpFile']['tmp_name'], "../assets/images/testimonial/$image");
  }else{
    $image = $img;
  }
  $result=$con->query("UPDATE testimonial SET title='$title', name='$name', company='$company', post='$post', duration='$duration', des='$des', evaluation='$evaluation', img='$image' WHERE id=$id");
  if($result){
    echo "<script>alert('Updated'); </script>";
  }
}
if(isset($_POST['delete'])){
  $id=$_POST['id'];
  $img=$con->query("SELECT * FROM testimonial WHERE id=$id")->fetch_assoc()["img"];
  unlink("../assets/images/testimonial/$img");
  $result=$con->query("DELETE FROM testimonial WHERE id=$id");
  if($result){
    echo "<script>alert('Deleted'); </script>";
  }
}
if(isset($_POST['addNew'])){
  $title=$_POST['title'];
  $company=$_POST['company'];
  $name=$_POST['name'];
  $post=$_POST['post'];
  $duration=$_POST['duration'];
  $des=$_POST['des'];
  $evaluation=$_POST['evaluation'];
  $image = time().$_FILES['inpFile']['name'];
  move_uploaded_file($_FILES['inpFile']['tmp_name'],'../assets/images/testimonial/'.$image);
  $result=$con->query("INSERT INTO `testimonial` (`company`, `name`, `post`, `title`, `duration`, `des`, `img`, `evaluation`) VALUES ('$company', '$name', '$post', '$title', '$duration', '$des', '$image', '$evaluation')");
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
<div class="form-content">  
  <i><h1 class="topic-green">TESTIMONIAL</h1></i><br><br>
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="avatar">Choose The Image:</label>

    <input type="file" name="inpFile" id="inpFile">
    <div class="image-preview" id="imagePreview">
        <img src="" alt="Image Preview" class="image-preview__image">
        <span class="image-preview__default-text">Image Preview</span></div><br>
    <label for="telNo">Company Name:</label>
    <input class="inpt form-box" type="text" name="company" id="name" placeholder="Enter Name of the Company " maxlength="50"><br>
    <label for="telNo">Person Name:</label>
    <input class="inpt" type="text" name="name" id="name" placeholder="Enter Name of the Person" maxlength="250">
    <label for="telNo">Position:</label>
    <input class="inpt" type="text" name="post" id="post" placeholder="Enter The Position of the Person" maxlength="250">
    <label for="telNo">Project Name:</label>
    <input class="inpt" type="text" name="title" id="title" placeholder="Enter The Respective Project" maxlength="250">
    <label for="telNo">Duration:</label>
    <input class="inpt" type="text" name="duration" id="duration" placeholder="Enter The Duration of that Project" maxlength="250">
    <label for="telNo">Description:</label>
    <input class="inpt" type="text" name="des" id="des" placeholder="Add some details regarding the Title" maxlength="250">
        <button class="dropbtn">Self Evaluation</button>
        <select name="evaluation">
          <option href="#">⭐</option>
          <option href="#">⭐⭐</option>
          <option href="#">⭐⭐⭐</option>
          <option href="#">⭐⭐⭐⭐</option>
          <option href="#">⭐⭐⭐⭐⭐</option>
        </select><br><br>
        <button type="submit" name="addNew" class="button">
            <span class="button__text">Add</span>
            <span class="button__icon">
              <ion-icon name="cloud-download-outline"></ion-icon>
            </span>
            <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br><br>
          </button><br><br>
          </form>

          <table class="styled-table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Company Name</th>
                    <th>Person Name </th>
                    <th>Position </th>
                    <th>Project Name </th>
                    <th>Duration Name </th>
                    <th>Description </th>
                    <th>Self-Evaluation </th>
                    <th>Images </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $result=$con->query("SELECT * FROM testimonial");
            $i=0;
            while($row=$result->fetch_assoc()){
              $i++;
              echo "
              <tr>
  <form action='' method='POST' enctype='multipart/form-data'>
      <td>$i <input type='text' name='id' value='".$row["id"]."' style='display: none;'> </td>
      <td><input type='text' name='company' value='".$row["company"]."'></td>
      <td><input type='text' name='name' value='".$row["name"]."'></td>
      <td><input type='text' name='post' value='".$row["post"]."'></td>
      <td><input type='text' name='title' value='".$row["title"]."'></td>
      <td><input type='text' name='duration' value=".$row["duration"]."''></td>
      <td><input type='text' name='des' value='".$row["des"]."'></td>
      <td><select name='evaluation'>
<option selected='selected'>".$row["evaluation"]."</option>
<option href='#'>⭐</option>
<option href='#'>⭐⭐</option>
<option href='#'>⭐⭐⭐</option>
<option href='#'>⭐⭐⭐⭐</option>
<option href='#'>⭐⭐⭐⭐⭐</option>
      </select></td>
      <td><img src='../assets/images/testimonial/".$row["img"]."'><br><input type='file' name='inpFile'></td>
      <td><button type='submit' name='save' class='button'>
          <span class='button__text'>Save</span>
          <span class='button__icon'>
            <ion-icon name='cloud-download-outline'></ion-icon>
          </span>
      </button><br>
      <button type='submit' name='delete' class='button-Delete'>
          <span class='button__text'>Delete</span>
          <span class='button__icon'>
            <ion-icon name='cloud-download-outline'></ion-icon>
          </span><br><br><br>
          </button>
  </td>
  </form>
  </tr>

              ";
            }
            ?>
          </tbody>
        </table>
</div>
</body>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br><br>
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