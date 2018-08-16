<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Voice Of asia</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container-fluid">
      <!-- Main container dont touch above tag -->
      <div class="d-block d-lg-none fixed">
      <div class="row mobile-menu pd-t-10 text-center" >
        <div class="col-2">
          <div class="inner">
          <a href="#"><img src="images/menu.png" alt="hamburger-menu" class="img-fluid icon" id="mobile-menu-button"></a>
          </div>
        </div>
        <div class="col-6">
          <a href="#"><img src="images/Logo.png" alt="Logo" class="img-fluid d-block"></a>
        </div>
        <div class="col-1">
          <a href="#"><img src="images/message.png" alt="message" class="img-responsive icon"></a>
        </div>
        <div class="col-1">
          <a href="#"><img src="images/ring.png" alt="message" class="img-responsive icon"></a>
        </div>
        <div class="col-1">
          <a href="#"><img src="images/settings.png" alt="message" class="img-responsive icon"></a>
        </div>
      </div>
      <div class="row mobile-searchbar d-block d-lg-none">
        <div class="col-12 pd-10">
          <form class="" action="search-result.php" method="post">
            <input type="text" class="form-control search-bar bg-light col-lg-10 col-12" placeholder="Search for mentors">
          </form>

        </div>
      </div>
    <div class="menu-sidebar size-w-80" id="mobile-menu">
      <div class="inner">
        <ul class="mobile-nav">
          <?php require_once "nav-tems-mobile.php" ?>
        </ul>
      </div>
    </div>
    </div>
    <div class="desktop-menu d-none d-lg-block ">
      <div class="row">
        <div class="col-2 desktop-logo">
          <div class="inner">
              <a href="#"><img src="images/Logo.png" alt="Logo" class="img-fluid d-inline"></a>
          </div>
        </div>
        <div class="col-3">
          <input type="text" class="form-control search-bar bg-light" placeholder="Search for mentors">
        </div>
        <div class="col-7">
          <div class="desktop-menubar" id="desktop-menu">
            <div class="inner">
              <ul class="desktop-nav float-right">
                <?php require "nav-items.php"; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
