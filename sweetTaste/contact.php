<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php

// the message
// $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// send email
// mail("xixijiangyue@gmail.com","My subject",$msg);

if(isset($_POST['submit'])) {

    $to = "xixijiangyue@gmail.com";
    $subject = wordwrap($_POST['subject'], 70);
    $body = $_POST['body'];
    $header = "From: " .$_POST['email'];
    
    mail($to,$subject,$body, $header);
    ?>
    
    <div class="alert alert-success">
      <strong>Success!</strong> You email has been sent to us. Thanks you!
    </div>
    
    <?php
}
?>

<?php  include "includes/navigation.php"; ?>


<section id="staff" class="py-5 text-center bg-dark text-white">
    <div class="container">
      <h1>Our Blogger</h1>
      <br>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="images/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
        <div class="col-md-3">
          <img src="images/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
        <div class="col-md-3">
          <img src="images/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
        <div class="col-md-3">
          <img src="images/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
      </div>
    </div>
  </section>

  <!-- STAFF -->
  <section id="staff" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              We have the best team!
            </h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Faye Wong</h3>
              <h5 class="text-muted">blogger</h5>
              <p>Not so for former Gourmet editor and food-world royalty Faye Wong, who details her charmed life of artisanal jams, heirloom vegetables, and pitch-perfect cake recipes with the sort of purple prose only she can pull off. She went to every coner of the world for her favorite food</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Kiera Xi</h3>
              <h5 class="text-muted">blogger</h5>
              <p>In an age where chefs grovel for Twitter followers and just cooking is rarely enough to make you "relevant," she proves that you can play the game without losing your heart. The fact that she maintains her very sharp, very funny blog by herself before she came here.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Rico Suave</h3>
              <h5 class="text-muted">blogger</h5>
              <p>This guy is a one-man powerhouse, covering the L.A. restaurant scene with the level of detail that few media companies can muster. He also shares delicious food adventures from the road as well, but it's on his home turf that he's truly made himself indispensable!</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Dave Arnold</h3>
              <h5 class="text-muted">blogger</h5>
              <p>If you're a real food-science geek, Dave Arnold should be your messiah. As Director of Culinary Technology of the French Culinary Institute, he basically spends his days doing crazy food experiments and playing around with sous-vide machines and Roto-Vaps</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <h2><i class="fa fa-heart-o"></i></h2>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>
  
<!-- Page Content -->

<section id="contact" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h3>Get In Touch</h3>
          <p class="lead">Leave a message here!</p>
          <form role="form" action="" method="post" id="login-form" autocomplete="off">
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email"  name="email" id="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" name="body" id="body" rows="10" placeholder="Message"></textarea>
              </div>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block btn-lg">
          </form>
        </div>
      </div>
    </div>
  </section>

<hr>
<?php include "includes/footer.php";?>
