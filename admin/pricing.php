<?php
include("../db.php");
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_REQUEST["type"])){
  $type=$_REQUEST["type"];
}else{
  $type="static";
}
if(isset($_POST["update"])){
  $title=$_POST["title"];
  $subTitle=$_POST["subTitle"];
  $price=$_POST["price"];
  $des=$_POST["des"];
  if($con->query("UPDATE pricing SET title='$title', subTitle='$subTitle', price='$price', des='$des' where type='$type'")){
    echo "<script>alert('updated');</script>";
  }else{
    echo $con->error;
  }
}
if(isset($_POST["save"])){
  $id=$_POST["id"];
  $point=$_POST["point"];
  if($con->query("UPDATE keypoints SET point='$point' where id='$id'")){
    echo "<script>alert('saved');</script>";
  }else{
    echo $con->error;
  }
}
if(isset($_POST["delete"])){
  $id=$_POST["id"];
  if($con->query("Delete from keypoints where id='$id'")){
    echo "<script>alert('Deleted');</script>";
  }else{
    echo $con->error;
  }
}
if(isset($_POST["addNew"])){
  $point=$_POST["point"];
  if($con->query("INSERT INTO keypoints (point, type) VALUES ('$point', '$type')")){
    echo "<script>alert('Inserted');</script>";
  }else{
    echo $con->error;
  }
}
$info=$con->query("Select * from pricing where type='$type'")->fetch_assoc();
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
    <a href="pricing.php?type=static">Static</a>
    <a href="pricing.php?type=standard">Standard</a>
    <a href="pricing.php?type=premimum">Premium</a>
  </div>
  <div class="static">
    <i><h1 class="topic-red">MY STATIC PRICING</h1></i><br><br>
  <form action="" method="POST">
    <label for="telNo">Title:</label>
    <input class="inpt" type="text" value="<?php echo $info["title"]; ?>" name="title" placeholder="Enter The Title" maxlength="50">
    <br>
    <label for="telNo">Sub Title:</label>
    <input class="inpt" type="text" value="<?php echo $info["subTitle"]; ?>" name="subTitle" placeholder="Enter The Sub-Title" maxlength="50">
    <br>
    <label for="telNo">Description:</label>
    <input class="inpt" type="text" name="des" value="<?php echo $info["des"]; ?>" placeholder="Enter The Further Details" maxlength="250">
    <br>
    <label for="telNo">Pricing Box:</label>
    <input class="inpt" type="text" name="price"  value="<?php echo $info["price"]; ?>" placeholder="Enter Your Static Price" maxlength="250">
    <br>

    <button type="submit" name="update" class="button">
      <span class="button__text">Update</span>
      <span class="button__icon">
        <ion-icon name="cloud-download-outline"></ion-icon>
      </span>
    </button>
    </form>
    </div>
    <div class="keypoints">
      <label for="telNo">Keypoints:</label>
      <?php
      $result=$con->query("Select * from keypoints where type='$type'");
      while($row=$result->fetch_assoc()){
        echo "
        <form method='post'>
        <input name='id' style='display:none' value='".$row["id"]."'>
        <input class='inpt' type='text' name='point' value='".$row["point"]."' placeholder='Enter Keypoint' maxlength='250'>
        <button type='submit' name='save' class='button'>
        <span class='button__text'>Save</span>
        <span class='button__icon'>
          <ion-icon name='cloud-download-outline'></ion-icon>
        </span>
      </button>
      <button type='submit' name='delete' class='button'>
      <span class='button__text'>Delete</span>
      <span class='button__icon'>
        <ion-icon name='cloud-download-outline'></ion-icon>
      </span>
    </button>
    </form>
        <br>
        ";
      }
    ?>
    <form method='post'>
        <input class='inpt' type='text' name='point' value='".$row["point"]."' placeholder='Enter Keypoint' maxlength='250'>
        <button type='submit' name='addNew' class='button'>
        <span class='button__text'>Save</span>
        <span class='button__icon'>
          <ion-icon name='cloud-download-outline'></ion-icon>
        </span>
      </button>
    </form>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br>
  
    </div>
</body>
</html>