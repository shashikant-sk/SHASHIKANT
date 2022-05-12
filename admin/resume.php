<?php 
include('../db.php'); 
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST['save'])){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $clgName=$_POST['clgName'];
  $des=$_POST["des"];
  $evaluation=$_POST['evaluation'];
  // $img=$con->query("SELECT * FROM education WHERE id=$id")->fetch_assoc()["image"];
  // if($_FILES['inpFile']['tmp_name']!=""){
  //   unlink("../assets/images/portfolio/$img");
  //   $image = time().$_FILES['inpFile']['name'];
  //   move_uploaded_file($_FILES['inpFile']['tmp_name'], "../assets/images/portfolio/$image");
  // }else{
  //   $image = $img;
  // }
  $result=$con->query("UPDATE education SET title='$title', clgName='$clgName', des='$des', evaluation='$evaluation' WHERE id=$id");
  if($result){
    echo "<script>alert('Updated'); </script>";
  }
}
if(isset($_POST['delete'])){
  $id=$_POST['id'];
  // $img=$con->query("SELECT * FROM ed WHERE id=$id")->fetch_assoc()["image"];
  // unlink("../assets/images/portfolio/$img");
  $result=$con->query("DELETE FROM education WHERE id=$id");
  if($result){
    echo "<script>alert('Deleted'); </script>";
  }
}
if(isset($_POST['addNew'])){
  $title=$_POST['title'];
  $clgName=$_POST['clgName'];
  $des=$_POST["des"];
  $evaluation=$_POST['evaluation'];
  // $image = time().$_FILES['inpFile']['name'];
  // move_uploaded_file($_FILES['inpFile']['tmp_name'],'../assets/images/portfolio/'.$image);
  $result=$con->query("INSERT INTO education (title, clgName, des, evaluation) VALUES ('$title', '$clgName', '$des', '$evaluation')");
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
    <a class="active" href="resume.html">Education</a>
    <a href="skill.html">Skill</a>
    <a href="experience.html">Experience</a>
  </div>
  <div class="form-content">
    <i><h1 class="topic-red">EDUCATION</h1></i><br><br>
    <?php 
$result=$con->query("SELECT * FROM education ORDER BY id");
$i=0;
while($row=$result->fetch_assoc()){
  $i++;
  echo"
  <form action='' method='POST'>
  <input name='id' value='".$row["id"]."' style='display:none' readonly>
  <label for='telNo'>Title:</label>
  <input class='inpt form-box' type='text' name='title' value='".$row["title"]."' placeholder='Enter Title ' maxlength='50'><br>
  <label for='telNo'>College Name:</label>
  <input class='inpt' type='text' name='clgName' value='".$row["clgName"]."' placeholder='Enter Your College Name' maxlength='250'>
  <label for='telNo'>Description:</label>
  <input class='inpt' type='text' name='des' value='".$row["des"]."' placeholder='Add some details regarding the Title' maxlength='250'>
  <div class='dropdown'>
    <button class='dropbtn'>Self Evaluation</button>
    <!-- <div class='dropdown-content'> -->
      <select name='evaluation' id='' value='".$row["evaluation"]."'>
      <option href='#'>⭐</option>
      <option href='#'>⭐⭐</option>
      <option href='#'>⭐⭐⭐</option>
      <option href='#'>⭐⭐⭐⭐</option>
      <option href='#'>⭐⭐⭐⭐⭐</option>
      <option selected='selected'>".$row["evaluation"]."</option>
      </select>
      </div>
    <!-- </div> -->
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
    <form action="" method="POST">
    <label for="telNo">Title:</label>
    <input class="inpt form-box" type="text" name="title" id="name" placeholder="Enter Title " maxlength="50"><br>
    <label for="telNo">College Name:</label>
    <input class="inpt" type="text" name="clgName" placeholder="Enter Your College Name" maxlength="250">
    <label for="telNo">Description:</label>
    <input class="inpt" type="text" name="des" placeholder="Add some details regarding the Title" maxlength="250">
    <div class="dropdown">
      <button class="dropbtn">Self Evaluation</button>
      <!-- <div class="dropdown-content"> -->
        <select name="evaluation" id="">
        <option href="#">⭐</option>
        <option href="#">⭐⭐</option>
        <option href="#">⭐⭐⭐</option>
        <option href="#">⭐⭐⭐⭐</option>
        <option href="#">⭐⭐⭐⭐⭐</option>
        </select>
        </div>
      <!-- </div> -->
   <br><br>
<button type="submit" name="addNew" class="button">
  <span class="button__text">Add New</span>
  <span class="button__icon">
    <ion-icon name="cloud-download-outline"></ion-icon>
  </span>
</button>
</form>
<script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br>
      </div>
    </div>
    </div>

    <!-- <div class="form-content">
      <label for="telNo">Title:</label>
      <input class="inpt form-box" type="text" name="Name" id="name" placeholder="Enter Title " maxlength="50"><br>
      <label for="telNo">College Name:</label>
      <input class="inpt" type="text" name="Name" id="name" placeholder="Enter Your College Name" maxlength="250">
      <label for="telNo">Description:</label>
      <input class="inpt" type="text" name="Name" id="name" placeholder="Add some details regarding the Title" maxlength="250">
      <div class="dropdown">
        <button class="dropbtn">Self Evaluation</button>
        <div class="dropdown-content">
          <a href="#">⭐</a>
          <a href="#">⭐⭐</a>
          <a href="#">⭐⭐⭐</a>
          <a href="#">⭐⭐⭐⭐</a>
          <a href="#">⭐⭐⭐⭐⭐</a>
        </div></div><br><br>
        <button type="button" class="button">
          <span class="button__text">Save</span>
          <span class="button__icon">
            <ion-icon name="cloud-download-outline"></ion-icon>
          </span>
        </button>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br>
        </div>
      </div>
      </div>

      <div class="form-content">
        <label for="telNo">Title:</label>
        <input class="inpt form-box" type="text" name="Name" id="name" placeholder="Enter Title " maxlength="50"><br>
        <label for="telNo">College Name:</label>
        <input class="inpt" type="text" name="Name" id="name" placeholder="Enter Your College Name" maxlength="250">
        <label for="telNo">Description:</label>
        <input class="inpt" type="text" name="Name" id="name" placeholder="Add some details regarding the Title" maxlength="250">
        <div class="dropdown">
          <button class="dropbtn">Self Evaluation</button>
          <div class="dropdown-content">
            <a href="#">⭐</a>
            <a href="#">⭐⭐</a>
            <a href="#">⭐⭐⭐</a>
            <a href="#">⭐⭐⭐⭐</a>
            <a href="#">⭐⭐⭐⭐⭐</a>
          </div></div><br><br>
          <button type="button" class="button">
            <span class="button__text">Save</span>
            <span class="button__icon">
              <ion-icon name="cloud-download-outline"></ion-icon>
            </span>
          </button>
          <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br>
          </div>
        </div>
        </div>

        <div class="form-content">
          <label for="telNo">Title:</label>
          <input class="inpt form-box" type="text" name="Name" id="name" placeholder="Enter Title " maxlength="50"><br>
          <label for="telNo">College Name:</label>
          <input class="inpt" type="text" name="Name" id="name" placeholder="Enter Your College Name" maxlength="250">
          <label for="telNo">Description:</label>
          <input class="inpt" type="text" name="Name" id="name" placeholder="Add some details regarding the Title" maxlength="250">
          <div class="dropdown">
            <button class="dropbtn">Self Evaluation</button>
            <div class="dropdown-content">
              <a href="#">⭐</a>
              <a href="#">⭐⭐</a>
              <a href="#">⭐⭐⭐</a>
              <a href="#">⭐⭐⭐⭐</a>
              <a href="#">⭐⭐⭐⭐⭐</a>
            </div></div><br><br>
            <button type="button" class="button">
              <span class="button__text">Save</span>
              <span class="button__icon">
                <ion-icon name="cloud-download-outline"></ion-icon>
              </span>
            </button>
            <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br>
            </div>
          </div>
          </div>

          <div class="form-content">
            <label for="telNo">Title:</label>
            <input class="inpt form-box" type="text" name="Name" id="name" placeholder="Enter Title " maxlength="50"><br>
            <label for="telNo">College Name:</label>
            <input class="inpt" type="text" name="Name" id="name" placeholder="Enter Your College Name" maxlength="250">
            <label for="telNo">Description:</label>
            <input class="inpt" type="text" name="Name" id="name" placeholder="Add some details regarding the Title" maxlength="250">
            <div class="dropdown">
              <button class="dropbtn">Self Evaluation</button>
              <div class="dropdown-content">
                <a href="#">⭐</a>
                <a href="#">⭐⭐</a>
                <a href="#">⭐⭐⭐</a>
                <a href="#">⭐⭐⭐⭐</a>
                <a href="#">⭐⭐⭐⭐⭐</a>
              </div>
              </div><br><br>
              <button type="button" class="button">
                <span class="button__text">Save</span>
                <span class="button__icon">
                  <ion-icon name="cloud-download-outline"></ion-icon>
                </span>
              </button>
              <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br>
              </div>
            </div><br><br>
            </div> -->
  </div>
  </body>
   </html>