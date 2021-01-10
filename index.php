<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="kel4">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
	<?php
		include ('navbar.php');
	?>
	
    <main role="main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/bg-1.gif" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/bg-itk.jpeg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/bg-2.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Carousel -->

      <!---------------- MODAL ----------------->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="Isikan Nama Anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">NIM :</label>
                  <input type="text" name="nim" class="form-control" placeholder="Isikan NIM Anda" required >
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Lanjut ></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

<!-- halaman isi -->
<div class="container">
  <div class="row justify-content-md-center">
<section class="team-section text-center my-5">
    <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
<!-- Section description -->
<p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
  Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
  eum porro a pariatur veniam.</p>

<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4">
        <div class="avatar mx-auto">
          <img src="image/ridho.jpg" width="160" height="160" class="rounded-circle"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Rosyid Ridho</h5>
        <p class="text-uppercase blue-text"><strong>Graphic designer</strong></p>
        <p class="grey-text">Tes12</p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">
        <div class="avatar mx-auto">
          <img src="image/ridho.jpg" width="160" height="160" class="rounded-circle"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
        <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
        <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium
          doloremque rem laudantium totam aperiam.</p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" width="160" height="160" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
        <p class="text-uppercase blue-text"><strong>Photographer</strong></p>
        <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
          mollit anim est fugiat nulla id eu laborum.</p>
          <br>
      </div>
      <!-- Grid column -->
          
      <!-- Grid column -->
      <div class="col-lg-6 col-md-6">
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" width="160" height="160" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
        <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
        <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
          totam officia voluptates perferendis voluptatibus aut.</p>
      </div>
      <!-- Grid column -->
      <!-- Grid column -->
      <div class="col-lg-6 col-md-6">
        <div class="avatar mx-auto">
          <img src="image/Rosyid.jpg" width="160" height="160" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
        <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
        <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
          totam officia voluptates perferendis voluptatibus aut.</p>
      </div>
      <!-- Grid column -->
    </div>
</div>
<!-- Grid row -->

</section>
<!-- Section: Team v.1 -->
</div>

    </main>
    <footer class="container">
      <a align = center>Kelompok 4 2021</a>
    </footer>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</html>