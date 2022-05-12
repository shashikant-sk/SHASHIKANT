<?php
include("../db.php");
if(!isset($_COOKIE["uname"])){
    header("location: ./loginpage.php");
}
$blogno = $_REQUEST["blog"] ?? 1;
$blog=$con->query("SELECt * from blog where id='$blogno'")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="styles.css">
  <script src="https://cdn.tiny.cloud/1/iztqcy23htw1h0qhtm94ty89clbaoizwvsl8w9ef50zr8dli/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>


<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>    
        <li><a href="homepage.php"><i class="fas fa-home"></i>HomePage</a></li>
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
    
    <div class="topnav">
        <a class="active" href="blog.php?blog=1">Blog 1</a>
        <a href="blog.php?blog=2">Blog 2</a>
        <a href="blog.php?glog=3">Blog 3</a>
      </div>
      <div class="divider">   
        <?php
        if(isset($_POST["Save"])){
          $topic=$_POST["topic"];
          $title=$_POST["title"];
          $duration=$_POST["duration"];
          $content=$_POST["content"];
          $date= date("M d, Y");
          $img=$con->query("SELECT * FROM blog WHERE id=$blogno")->fetch_assoc()["img"];
          if($_FILES['inpFile']['tmp_name']!=""){
            unlink("../assets/images/blog/$img");
            $image = time().$_FILES['inpFile']['name'];
            move_uploaded_file($_FILES['inpFile']['tmp_name'], "../assets/images/blog/$image");
          }else{
            $image = $img;
          }
          if($con->query("UPDATE blog set topic='$topic', title='$title', duration='$duration', content='$content', date='$date', img='$image' where id=$blogno")){
            echo"<script> alert ('Successful'); </script>";
          }
        }
        ?>
      <form action="" style="margin-left: 25%;" method="post">
        <input type="text" name="topic" id="" value="<?php echo $blog["topic"]; ?>"> <br>
        <input type="text" name="title" id="" value="<?php echo $blog["title"]; ?>"> <br>
        <input type="text" name="duration" id="" value="<?php echo $blog["duration"]; ?>"> <br>
        <textarea name="content" id="" cols="30" rows="300">
          <?php echo $blog["content"]; ?>
        </textarea>
        <input type="file" name="inpFile" id="inpFile">
        <input type="submit" value="Save" name="Save">
      </form>
     <div class = "vertical"><br>
      <i><h1 class="topic-red">Message Veiw</h1></i>
      <hr width="220%">
      <?php
      if(isset($_REQUEST["page"])){
      $page = $_REQUEST["page"];
    }else{
      $page=0;
    }
    $messages = $con->query("Select * from comments where bid='".$blogno."' order by id desc limit 10 offset ".$page*10);
    while($message=$messages->fetch_assoc()){
      echo "
      <div class='message-box'>
      <b>Name:&emsp;</b>".$message["name"]."<br>
      <b>IP:&emsp;</b>".$message["ip"]."<br>
      <b>Time:&emsp;</b>".$message["time"]."<br>
      <b>WebSite:&emsp;</b><a href='".$message["website"]."'>".$message["website"]."</a><br>
      <b>Email:&emsp;</b><a href='mailto:".$message["email"]."'>".$message["email"]."</a><br>
      <b>Comment: </b><br>
      <code>".$message["comment"]."</code>
      </div> 
      <hr>
      ";
    }
    if($page > 0){
      echo "<a href='blog.php?page=".($page-1)."&blog=".$blogno."'><button id='prev'>Prev</button></a>";
    }
    if($con->query("SELECT * FROM comments WHERE bid='$blogno'")->num_rows > ($page+1)*10){
      echo "<a href='blog.php?page=".($page+1)."&blog=".$blogno."'><button id='next'>Next</button></a>";
    }
  ?>
     </div>
</div>
</body>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
</html>