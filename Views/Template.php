<?php

namespace Views;


new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turismo</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <link href="Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="Public/css/grayscale.min.css" rel="stylesheet">
</head>

<body>
<nav class=" bg-light navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
    <div class="container">
   <a   src="valle.jpg" width="20" height="20" class="navbar-brand js-scroll-trigger" href="#modal_sesion" class="btn btn-primary js-scroll-trigger" id="sesion">EDOMEX</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#hace">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#info">Informes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contac">Contactanos</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
<br><br><br><br><br>

<header class="bg-white">
<div class="container">






 <div class="row">
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="valle.jpg" alt="Card image cap" width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Valle de Bravo <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Valle de Bravo es una oportunidad para disfrutar las atracciones de los grandes clubes de playa sin tener que salir del centro del país.</p>
               <a href="#" class="float-right">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
        <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="oro.jpg" alt="Card image cap" width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">El Oro<a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Pueblo Magico en el Estado de México, es una de las antiguas glorias mineras de esta entidad del país y aún es un imán turístico.</p>
               <a href="#" class="float-right">Leer más  <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
        <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="mani.jpg" alt="Card image cap"width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Malinalco<a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Pueblo Magico en el Estado de México,tiene hermosos paisajes naturales, una rica historia y un destacado legado arquitectónico.</p>
               <a href="#" class="float-right">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>
    <div class="row">
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="mete.jpg" alt="Card image cap"width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Metepec<a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Pueblo Magico en el Estado de México, al sur de Toluca, a unos siete u ocho kilómetros de la capital mexiquense, se encuentra la encantadora comunidad de Metepec.</p>
               <a href="#" class="float-right">Leer más  <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
        <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="tepo.jpg" alt="Card image cap"width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Tepotzotlan <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Pueblo Magico en el Estado de México, sencilla y preserva su proyección colonial y además, posee una de las joyas más admirables de la cultura virreinal en nuestro país.</p>
               <a href="#" class="float-right">Leer más  <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
        <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="acu.jpg" alt="Card image cap"width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Aculco <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Pueblo Magico en el Estado de México, este pintoresco pueblo tiene la característica de tener muy cercano todavía a habitantes de la cultura Otomi.</p>
               <a href="#" class="float-right">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="ixta.jpg" alt="Card image cap"width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Ixtapan de la Sal<a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Magico en el Estado de México, debido a su templado clima, y a sus manantiales de aguas termales con propiedades curativas, este lugar ha sido sitio propicio para el desarrollo de balnearios.</p>
               <a href="#" class="float-right">Leer más  <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
        <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="teo.jpg" alt="Card image cap" width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Teotihuacan <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Pueblo Magico en el Estado de México, tiene muchos aspectos turísticos interesantes, más allá de sus pirámides se trata de una comunidad colmada de aspectos valiosos.</p>
               <a href="#" class="float-right">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
        <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="marti.jpg" alt="Card image cap" width="150" height="220">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">San Martin de las Piramides <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">San Martin de las Piramides  Pueblo Mágico del Estado de México, por el área prehispánica que se encuentra en su territorio.</p>
               <a href="#" class="float-right">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>
</header>

        <body>

        <main>
        <?php
    }

    public static function footer()
    {
        ?>
        </main>
        </body>
        <footer class="bg-light small text-center text-black-100">
    <div class="container">
        Todos los derechos reservados  TESVB 2018
    </div>
</footer>

    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="Public/vendor/jquery/jquery.min.js"></script>
    <script src="Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="Public/js/grayscale.min.js"></script>
        <!------------------------------------------------------------>

        </html>
        <?php
    }
}

