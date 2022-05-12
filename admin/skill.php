<?php 
include('../db.php'); 
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
if(isset($_POST['save'])){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $value=$_POST['value'];
  $result=$con->query("UPDATE skills SET name='$name', value='$value' WHERE id=$id");
  if($result){
    echo "<script>alert('Updated'); </script>";
  }
}
if(isset($_POST['delete'])){
  $id=$_POST['id'];
  $result=$con->query("DELETE FROM skills WHERE id=$id");
  if($result){
    echo "<script>alert('Deleted'); </script>";
  }
}
if(isset($_POST['addNew'])){
  $type=$_POST['type'];
  $name=$_POST['name'];
  $value=$_POST['value'];
  $result=$con->query("INSERT INTO skills (name, value, type) VALUES ('$name', '$value', '$type')");
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
    <a class="active" href="resume.html">Education</a>
    <a href="skill.html">Skill</a>
    <a href="experience.html">Experience</a>
  </div>
  <div class="form-content">  
    <i><h1 class="topic-green">DESIGN SKILL</h1></i><br><br>
    <?php 
$result=$con->query("SELECT * FROM skills where type='0' ORDER BY id");
while($row=$result->fetch_assoc()){
  echo"
  <form action='' method='post'>
  <input value='".$row["id"]."' name='id' style='display:none'>
  <label for='telNo'>Design Skill Name:</label>
  <input class='inpt form-box' type='text' name='name' id='name' value='".$row["name"]."' placeholder='Enter Your Design Skill ' maxlength='50'><br>
  <label for='telNo'>Value %:</label>
  <input class='inpt form-box' type='text' name='value' id='name' value='".$row["value"]."' placeholder='Specify Your self-evaluated % ' maxlength='50'><br>
  
 <button type='submit' class='button' name='save'>
 <span class='button__text'>Update</span>
 <span class='button__icon'>
   <ion-icon name='cloud-download-outline'></ion-icon>
 </span>
 <script src='https://unpkg.com/ionicons@5.4.0/dist/ionicons.js'></script><br><br><br>
</button><br><br>
<button type='submit' class='button' name='delete' style='background-color:red'>
         <span class='button__text'>Delete</span>
         <span class='button__icon'>
           <ion-icon name='cloud-download-outline'></ion-icon>
         </span>
         <script src='https://unpkg.com/ionicons@5.4.0/dist/ionicons.js'></script><br><br><br>
       </button><br><br>
      </form>
";
}
?>
<br><br>
<form action="" method="$_POST">
        <label for="telNo">Design Skill Name:</label>
  <input value='0' name='type' style='display:none'>
        <input class="inpt form-box" type="text" name="name" id="name" placeholder="Enter Your Development Skill " maxlength="50"><br>
        <label for="telNo">Value %:</label>
        <input class="inpt form-box" type="text" name="value" id="name" placeholder="Specify Your self-evaluated % " maxlength="50"><br>
        
       <button type="button" class="button" name='addNew'>
                <span class="button__text">AddNew</span>
                <span class="button__icon">
                  <ion-icon name="cloud-download-outline"></ion-icon>
                </span>
                <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br><br>
              </button><br><br>
              </form><br><br>
          <!-- <table class="styled-table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Design Skill Name</th>
                    <th>Value %</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td><button type="button" class="button">
                        <span class="button__text">Save</span>
                        <span class="button__icon">
                          <ion-icon name="cloud-download-outline"></ion-icon>
                        </span>
                        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br><br>
                    </button><br>
                    <button type="button" class="button-Delete">
                        <span class="button__text">Delete</span>
                        <span class="button__icon">
                          <ion-icon name="cloud-download-outline"></ion-icon>
                        </span><br><br><br>
                        </button>
                </td>
                </tr>
            </tbody> -->
        </table><br><br><br><br>

        <i><h1 class="topic-red">DEVELOPMENT SKILL</h1></i><br><br>
        <?php 
$result=$con->query("SELECT * FROM skills where type='1' ORDER BY id");
$i=0;
while($row=$result->fetch_assoc()){
  $i++;
  echo"
  <form action='' method='post'>
  <input value='".$row["id"]."' name='id' style='display:none'>
  <label for='telNo'>Design Skill Name:</label>
  <input class='inpt form-box' type='text' name='name' id='name' value='".$row["name"]."' placeholder='Enter Your Development Skill ' maxlength='50'><br>
  <label for='telNo'>Value %:</label>
  <input class='inpt form-box' type='text' name='value' id='name' value='".$row["value"]."' placeholder='Specify Your self-evaluated % ' maxlength='50'><br>
  
 <button type='submit' class='button' name='save'>
 <span class='button__text'>Update</span>
 <span class='button__icon'>
   <ion-icon name='cloud-download-outline'></ion-icon>
 </span>
 <script src='https://unpkg.com/ionicons@5.4.0/dist/ionicons.js'></script><br><br><br>
</button><br><br>
<button type='submit' class='button' name='delete' style='background-color:red'>
         <span class='button__text'>Delete</span>
         <span class='button__icon'>
           <ion-icon name='cloud-download-outline'></ion-icon>
         </span>
         <script src='https://unpkg.com/ionicons@5.4.0/dist/ionicons.js'></script><br><br><br>
       </button><br><br>
      </form>
";
}
?>
<br><br>
<form action="" method="$_POST">
        <label for="telNo">Development Skill Name:</label>
  <input value='1' name='type' style='display:none'>
        <input class="inpt form-box" type="text" name="name" id="name" placeholder="Enter Your Development Skill " maxlength="50"><br>
        <label for="telNo">Value %:</label>
        <input class="inpt form-box" type="text" name="value" id="name" placeholder="Specify Your self-evaluated % " maxlength="50"><br>
        
       <button type="button" class="button" name='addNew'>
                <span class="button__text">AddNew</span>
                <span class="button__icon">
                  <ion-icon name="cloud-download-outline"></ion-icon>
                </span>
              </button><br><br>
              </form>
              <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br><br>
    
              <!-- <table class="styled-table-development">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Development Skill Name</th>
                        <th>Value %</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td><button type="button" class="button">
                            <span class="button__text">Save</span>
                            <span class="button__icon">
                              <ion-icon name="cloud-download-outline"></ion-icon>
                            </span>
                            <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script><br><br><br>
                        </button><br>
                        <button type="button" class="button-Delete">
                            <span class="button__text">Delete</span>
                            <span class="button__icon">
                              <ion-icon name="cloud-download-outline"></ion-icon>
                            </span><br><br><br>
                            </button>
                    </td>
                    </tr>
                </tbody>
            </table> -->
</div>
  
</body>
</html>