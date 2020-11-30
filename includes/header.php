<?php require_once "./config/config.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lce-ci</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/facs.ico">
    <link href="assets/img/fac.ico" rel="apple-touch-icon">

    <link rel="stylesheet" href="assets/css/preload/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/color.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
<body onload="myFunction()" >

    <div class="preload">
        <img class="locomotive" src="assets/img/loco-0.png" alt="locomotive">        
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <h3 class="text-muted"><?php echo $lang['header']['h0']; ?> ...</h3>        
    </div>
    
    <section class="animate-bottom" id="particles-js" style="padding: 0;height:0px">
         <!-- navbar -->
 <div class="container-fluid  header-bar" >
                <div  class="container">
                    <nav class="navbar navbar-expand-lg navbar-light" id="nav" >
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png" width="100%" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link text" href="index.php"><?php echo $lang['header']['h1']; ?> <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $lang['header']['h2']; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="pages/service-it.php"><?php echo $lang['header']['h2_']['1']; ?></a>
                                  <a class="dropdown-item" href="pages/service-telecom.php"><?php echo $lang['header']['h2_']['2']; ?></a>
                                  <a class="dropdown-item" href="pages/service-logistique.php"><?php echo $lang['header']['h2_']['3']; ?></a>
                                  <a class="dropdown-item" href="pages/service-btp.php"><?php echo $lang['header']['h2_']['4']; ?></a>
                                  <a class="dropdown-item" href="pages/service-formatique.php"><?php echo $lang['header']['h2_']['5']; ?></a>
                                  
                                  <!--<div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>-->
                              </li>
                            <li class="nav-item">
                              <a class="nav-link text" href="#"><?php echo $lang['header']['h3']; ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <?php echo $lang['header']['h4']; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="pages/about.php"><?php echo $lang['header']['h4_']['1']; ?></a>
                                  <!--<a class="dropdown-item" href="pages/partners.php">Partenaires</a>-->
                                  <a class="dropdown-item" href="pages/join-team.php"><?php echo $lang['header']['h4_']['2']; ?></a>
                                  <a class="dropdown-item" href="pages/partners.php"><?php echo $lang['header']['h4_']['3']; ?></a>

                                  <a class="dropdown-item" href="#"><?php echo $lang['header']['h4_']['4']; ?></a>
                                  <a class="dropdown-item" href="pages/contact.php"  id="cbtn"><?php echo $lang['header']['h4_']['5']; ?></a>

                                  <!--<div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>-->
                              </li>
                          </ul>
                        </div>
                        <div class="ml-auto ml-5 mt-2"  style="right:-32px">
                            <span>Fr</span>
                            <a href="./index.php?lang=fr"><img src="./assets/img/lang/fr.png"
                                                                  width="26" height="26" alt=""
                                                                  title="<?php echo $lang['fr'];  ?>"
                                ></a>
                            <span>En</span>
                            <a href="./index.php?lang=en"><img src="./assets/img/lang/en.png"
                                                                  width="26" height="26" alt=""
                                                                  title="<?php echo $lang['en'];  ?>"
                                ></a>
                        </div>
                      </nav>
                      
                </div>
            </div>
            <!-- end nav --> <br>