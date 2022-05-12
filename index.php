<?php 
include('db.php'); 
$result= $con->query("SELECT * FROM info");
$info=$result->fetch_assoc();
$result= $con->query("SELECT * FROM contact");
$contact=$result->fetch_assoc();
$result= $con->query("SELECT * FROM bestskills");
$best=$result->fetch_assoc();
if(isset($_POST["send"])){
    $bid=$_POST["bid"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $time=date("M d, Y H:i:s");
    $ip=$_SERVER["REMOTE_ADDR"];
    $con->query("INSERT INTO comments (bid, name, email, website, comment, time, ip) values ($bid, '$name', '$email', '$website', '$comment', '$time', '$ip')");
    echo "<script>alert('Comment Sent seucessfully'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $info["title"]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="template-color-1 spybody" id="body" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/logo/navbar.png" width="35%"  alt="logo">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                    <a class="rn-btn" id="switchTheme"><span>Light</span></a>
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.php">
                        <img src="assets/images/logo/navbar.png" width="30%" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">this is all personal portfolio template by Me. You can buy it.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills">
                    <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="<?php echo $contact['fb']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="<?php echo $contact['ig']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="<?php echo $contact['link']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->




    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
                                    <h1 class="title">Hi, I’m <span><?php echo $info["name"]; ?> </span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                                    <b class="is-visible">Developer.</b>
                                                    <b class="is-hidden">Professional Coder.</b>
                                                    <b class="is-hidden">Designer.</b>
                                                </span>
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">
                                        <?php echo $info["description"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find me</span>
                                            <ul class="social-share d-flex liststyle">
                                                <li class="facebook"><a href="https://www.facebook.com/passion.for.goal/"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li class="instagram"><a href="https://www.instagram.com/shashikant_001/"><i data-feather="instagram"></i></a>
                                                </li>
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/shashikant-001/"><i data-feather="linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
                                            <a href="<?php echo $best["link1"];?>"><li><img src="assets/images/bestskills/img1" href="" alt="Icons Images"></li></a>
                                            <a href="<?php echo $best["link2"];?>"><li><img src="assets/images/bestskills/img2" href="" alt="Icons Images"></li></a>
                                            <a href="<?php echo $best["link3"];?>"><li><img src="assets/images/bestskills/img3" href="" alt="Icons Images"></li></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="">
                                    <img src="assets/images/slider/shashikant.jpg" width="370" height="507" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        
        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">
<?php
$result=$con->query("SELECT * FROM whatido ORDER BY id");
while($row=$result->fetch_assoc()){
?>
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                     <i data-feather="<?php echo $row['dataFeather']; ?>"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#"><?php echo $row['title']; ?></a></h4>
                                    <p class="description"><?php echo $row['tagline']; ?></p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
<?php
$result=$con->query("SELECT * FROM portfolio ORDER BY id");
$ids = "";
while($row=$result->fetch_assoc()){
    $ids = $ids.$row["id"]." ";
    $pid= $row["id"] ?? 0;
    $ip = $_SERVER["REMOTE_ADDR"];

    if($con->query("SELECT * FROM likes where ip='$ip' and pid=$pid")->num_rows){
        $color= "color:red";
    }else{
        $color= "color:white";
    }
?>
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a>
                                        <img src="assets/images/portfolio/<?php echo $row['image']; ?>" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a><?php echo $row['title']; ?></a>
                                        </div>
                                        <div class="meta">
                                            <span><a><i data-feather="heart" style="<?php echo $color; ?>" id="heart_<?php echo $row["id"];?>" onclick="like(<?php echo $row["id"]; ?>)">jh</i></a>
                                                <span id="like_<?php echo $row["id"];?>">600</span></span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="<?php echo $row["link"]; ?>"><?php echo $row['tagline']; ?><i
                                                class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Single Portfolio -->
                    <?php } ?>
                    <script>
                        function count(id){
                            var xhttp = new XMLHttpRequest();
                            xhttp.open("GET", "count.php?pid="+id);
                            xhttp.onreadystatechange = function() {
                                if(this.readyState === 4 && this.status === 200) {
                                    document.getElementById("like_"+id).innerHTML = this.responseText;
                                }
                            };
                            xhttp.send();
                        }
                        function ids(id){
                            var array = id.split(" ");
                            array.forEach(count);
                            // array.forEach(like);
                            setInterval(function(){array.forEach(count);},30000);
                            
                        }
                        function like(id){
                            // alert("1");
                            var dom = this;
                            // document.getElementById("like").setAttribute("style", "background-color:green")
                            var xhttp = new XMLHttpRequest();
                            xhttp.open("GET", "likes.php?pid="+id);
                            xhttp.onreadystatechange = function() {
                                if(this.readyState === 4 && this.status === 200) {
                                // alert(this.responseText);
                                    document.getElementById("heart_"+id).setAttribute("style",this.responseText);
                                }
                            };
                            xhttp.send();
                            count(id);
                        }
                        ids("<?php echo $ids;?>");
                    </script>
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->

        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume" onload="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">1+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li> -->
                        </ul>
                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2020</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">
                                                    <?php
                                                    $result=$con->query("Select * from education order by id DESC");
                                                    $count=$result->num_rows;
                                                    $show1=($count)/2;
                                                    for($i=0; $i<$show1 ;$i++){
                                                        $row=$result->fetch_assoc();
                                                        echo "
<!-- Start Single List  -->
<div class='resume-single-list'>
  <div class='inner'>
      <div class='heading'>
          <div class='title'>
              <h4>".$row["title"]."</h4>
              <span>".$row["clgName"]."</span>
          </div>
          <div class='date-of-time'>
              <span>".$row["evaluation"]."</span>
          </div>
      </div>
      <p class='description'>".$row["des"]."</p>
  </div>
</div>
<!-- End Single List  -->
                                                        ";
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <!-- <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4> -->
                                                <div class="experience-list">
                                                    <?php
                                                    while($row=$result->fetch_assoc()){
                                                        echo "
<!-- Start Single List  -->
<div class='resume-single-list'>
  <div class='inner'>
      <div class='heading'>
          <div class='title'>
              <h4>".$row["title"]."</h4>
              <span>".$row["clgName"]."</span>
          </div>
          <div class='date-of-time'>
              <span>".$row["evaluation"]."</span>
          </div>
      </div>
      <p class='description'>".$row["des"]."</p>
  </div>
</div>
<!-- End Single List  -->
                                                        ";
                                                    }
                                                    ?>

                                                    <!-- Start Single List  -->
                                                    <!-- <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>⭐⭐⭐⭐⭐</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div> -->
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <!-- <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                        2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>⭐⭐⭐⭐⭐</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div> -->
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <?php
                                                    $result=$con->query("Select * from skills where type=0 order by value desc");
                                                    while($row=$result->fetch_assoc()){
                                                        echo"
                                                        
                                                    <!-- Start Single Progress Charts -->
                                                    <div class='progress-charts'>
                                                      <h6 class='heading heading-h6'>".$row["name"]."</h6>
                                                      <div class='progress'>
                                                          <div class='progress-bar wow fadeInLeft' data-wow-duration='0.5s' data-wow-delay='.3s' role='progressbar' style='width: ".$row["value"]."%' aria-valuenow='85' aria-valuemin='0' aria-valuemax='100'><span
                                                                  class='percent-label'>".$row["value"]."%</span></div>
                                                      </div>
                                                  </div>
                                                  <!-- End Single Progress Charts -->
                                                        ";
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                    <?php
                                                    $result=$con->query("Select * from skills where type=1 order by value desc");
                                                    while($row=$result->fetch_assoc()){
                                                        echo"
                                                    <!-- Start Single Progress Charts -->
                                                    <div class='progress-charts'>
                                                      <h6 class='heading heading-h6'>".$row["name"]."</h6>
                                                      <div class='progress'>
                                                          <div class='progress-bar wow fadeInLeft' data-wow-duration='0.5s' data-wow-delay='.3s' role='progressbar' style='width: ".$row["value"]."%' aria-valuenow='85' aria-valuemin='0' aria-valuemax='100'><span
                                                                  class='percent-label'>".$row["value"]."%</span></div>
                                                      </div>
                                                  </div>
                                                  <!-- End Single Progress Charts -->
                                                        ";
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">- 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">
                                                <?php
                                                    $result=$con->query("Select * from expirence order by id DESC");
                                                    $count=$result->num_rows;
                                                    $show1=($count)/2;
                                                    for($i=0; $i<$show1 ;$i++){
                                                        $row=$result->fetch_assoc();
                                                        echo "
<!-- Start Single List  -->
<div class='resume-single-list'>
  <div class='inner'>
      <div class='heading'>
          <div class='title'>
              <h4>".$row["title"]."</h4>
              <span>".$row["cmpName"]."</span>
          </div>
          <div class='date-of-time'>
              <span>".$row["evaluation"]."</span>
          </div>
      </div>
      <p class='description'>".$row["des"]."</p>
  </div>
</div>
<!-- End Single List  -->
                                                        ";
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <!-- <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4> -->
                                                <div class="experience-list">
                                                <?php
                                                    while($row=$result->fetch_assoc()){
                                                        echo "
<!-- Start Single List  -->
<div class='resume-single-list'>
  <div class='inner'>
      <div class='heading'>
          <div class='title'>
              <h4>".$row["title"]."</h4>
              <span>".$row["cmpName"]."</span>
          </div>
          <div class='date-of-time'>
              <span>".$row["evaluation"]."</span>
          </div>
      </div>
      <p class='description'>".$row["des"]."</p>
  </div>
</div>
<!-- End Single List  -->
                                                        ";
                                                    }
                                                    ?>

                                                    <!-- Start Single List  -->
                                                    <!-- <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>⭐⭐⭐⭐⭐</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div> -->
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <!-- <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                        2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>⭐⭐⭐⭐⭐</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div> -->
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                          
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
        <!-- Start Testimonia Area  -->
        <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">What Clients Say</span>
                            <h2 class="title">Testimonial</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-activation testimonial-pb mb--30">
                            <?php
                            $result=$con->query("Select * from testimonial");
                            while($row=$result->fetch_assoc()){
                                echo "
                                
                            <!-- Start Single testiminail -->
                            <div class='testimonial mt--50 mt_md--40 mt_sm--40'>
                              <div class='inner'>
                                  <div class='card-info'>
                                      <div class='card-thumbnail'>
                                          <img src='assets/images/testimonial/".$row["img"]."' alt='Testimonial-image'>
                                      </div>
                                      <div class='card-content'>
                                          <span class='subtitle mt--10'>".$row["company"]."</span>
                                          <h3 class='title'>".$row["name"]."</h3>
                                          <span class='designation'>".$row["post"]."</span>
                                      </div>
                                  </div>
                                  <div class='card-description'>
                                      <div class='title-area'>
                                          <div class='title-info'>
                                              <h3 class='title'>".$row["title"]."</h3>
                                              <span class='date'>".$row["duration"]."</span>
                                          </div>
                                          <div class='rating'>
                                          ".$row["evaluation"]."
                                          </div>
                                      </div>
                                      <div class='seperator'></div>
                                      <p class='discription'>
                                      ".$row["des"]."
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <!--End Single testiminail -->
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonia Area  -->
        <!-- Start Client Area -->
        <div class="rn-client-area rn-section-gap section-separator" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span class="subtitle">Popular Clients</span>
                            <h2 class="title">Awesome Clients</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-Javascript" role="tab" aria-selected="true">Web Development</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="tab" href="#v-pills-Design" role="tab" aria-selected="true">Android Development</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-settings-tabs" data-toggle="tab" href="#v-pills-settings" role="tab" aria-selected="true">MERN Development</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-laravel-tabs" data-toggle="tab" href="#v-pills-laravel" role="tab" aria-selected="true">UI and UX design</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-python-tabs" data-toggle="tab" href="#v-pills-python" role="tab" aria-selected="true">photoshop</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade" id="v-pills-Javascript" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="v-pills-Design" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel" aria-labelledby="v-pills-wordpress-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-laravel" role="tabpanel" aria-labelledby="v-pills-laravel-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-python" role="tabpanel" aria-labelledby="v-pills-python-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End client section -->
        <!-- Pricing Area -->
        <div class="rn-pricing-area rn-section-gap section-separator" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-5 mb_md--40 mb_sm--40 small-margin-pricing">
                        <div class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                                <div class="section-title text-left">
                                    <span class="subtitle text-center text-lg-left">Pricing</span>
                                    <h2 class="title text-center text-lg-left">My Pricing</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-7">
                        <!-- Pricing Area -->
                        <div class="navigation-wrapper">
                            <ul class="nav " id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-style" id="test-tab" data-toggle="tab" href="#test" role="tab" aria-controls="test" aria-selected="false">Static</a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-style active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Standard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-style" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Premium</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade " id="test" role="tabpanel" aria-labelledby="test-tab">
                                    <!-- Pricing Start -->
                                    <?php $info=$con->query("Select * from pricing where type='static'")->fetch_assoc(); ?>
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title"><?php echo $info["title"]; ?></h2>
                                                <span><?php echo $info["subTitle"]; ?></span>
                                            </div>
                                            <div class="header-right">
                                                <span><?php echo $info["price"]; ?></span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                            <?php echo $info["des"]; ?>
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <?php
                                                    $result=$con->query("Select * from keypoints where type='static'");
                                                    $count=$result->num_rows;
                                                    $show1=($count)/2;
                                                    for($i=0; $i<$show1 ;$i++){
                                                        $row=$result->fetch_assoc();
                                                        echo "
                                                        <div class='check d-flex'>
                                                            <i data-feather='check'></i>
                                                            <p>".$row["point"]."</p>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="right-area">
                                                    <?php
                                                    while($row=$result->fetch_assoc()){
                                                        echo "
                                                        <div class='check d-flex'>
                                                            <i data-feather='check'></i>
                                                            <p>".$row["point"]."</p>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#contacts" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>7 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Pricing Start -->
                                    <?php $info=$con->query("Select * from pricing where type='standard'")->fetch_assoc(); ?>
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title"><?php echo $info["title"]; ?></h2>
                                                <span><?php echo $info["subTitle"]; ?></span>
                                            </div>
                                            <div class="header-right">
                                                <span><?php echo $info["price"]; ?></span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                            <?php echo $info["des"]; ?>
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <?php
                                                    $result=$con->query("Select * from keypoints where type='standard'");
                                                    $count=$result->num_rows;
                                                    $show1=($count)/2;
                                                    for($i=0; $i<$show1 ;$i++){
                                                        $row=$result->fetch_assoc();
                                                        echo "
                                                        <div class='check d-flex'>
                                                            <i data-feather='check'></i>
                                                            <p>".$row["point"]."</p>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="right-area">
                                                    <?php
                                                    while($row=$result->fetch_assoc()){
                                                        echo "
                                                        <div class='check d-flex'>
                                                            <i data-feather='check'></i>
                                                            <p>".$row["point"]."</p>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#contacts" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>7 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <!-- Pricing Start -->
                                    <?php $info=$con->query("Select * from pricing where type='premimum'")->fetch_assoc(); ?>
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title"><?php echo $info["title"]; ?></h2>
                                                <span><?php echo $info["subTitle"]; ?></span>
                                            </div>
                                            <div class="header-right">
                                                <span><?php echo $info["price"]; ?></span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                            <?php echo $info["des"]; ?>
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <?php
                                                    $result=$con->query("Select * from keypoints where type='premimum'");
                                                    $count=$result->num_rows;
                                                    $show1=($count)/2;
                                                    for($i=0; $i<$show1 ;$i++){
                                                        $row=$result->fetch_assoc();
                                                        echo "
                                                        <div class='check d-flex'>
                                                            <i data-feather='check'></i>
                                                            <p>".$row["point"]."</p>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="right-area">
                                                    <?php
                                                    while($row=$result->fetch_assoc()){
                                                        echo "
                                                        <div class='check d-flex'>
                                                            <i data-feather='check'></i>
                                                            <p>".$row["point"]."</p>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#contacts" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>7 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- pricing area -->
        <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">Visit my blog and keep your feedback</span>
                            <h2 class="title">My Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">
                <?php
$result=$con->query("SELECT * FROM blog ORDER BY id");
$ids = "";
while($row=$result->fetch_assoc()){
?>
                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters<?php echo $row["id"]; ?>">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/blog/<?php echo $row["img"]; ?>">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)"><?php echo $row["topic"]; ?></a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> <?php echo $row["duration"]; ?></span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)"><?php echo $row["title"]; ?>
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->
<?php } ?>
                    <!-- Start Single blog -->
                    <!-- <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/blog/blog-02.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Development</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 hour read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="">The services provide for design <i
                                        class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- End Single blog --> 

                    <!-- Start Single blog -->
                    <!-- <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters3">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/blog/blog-03.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Application</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 5 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                            maintain<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single blog -->

                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/contact1.png" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title"><?php
                                $result= $con->query("SELECT * FROM info");
                                $info=$result->fetch_assoc();                                
                                echo $info['name']; ?></h4>
                                <span>Frontend Developer & Designer</span>
                            </div>
                            <div class="description">
                                <p><?php echo $info['description']; ?>
                                </p>
                                <span class="phone">Phone: <a href="tel:<?php echo $contact['phone']; ?>"><?php echo $contact['phone']; ?></a></span>
                                <span class="mail">Email: <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    <a href="<?php echo $contact['fb']; ?>"><i data-feather="facebook"></i></a>
                                    <a href="<?php echo $contact['link']; ?>"><i data-feather="linkedin"></i></a>
                                    <a href="<?php echo $contact['ig']; ?>"><i data-feather="instagram"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <!-- <div class="introduce"> -->
                                <!-- <form class="rnt-contact-form rwt-dynamic-form row" id="" method="POST" action="hgvhgg.php">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact-phone" id="contact-phone" type="tel">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="submit" name="sumbit" id="">
                                        <button name="submit-message" type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form> -->
                                <form method="POST" class="rnt-contact-form rwt-dynamic-form row" id="contact-form">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact-phone" id="contact-phone" type="tel">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        
                                        <button name="submit-message" type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                                    <?php
                                    if(isset($_POST["submit-message"])){
                                        $name=$_POST["contact-name"];
                                        $phone=$_POST["contact-phone"];
                                        $email=$_POST["contact-email"];
                                        $subject=$_POST["subject"];
                                        $message=$_POST["contact-message"];
                                        $ip = $_SERVER["REMOTE_ADDR"];
                                        $time = date("Y-m-d H:i:s");
                                        if($con->query("INSERT INTO message (name, phone, email, subject, message, ip, time)VALUES('$name', '$phone', '$email', '$subject', '$message', '$ip', '$time')")){
                                            echo "Message Sent Sucessfully";
                                        }
                                    }
                                    ?>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->

        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-04.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> App Design Development.
                                    </h3>
                                    <p class="mb--30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio assumenda explicabo veniam temporibus eligendi.</p>
                                    <p>Consectetur adipisicing elit. Cupiditate distinctio assumenda. dolorum alias suscipit rerum maiores aliquam earum odit, nihil culpa quas iusto hic minus!</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <a href="#" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
        <?php
$result=$con->query("SELECT * FROM blog ORDER BY id");
$ids = "";
while($row=$result->fetch_assoc()){
?>
        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="exampleModalCenters<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="assets/images/blog/<?php echo $row["img"]; ?>" alt="news modal" class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date"><?php echo $row["date"]; ?></span>
                            <h2 class="title"><?php echo $row["title"]; ?></h2>
                            <?php echo $row["content"]; ?>
                        </div>
                        <!-- Comment Section Area Start -->
                        <div class="comment-inner">
                            <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <input type="text" name="bid" value='<?php echo $row["id"]; ?>' style="display: none;">
                                        <div class="rnform-group"><input type="text" name="name" placeholder="Name">
                                        </div>
                                        <div class="rnform-group"><input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="rnform-group"><input type="url" name="website" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group">
                                            <textarea placeholder="Comment" name="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" name="send" class="rn-btn"><span>SUBMIT NOW</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- End Modal Blog area -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

        <!-- Start Right Demo  -->
        <div class="rn-right-demo">
            <button class="demo-button">
                <span class="text">template</span>
            </button>
        </div>
        <!-- End Right Demo  -->

        <!-- Start Modal Area  -->
        <div class="demo-modal-area">
            <div class="wrapper">
                <div class="close-icon">
                    <button class="demo-close-btn"><span class="feather-x"></span></button>
                </div>
                <div class="rn-modal-inner">
                    <div class="demo-top text-center">
                        <h4 class="title">shashikant</h4>
                        <p class="subtitle">this is all portfolio template by me. You can buy it</p>
                    </div>

                    <ul class="popuptab-area nav nav-tabs" id="popuptab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active demo-dark" id="demodark-tab" data-toggle="tab" href="#demodark" role="tab" aria-controls="demodark" aria-selected="true">Dark Demo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link demo-light" id="demolight-tab" data-toggle="tab" href="#demolight" role="tab" aria-controls="demolight" aria-selected="false">Light Demo</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="popuptabContent">
                        <div class="tab-pane show active" id="demodark" role="tabpanel" aria-labelledby="demodark-tab">
                            <div class="content">
                                <div class="row">

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index.php">
                                                        <img class="w-100" src="assets/images/demo/main-demo.jpg" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index.php">shashikant</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-technician.php">
                                                        <img class="w-100" src="assets/images/demo/index-technician.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">Template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-technician.php">Technician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-model.php">
                                                        <img class="w-100" src="assets/images/demo/home-model-v2.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-model.php">Model</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-consulting.php">
                                                        <img class="w-100" src="assets/images/demo/home-consulting.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-consulting.php">Consulting</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="fashion-designer.php">
                                                        <img class="w-100" src="assets/images/demo/fashion-designer.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="fashion-designer.php">Fashion Designer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-developer.php">
                                                        <img class="w-100" src="assets/images/demo/developer.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-developer.php">Developer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="instructor-fitness.php">
                                                        <img class="w-100" src="assets/images/demo/instructor-fitness.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text"> template<i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="instructor-fitness.php">Fitness Instructor</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->
                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-web-Developer.php">
                                                        <img class="w-100" src="assets/images/demo/home-model.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-web-Developer.php">Web Developer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-designer.php">
                                                        <img class="w-100" src="assets/images/demo/home-video.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-designer.php">Designer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-content-writer.php">
                                                        <img class="w-100" src="assets/images/demo/text-rotet.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-content-writer.php">Content Writter</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-instructor.php">
                                                        <img class="w-100" src="assets/images/demo/index-boxed.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-instructor.php">Instructor</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-freelancer.php">
                                                        <img class="w-100" src="assets/images/demo/home-sticky.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-freelancer.php">Freelancer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-photographer.php">
                                                        <img class="w-100" src="assets/images/demo/index-bg-image.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-photographer.php">Photographer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-politician.php">
                                                        <img class="w-100" src="assets/images/demo/front-end.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-politician.php">Politician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo coming-soon">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img class="w-100" src="assets/images/demo/coming-soon.png" alt="Personal Portfolio">
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="#">Accountant</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="demolight" role="tabpanel" aria-labelledby="demolight-tab">
                            <div class="content">
                                <div class="row">

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/main-demo.jpg" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-white-version.php">shashikant</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-technician-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/index-technician-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">Template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-technician-white-version.php">Technician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-model-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-model-v2-white.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-model-white-version.php">Model</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-consulting-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-consulting-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-consulting-white-version.php">Consulting</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="fashion-designer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/fashion-designer-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="fashion-designer-white-version.php">Fashion Designer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-developer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/developer-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-developer-white-version.php">Developer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->
                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="instructor-fitness-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/instructor-fitness-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="instructor-fitness-white-version.php">Fitness Instructor</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->
                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-web-developer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-model-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-web-developer-white-version.php">Web Developer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-designer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-video-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-designer-white-version.php">Designer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-content-writer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/text-rotet-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-content-writer-white-version.php">Content
                                                            Writter</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-instructor-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/index-boxed-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-instructor-white-version.php">Instructor</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-freelancer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-sticky-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-freelancer-white-version.php">Freelancer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-photographer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/index-bg-image-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-photographer-white-version.php">Photographer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-politician-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/front-end-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">template <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-politician-white-version.php">Politician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo coming-soon">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img class="w-100" src="assets/images/demo/coming-soon.png" alt="Personal Portfolio">
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="#">Accountant</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Area  -->

    </main>

    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">

                        <div class="logo">
                            <a href="#"><img src="assets/images/logo/logos-circle.png" width="100%" height="200%" alt="logo-image"></a>
                        </div>

                        <p class="description mt--30">© 2022. All rights reserved by <a target="_blank" href="./index.php">SHASHIKANT.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
    <script>
        document.getElementById("switchTheme").addEventListener("click",(e)=>{
  if(e.target.outerText === "Light"){
    document.querySelector("#switchTheme span").innerHTML = "Dark";
    document.getElementById("body").className = "template-color-1 spybody white-version";
  }
  else{
    document.querySelector("#switchTheme span").innerHTML = "Light";
    document.getElementById("body").className = "template-color-1 spybody";
  }
});
    </script>
</body>
</html>