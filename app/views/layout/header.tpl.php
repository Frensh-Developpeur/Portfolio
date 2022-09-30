<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$viewData['assetsBaseUri']?>/css/linkandparameter.css">
    <link rel="stylesheet" href="<?=$viewData['assetsBaseUri']?>/css/loader.css">
    <link rel="stylesheet" href="<?=$viewData['assetsBaseUri']?>/css/keyframes.css">
    <link rel="stylesheet" href="<?=$viewData['assetsBaseUri']?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel= "stylesheet"  href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin = "anonyme" >
    <title>Portfolio SEB</title>
</head>
<body id="release">


<!-- NAV FROM SITE -->
<nav id="nav-page" class="navbar navbar-expand-lg bg-dark position-relative w-100">
  <a class="navbar-brand blue-title gloria font-size_hard mr-5" href="<?= $router->generate('main-home') ?>">portfolio seb</a>
  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto justify-content-between align-items-center">
      <li id="show-check" class="nav-item dropdown">
        <a id="arrow-mouve" class="nav-link text-light font-size_semi" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i id="arrow-down" class="fa-solid fa-arrow-down font-size_semi"></i>
        </a>
        <div class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-light text-uppercase josefin" href="<?= $router->generate('main-presentation') ?>">Présentation</a>
          <a class="dropdown-item text-light text-uppercase josefin" href="#resume">CV</a>
          <a class="dropdown-item text-light text-uppercase josefin" href="#project">Projets</a>
           <a class="dropdown-item text-light text-uppercase josefin" href="#contact">Contact</a>
        </div>
      </li>
   <div class="d-flex col-12">
       <li class="nav-item m-2 col-3">
              <a class="nav-link font-size_semi text-light" href="#"><i class="fa-brands fa-linkedin"></i></a>
          </li>
          <li class="nav-item m-2 col-3">
              <a class="nav-link font-size_semi text-light" href="#"><i class="fa-brands fa-facebook"></i></a>
          </li>
          <li class="nav-item m-2 col-3">
              <a class="nav-link font-size_semi text-light" href="#"><i class="fa-brands fa-instagram"></i></a>
          </li>
          <li class="nav-item m-2 col-3">
              <a class="nav-link font-size_semi text-light" href="#"><i class="fa-brands fa-twitter"></i></a>
          </li>
    </div>
    </ul>
  </div>
</nav>
<!-- NAV FROM SITE -->

<!-- BACKGROUND FROM SITE -->
<video class="img-home keyHome" autoplay muted loop src="<?=$viewData['assetsBaseUri']?>/img/home.mp4" alt="">
</video>
<!-- BACKGROUND FROM SITE -->
