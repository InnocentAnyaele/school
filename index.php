<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"  href="assets/css/style.css">
  <link rel="stylesheet"  href="assets/css/card-gallery.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">

  
  
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/all.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
  
  
    <title>AUCC SRC</title>
    <link rel="shortcut icon" href="assets/img/logo2.jpg" type="image/x-icon">
</head> 

<body>

  <!-- <header> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation" style="
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    width: 100%;
    height: 60px;
    background-color: #00a087;
  ">
  <div class="container">
    <a href="#" class="navbar-brand"><img src="assets/img/logo2.jpg" style="height: 50px; width: 60px ;" alt="logo"> <b><span style="font-family: monospace;"> AUCC SRC </span></b></a>
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse bg-light text-center" style=" font-weight: bolder; padding: 8px; " id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#homecarousel" class="nav-item nav-link active"> <span style="font-family: Arial;"> Home </span></a>
            <a href="#gallery" class="nav-item nav-link"><span style="font-family: Arial;"> Gallery </span></a>
            <a href="#aboutus" class="nav-item nav-link"><span style="font-family: Arial;">About </span></a>
            <a href="#news" class="nav-item nav-link"><span style="font-family: Arial;">News</span></a>
            <a href="#footer" class="nav-item nav-link" tabindex="-1"><span style="font-family: Arial;">Contact</span></a>
            <!-- <a href="#footer" class="nav-item nav-link disabled" tabindex="-1">Contact</a> -->
        </div>

        <div class="navbar-nav ml-auto">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a href="#myModal" class="dropdown-item" data-toggle="modal">Student</a><br>
<a href="#myModal2" class="dropdown-item" data-toggle="modal">SRC</a>
    <!-- <a class="dropdown-item" href="#">SRC</a> -->
  </div>
 </div>
 </div>
</div>
</div>
</nav>
  <!-- </header> -->


<!-- Student Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog" style="position: relative; top: 10%;">

    <form class="form-group" action="studentlogin.php" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="col-12 modal-title text-center" style="font-family: monospace;">Student Login</h4>
      </div>
      <div class="modal-body">
      <input class="form-control" type="password" placeholder="Password" name="studentpassword" required>
      <span style="color: red;">
    <?php
                                                                    if (isset($_GET['error1'])) {
                                                                      echo $_GET['error1'];
                                                                    } ?></span>
      <i><small class="form-text text-muted">Students only.</small></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
        <button class="btn btn-primary" name="studentsubmit"><i class="fas fa-sign-in-alt"></i> Login</button>
      </div>
    </div>
    </form>

  </div>
</div>

<!-- SRC Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="position: relative; top: 10%;">

    <form class="form-group" action="srclogin.php" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="col-12 modal-title text-center" style="font-family: monospace;">SRC Login</h4>
      </div>
      <div class="modal-body">
      <input class="form-control" type="password" placeholder="Password" name="srcpassword" required>
      <span style="color: red;">
      <?php
                                                                    if (isset($_GET['error2'])) {
                                                                      echo $_GET['error2'];
                                                                    } ?></span>
      <i><small class="form-text text-muted">SRC only.</small></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
        <button class="btn btn-primary" name="srcsubmit"><i class="fas fa-sign-in-alt"></i> Login</button>
      </div>
    </div>
    </form>

  </div>
</div>
</header>


<section id="homecarousel" class="carousel slide" data-ride="carousel" style="height: relative;">
  <ol class="carousel-indicators">
    <li data-target="#homecarousel" data-slide-to="0" class="active"></li>
    <li data-target="#homecarousel" data-slide-to="1"></li>
    <li data-target="#homecarousel" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/src2.jpg" alt="First slide">
      <!-- <div class="carousel-caption d-none d-md-block" style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
  </div> -->
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/src20.jpg" alt="Second slide">
      <!-- <div class="carousel-caption d-none d-md-block " style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
  </div> -->
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/src4.jpg" alt="Third slide">
      <!-- <div class="carousel-caption d-none d-md-block" style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
    </div> -->
  </div>

  <a class="carousel-control-prev" href="#homecarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#homecarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section> <br><br>

<section id="gallery" class="gallery-block cards-gallery" style="text-align: center; height: relative;">
	        <div class="heading">
	          <h2 style=" font-size: 1.5rem;">Gallery</h2>
	        </div><br>
	    <div class="container">
          <div class="row" style="overflow: auto; height: 600px;">
          <?php

          include ('db.php');

          $display = mysqli_query($conn,("SELECT * FROM `gallery`"));
          while ($row=mysqli_fetch_assoc($display)){
?>
  <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover" style="transition: 0.4s ease; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);   margin-bottom: 30px;  ">
	                	<a class="lightbox" href="assets/img/gallery/<?php echo $row['image']; ?>">
	                		<img src="assets/img/gallery/<?php echo $row['image']; ?>" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body" style="text-align: center;">
	                        <!-- <h6><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</a></h6> -->
	                        <p class="text-muted card-text"><?php echo $row['title']  ;?></p>
	                    </div>
	                </div>
	            </div>


<?php
}
?>
                                                                  </div>
                                                                  </div>
                                                                  </section><br><br>

<section  id="aboutus" class="container text-center" style= "height:relative; width: 100%; text-align: center;">
<h2 style="font-size:40px;">About The SRC</h2>
<div class="row mt-4">
<div class="col-lg-6 col-md-7 text-justify">
<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="col-lg-6 col-md-7 text-justify">
<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
</div>
</section> <br><br>

<section style="height:relative;">
<div class="well text-center">
    <div class="row">
    <div class="col-md-12">
      <img src="assets/img/aucc3.jpg" class="img-fluid" />
    </div>
</div></div>

<div class="well text-center">
    <div class="row" style="background-color: #372A2A;">
    <div class="col-md-12">
      <img src="assets/img/aucc10.jpg" class="img-fluid" />
    </div>
</div></div><br><br>

<!-- <div class="well text-center">
    <div class="row">
    <div class="col-md-12">
      <img src="assets/img/aucc5.jpg" class="img-fluid" />
    </div>
</div></div><br>

<div class="well text-center">
    <div class="row" style="background-color: #5033C4;">
    <div class="col-md-12">
      <img src="assets/img/aucc6.jpg" class="img-fluid" />
    </div>
</div></div><br>

<div class="well text-center">
    <div class="row" style="background-color: #EAEAEA;">
    <div class="col-md-12">
      <img src="assets/img/aucc7.jpg" class="img-fluid" />
    </div>
</div></div><br> -->

</section> <br><br>

<section id="carousel2" class="carousel slide" data-ride="carousel" style="height: relative;">
  <ol class="carousel-indicators">
    <li data-target="#carousel2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel2" data-slide-to="1"></li>
    <li data-target="#carousel2" data-slide-to="2"></li>
    <li data-target="#carousel2" data-slide-to="3"></li>
    <li data-target="#carousel2" data-slide-to="4"></li>
  </ol>
  
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/aucc7.jpg" alt="First slide">
      <!-- <div class="carousel-caption d-none d-md-block" style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
  </div> -->
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/aucc6.jpg" alt="Second slide">
      <!-- <div class="carousel-caption d-none d-md-block " style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
  </div> -->
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/aucc5.jpg" alt="Third slide">
      <!-- <div class="carousel-caption d-none d-md-block" style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
    </div> -->
  </div>

  <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/aucc4.jpg" alt="Third slide">
      <!-- <div class="carousel-caption d-none d-md-block" style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
    </div> -->
  </div>

  <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/aucc9.jpg" alt="Third slide">
      <!-- <div class="carousel-caption d-none d-md-block" style="top: 25%; bottom: auto;" >
    <h1 style="font-weight: bolder; font-size: 50px;">AFRICAN UNIVERSITY COLLEGE OF COMMUNICATIONS</h1>
    <p style="font-size: 20px;">Student Representative Council Platform</p>
    </div> -->
  </div>

  <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section> <br><br>

<section id="news" class="container" style="text-align: center; height: 100%;"><br><br>
<h3 style="font-size: 40px;">News and Events </h3><br>
<!-- <form class="form-inline md-form form-sm active-cyan-2 mt-2" action="" method="get">
  <input class="form-control form-control-sm mr-3 w-75" type="text" name="search" placeholder="Search for News"
    aria-label="Search">
  <i class="fas fa-search" aria-hidden="true"></i>
</form><br> -->
<div class="card-group" style="overflow: auto; text-align: center; height: 500px;">
<div class="row">
<?php 

include ("db.php");

// if (isset($_GET['search'])){
//   $search = $_GET['search'];
//   $display = mysqli_query($conn,("SELECT * FROM `news` WHERE `title` LIKE '%$search%' ORDER BY `date` DESC"));
//   if (mysqli_num_rows($display)<1){
//     echo "<p style=' padding-left: 20px; color: gray; '><br> No results :)</p>";
//   }
// }
// else {
//  $display = mysqli_query($conn,("SELECT * FROM `news`  ORDER BY `date` DESC"));
// }

$display = mysqli_query($conn,("SELECT * FROM `news`  ORDER BY `date` DESC"));

while ($row=mysqli_fetch_assoc($display)){
  if (empty($row['image'])){
    $image = "news3.jpg";
  }
  else{
    $image = $row['image'];
  }

?>

<div class="card" style="width: 15rem; min-height: 450px; margin-bottom: 10px; margin-left: 20px; margin-right: 20px; margin-top: 20px;">
<img class="card-img-top" style="object-fit: cover; height: 30vh;" src="assets/img/news/<?php echo $image; ?>" alt="Card image cap">
<div class="card-body">
 <h5 class="card-title"><b><?php echo substr($row['title'],0,69); ?></b></h5>
 <p class="card-text">
   <p><a href="<?php echo $row['link']; ?>"><?php echo substr($row['link'],0,22); ?> </a> </p>
   <p><?php echo substr($row['content'],0,92); ?></p>
  </p>
</div>

<form method="post" action="">
<input type="text" value="<?php echo $row['log'];?>" name="log"id="log" hidden>
   <input type="text" value="<?php echo $row['title'];?>" name="title" id="title" hidden>
   <input type="text" value="<?php echo $image;?>" name="image" id="image" hidden>
   <input type="text" value="<?php echo $row['link'];?>" name="link" id="link" hidden>
   <input type="text" value="<?php echo $row['content'];?>" name="content" id="content" hidden>
   <input type="text" value="<?php echo $row['name'];?>" name="name" id="name" hidden>
   <input type="text" value="<?php echo $row['date'];?>" name="date" id="date" hidden>
   <button class="btn btn-outline-primary"  id="read" name="read"><i class="fas fa-book" ></i> Read</button>
 </form><br>
</div>

<?php
}
?>

<?php

if (isset($_POST['read'])){
  $title = $_POST['title'];
  $image = $_POST['image'];
  $content= $_POST['content'];
  $link = $_POST['link'];
  $name = $_POST['name'];
  $date = $_POST['date'];

  ?>
  
<div id="newsread" class="modal fade" role="dialog">
  <div class="modal-dialog" style="position: relative; top: 10%;">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="col-12 modal-title text-center"><b><?php echo $title; ?></b> </h4>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
          <img class="card-img" src="assets/img/news/<?php echo $image; ?>" alt="Card image cap">
          <p><a href="<?php echo $link; ?>"><?php echo $link; ?> </a> </p>
      <p><?php echo $content; ?></p>
      <p><b><?php echo $name; ?></b></p>
      <p><?php echo $date; ?></p> 
    </div>
          </div>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
      </div>
    </div>
    </form>

  </div>
</div>

<?php
echo "<script type='text/javascript'>
$(document).ready(function(){
$('#newsread').modal('show');
});
</script>";
}
?>

</div></div>
</section><br><br>


</div>




<footer id="footer" style="height: 100%;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 footer-info">
                <h3>School name</h3>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#homecarousel">Home</a></li>
                    <li><a href="#aboutus">About</a></li>
                    <li><a href="#news">News</a></li>
                    <li> <a href="#myModal" data-toggle="modal">Student Login</a></li>
                    <li><a href="#myModal2"  data-toggle="modal">SRC Login</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                  location <br>
                  locaaatiiooon <br>
                  location <br>
                  <strong>Phone:</strong> 20561652152135 <br>
                  <strong>Email:</strong> website@email.com<br>
</p>

<div class="social-links">
    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="gmail"><i class="fab fa-google-plus"></i></a>
    <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
</div>
            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Contact</h4>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <!-- <form accept="" method="post">
              <input type="email" name="email">
              <button class="btn btn-md btn-default" name="send "> Send </button>
               <input type="submit" value="Send">           
            </form> -->
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="copyright">
        &copy; Copyright<strong>WebsiteName</strong>.All Rights Reserved </div>
        <div class="credits">
            Designed by <a href="#">InnocentAnyaele</a>
        </div>
</div>
</div>
</footer>

<script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>
</body>
</html>
