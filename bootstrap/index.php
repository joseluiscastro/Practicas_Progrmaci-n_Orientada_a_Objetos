<?php
require ('headerindex.php');
?>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Contamos con una nueva carrera </h1>
        <p>"Tecnologias de la Información y Comumicación, Área en Redes y Telecomunicaciones (TIC-RT)".</p>
        <p><a href="#" class="btn btn-primary btn-lg" role="button">Leer más &raquo;</a></p>
      </div>


      <div class="page-header">
        <h1>Imagenes Destacadas</h1>
      </div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <center><img src="bootstrap/Images/tutoria.jpg" alt="First slide" width="750"></center>
          </div>
          <div class="item">
              <center><img src="bootstrap/Images/tutoria.jpg" alt="Second slide" width="750"></center>
          </div>
          <div class="item">
              <center><img src="bootstrap/Images/tutoria.jpg" alt="Third slide" width="750"></center>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>


    </div> <!-- /container -->
	
<?php
require ('footer.php');
?>