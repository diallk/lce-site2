<?php include_once "./config/config.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lce</title>
    <link rel="stylesheet" href="assets/css/preload/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/color.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body onload="myFunction()" >
    <div class="preload">
        <img class="locomotive" src="assets/img/LOCO.png" alt="locomotive">        
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <h3 class="text-muted"><?php echo $lang['header']['h0']; ?> ...</h3>        
    </div>
    
    <section class="animate-bottom" id="particles-js" style="padding: 0;height:0px">
        <!-- banner section -->
<div class="container-fluid banner">
            <!-- navbar -->
        <div class="container-fluid  header-bar " >
            <div  class="container">
                <nav class="navbar navbar-expand-lg navbar-light" id="nav" >
                    <a class="navbar-brand" href=" index.php">
                        <img src="assets/img/logo1.png" width="100%" alt="">
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
                              <a class="dropdown-item" href="service-it.php"><?php echo $lang['header']['h2_']['1']; ?></a>
                              <a class="dropdown-item" href="service-telecom.php"><?php echo $lang['header']['h2_']['2']; ?></a>
                              <a class="dropdown-item" href="service-logistique.php"><?php echo $lang['header']['h2_']['3']; ?></a>
                              <a class="dropdown-item" href="service-btp.php"><?php echo $lang['header']['h2_']['4']; ?></a>
                              <a class="dropdown-item" href="service-formation.php"><?php echo $lang['header']['h2_']['5']; ?></a>

                              
                          </li>
                        <li class="nav-item">
                          <a class="nav-link text text-dark" href="boutique.php"><?php echo $lang['header']['h3']; ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $lang['header']['h4']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="about.php"><?php echo $lang['header']['h4_']['1']; ?></a>
                              <a class="dropdown-item" href="join-team.php"><?php echo $lang['header']['h4_']['2']; ?></a>
                              <a class="dropdown-item" href="partners.php"><?php echo $lang['header']['h4_']['3']; ?></a>                              
                              <a class="dropdown-item" href="#"><?php echo $lang['header']['h4_']['4']; ?></a>
                              <a class="dropdown-item" href="contact.php"  id="cbtn"><?php echo $lang['header']['h4_']['5']; ?></a>

                                
                          </li>
                      </ul>
                      
                    </div>
                    <div class="ml-auto ml-5 mt-2"  style="right:-32px">
                            <span>Fr</span>
                            <a href="./service-it.php?lang=fr"><img src="./assets/img/lang/fr.png"
                                                                  width="26" height="26" alt=""
                                                                  title="<?php echo $lang['fr'];  ?>"
                                ></a>
                            <span>En</span>
                            <a href="./service-it.php?lang=en"><img src="./assets/img/lang/en.png"
                                                                  width="26" height="26" alt=""
                                                                  title="<?php echo $lang['en'];  ?>"
                                ></a>
                        </div>
                  </nav>
            </div>
        </div>
            
              <div class="row" align="center">
                  <div class="col-md-4 ">
    
                  </div>
                  <div class="col-md-4" style="margin-top: 1.5rem;">
                      <div class="" align="center">
                          <h1 style="font-size:75px"><?php echo $lang['about']['contact']['f0']['0']; ?></h1>
                          <p ><?php echo $lang['about']['contact']['f0']['1']; ?></p>
                      </div>
                  </div>
                  <div class="col-md-4 ">
    
                  </div>
                  
                  
                  <!--<div class="col-md-4 ">
                      <h1>A propos</h1>
                      <p style="margin-left: 1rem;">Accueil - A propos</p>
                  </div>
                  <div class="col-md-8 ">
    
                  </div>-->
              </div>
          </div>
          <!-- end of banner -->
    
            <!-- corps contact -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7" style="padding: 2rem;">                    
                        <div style="width: 70%;margin-left:4rem;margin-bottom:3.5rem">                      
                            <h2>
                              <span class="bord arete"></span>
                              <?php echo $lang['about']['contact']['f1']; ?>
                            </h2>
                        </div>
                        <form style="width: 70%;margin-left:7rem">                        
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4"><?php echo $lang['about']['contact']['f2']; ?></label>
                                <input type="email" class="form-control form-control-lg " id="inputEmail4" placeholder="Ex : xxx xxx" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4"><?php echo $lang['about']['contact']['f3']; ?></label>
                                <input type="password" class="form-control form-control-lg" id="inputPassword4" placeholder="Ex : xxxx@yyy.com" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress"><?php echo $lang['about']['contact']['f4']; ?></label>
                              <input type="text" class="form-control form-control-lg" id="inputAddress" placeholder="Ex : 00000000" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)" >
                            </div>
                            <div class="form-group">
                              <label for="inputAddress2"><?php echo $lang['about']['contact']['f5']; ?></label>
                              <input type="text" class="form-control form-control-lg" id="inputAddress2" placeholder="Ex : xxxx" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                  <label for="textareamessage"><?php echo $lang['about']['contact']['f6']; ?></label>
                                  <textarea name="" id="" rows="3" class="form-control form-control-lg" placeholder="<?php echo $lang['about']['contact']['f7']; ?>..." style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)"></textarea>
                              </div>
                            </div>                        
                            <br>
                            <button type="submit" id="btn-modif" class="btn btn-lg btn-animate" style="width: 40%;"><?php echo $lang['about']['contact']['f8']; ?></button>
                          </form>
                    </div>
                    <div class="col-md-5 ">
                        <br><br><br>
                       <div class="container">
                          <div class="row  contact-pannel from-right">
                            <h3 class="weight-1">                          
                            <?php echo $lang['about']['contact']['f9']; ?>                          
                            </h3>
                            <div class="container ">
                                <span class="text-muted">
                                <?php echo $lang['about']['contact']['f10']; ?>
                                </span>
                                <span class="text-muted">
                                <?php echo $lang['about']['contact']['f11']; ?>  
                                </span>
                            </div>
                          </div>
                          <div class="dropdown-divider" style="width: 70%;"></div>
                          <div class="row  contact-pannel from-right">
                            
                            <h3 class="weight-1">
                              <strong>
                              <?php echo $lang['about']['contact']['f12']; ?>
                              </strong>
                            </h3>
                            <div class="container ">
                                <span class="text-muted">
                                <?php echo $lang['about']['contact']['f13']; ?> <br>
                                </span>
                                <span class="text-muted">
                                <?php echo $lang['about']['contact']['f14']; ?> <br>
                                </span>
                                <span class="text-muted">
                                <?php echo $lang['about']['contact']['f15']; ?>
                                </span>
                            </div>
                          </div>
                       </div>
                        <!--<div class="row" style="margin:3rem">
                            <h4>Informations Contact</h4>
                        </div>                        
                            <div class="row">
                                <div class="col-md-2 bord">
                                  <i class="material-icons">email</i>
                                </div>
                                <div class="col-md-10 bord">
                                    <p><b>Email</b></p>
                                    <span>hotline@lce-ci.com</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 bord">
                                  <i class="material-icons">call</i>
                                </div>
                                <div class="col-md-10 bord">
                                    <p><b>T??l??phone</b></p>
                                    <span>+225 46 66 77 66 / +225 07 96 96 72</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 bord">
                                  <i class="material-icons">location_on</i>
                                </div>
                                <div class="col-md-10 bord">
                                    <p><b>Adresse</b></p>
                                    <span>C??te d'Ivoire, Cocody nouveau CHU Angr??, R??sidence Bissi?? 1er Etage Appt D</span>
                                </div>
                            </div>-->
                    </div>
                </div>
            </div>
    <!-- end corps contact -->
            
    
            <!-- 
              corps separate
            -->
          <br><br>
          <br><br>
 <!-- end support -->

 <footer >
            <div class="card-footer text-dark text-center">
                   <h2><?php echo $lang['footer']['intro']; ?></h2><br/>
                                
                                <div class="row ">
                                    <div class="col-md-3 ">
                                        <a href="https://www.facebook.com/lalocomotivesarl/" target="_blank"><img src="https://img.icons8.com/color/48/000000/facebook.png"/></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href=""><img src="https://img.icons8.com/color/48/000000/instagram-new.png"/></a>                                    
                                    </div>
                                    <div class="col-md-3 ">
                                        <a href=""><img src="https://img.icons8.com/color/48/000000/twitter-squared.png"/></a>
                                    </div>
                                    <div class="col-md-3 ">
                                        <a href="https://www.linkedin.com/company/la-locomotive-sarl-ci" target="_blank"><img src="https://img.icons8.com/fluent/48/000000/linkedin.png"/></a>
                                    </div>
                                </div><br/>
                    </div>
      
                <div class="card" style="padding: 3.5rem;border:none;background-color:rgba(223, 221, 219, 0.212);">
                               
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2">
                               
                            </div>
                            <div class="col-sm-2">
                              <h4><?php echo $lang['footer']['1']; ?></h4>
                              <ul style="list-style: none;">
                                  <a href="" class="t"><li><?php echo $lang['footer']['1_']['1']; ?></li></a>
                                  <a href="" class="t"><li><?php echo $lang['footer']['1_']['2']; ?></li></a>
                                  <a href="" class="t"><li><?php echo $lang['footer']['1_']['3']; ?></li></a>
                                  <a href="" class="t"><li><?php echo $lang['footer']['1_']['4']; ?></li></a>
                              </ul>
                          </div>
                            <div class="col-sm-2">
                                <h4><?php echo $lang['footer']['2']; ?></h4>
                                <ul style="list-style: none;">
                                    <a href="" class="t"><li><?php echo $lang['footer']['2_']['1']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['2_']['2']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['2_']['3']; ?></li></a>
                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <h4><?php echo $lang['footer']['3']; ?></h4>
                                <ul style="list-style: none;">
                                    <a href="" class="t"><li><?php echo $lang['footer']['3_']['1']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['3_']['2']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['3_']['3']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['3_']['4']; ?></li></a>
                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <h4><?php echo $lang['footer']['4']; ?></h4>
                                <ul style="list-style: none;">
                                    <a href="" class="t"><li><?php echo $lang['footer']['4_']['1']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['4_']['2']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['4_']['3']; ?></li></a>
                                    <a href="" class="t"><li><?php echo $lang['footer']['4_']['4']; ?></li></a>
                                </ul>
                            </div>                      
                          <div class="col-sm-2">
                            <h4><?php echo $lang['footer']['5']; ?></h4>
                            <ul style="list-style: none;">
                                <a href="" class="t"><li><?php echo $lang['footer']['5_']['1']; ?></li></a>
                                <a href="" class="t"><li><?php echo $lang['footer']['5_']['2']; ?></li></a>
                                <a href="" class="t"><li><?php echo $lang['footer']['5_']['3']; ?></li></a>
                                <a href="" class="t"><li><?php echo $lang['footer']['5_']['4']; ?></li></a>
                            </ul>
                        </div>
                            <!--<div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>-->
                            </div>
                          </div>
                    </div>
                    <div class="card-footer text-dark text-center">
                        ?? Copyright 2020 LCE-CI
                    </div>
                  </div>
            </footer> 
 
 
    
    
            </section>

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/particles.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>        