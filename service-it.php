<?php ini_set('display_errors', 1);

include_once "./config/config.php" ?>

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
                              <a class="dropdown-item" href="#"><?php echo $lang['header']['h2_']['3']; ?></a>
                              <a class="dropdown-item" href="#"><?php echo $lang['header']['h2_']['4']; ?></a>
                              <a class="dropdown-item" href="#"><?php echo $lang['header']['h2_']['5']; ?></a>

                              
                          </li>
                        <li class="nav-item">
                          <a class="nav-link text text-dark" href="#"><?php echo $lang['header']['h3']; ?></a>
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
            <div class="col-md-4" style="margin-top: 5rem;">
                <div class="" align="center">
                    <h1 style="font-size:75px"><?php echo $lang['solutions']['it']['p0']["1"]; ?></h1>
                    <p ><?php echo $lang['solutions']['it']['p0']["2"]; ?></p>
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

      
      <!-- digit -->

      <div class="container-fluid" align="justify">
        <div class="container" style="width: 100%;">
            <!--<h2 >TRANSFORMATION DIGITALE</h2>-->
            <br>
            <p id="explains">
            <?php echo $lang['solutions']['it']['p1']; ?>            
          </p>
        </div>

        <!--<div class="container bord">
          <div class="row">
            <div class="col-md-3 bord" style="padding: 1rem;" align="center">
              <div class="circle bord">

              </div>
              <p>Subject</p>
            </div>
            <div class="col-md-3 bord" style="padding: 1rem;" align="center">
              <div class="circle bord">

              </div>
              <p>Subject</p>
            </div>
            <div class="col-md-3 bord" style="padding: 1rem;" align="center">
              <div class="circle bord">

              </div>
              <p>Subject</p>
            </div>
            <div class="col-md-3 bord" style="padding: 1rem;" align="center">
              <div class="circle bord">

              </div>
              <p>Subject</p>
            </div>
          </div>
        </div>-->
      </div>
      <!-- end digit -->
      <br>
      <br>
      <br>
      <br>
      <!-- services -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 from-left" align="center">
              <img src="assets/img/cloud-4.png" width="50%"  alt="">
          </div>
          <div class="col-md-5 info">
              <div class="lce-service-0" style="padding-left:5rem;padding-right:3rem;border-left:solid 1px;">
                <h2 class="text-o"><?php echo $lang['solutions']['it']['services']['title']; ?></h2>
                <p id="explains"><?php echo $lang['solutions']['it']['services']['details']; ?></p>                
              </div>
          </div>
        </div>
        <div class="row" style="padding: 3rem;">
          <div class="col-md-6 info lce-design-card">
            <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s1']['title']; ?></h3>
            <p id="explains">
            <?php echo $lang['solutions']['it']['services']['s1']['details']; ?>
            </p>
          </div>
          <div class="col-md-6 info info lce-design-card" id="et">
            <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s2']['title']; ?></h3>
            <p id="explains">
            <?php echo $lang['solutions']['it']['services']['s2']['details']; ?>
            </p>
          </div>
        </div>
        <div class="row" style="padding: 3rem;" >         
          <div class="col-md-6 info lce-design-card" id="et">            
            <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s3']['title']; ?></h3>
            <p id="explains">
              <?php echo $lang['solutions']['it']['services']['s3']['details']; ?>            
            </p>
          </div>
          <div class="col-md-6 info info lce-design-card" id="et">
            <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s4']['title']; ?></h3>
            <p >
              <ul id="explains">
                <li><?php echo $lang['solutions']['it']['services']['s4']['p1']; ?></li>
                <li><?php echo $lang['solutions']['it']['services']['s4']['p2']; ?></li>
                <li><?php echo $lang['solutions']['it']['services']['s4']['p3']; ?></li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <!-- end services -->

      <!-- banner contact style="margin-top:10rem;background:url(' img/3380180.jpg');background-position-y: 15px"-->
      <div class="container-fluid " style="margin-top: 18rem;">
          <!--<div class="container " style="padding: 5rem;">
            <div class="row">
              <div class="col-md-7 ">
                <h4>Vous êtes intéressés par l'un de nos services? N'hésitez plus ! </h4>
              </div>
              <div class="col-md-5 ">
                <button class="btn  btn-lg btn-warning" id="btn-modif" style="margin-top: 0.5rem;">Contactez-nous</button>
              </div>
            </div>
          </div>-->
      </div>
      <!-- end of banner contact -->
      <br>
      <br>
      <br>
      <br>

      <!-- Intelligence artificielle -->
      <div class="container-fluid ">
        <div class="row">
          <div class="col-md-5  info">
              <div class="lce-service-0" style="border-right: solid 1px;padding-right:2rem;padding-left:4rem">
                  <h2 class="text-o"><?php echo $lang['solutions']['it']['intelligence']['title']; ?></h2>
                  <p id="explains"><?php echo $lang['solutions']['it']['intelligence']['details']; ?></p>                
              </div>
          </div>
          <div class="col-md-7 from-right " align="center">
            <img src="assets/img/ia-5.png" width="50%" alt="service2">
          </div>
        </div>
        <div class="row" style="padding: 3rem;">
          <div class="col-md-6 info lce-design-card" >
            <h3 class="text-o"><?php echo $lang['solutions']['it']['intelligence']['s1']['title']; ?></h3>
            <p id="explains">
            <?php echo $lang['solutions']['it']['intelligence']['s1']['details']; ?>            </p>
          </div>
          <div class="col-md-6 info info lce-design-card" id="et">
            <h3 class="text-o"><?php echo $lang['solutions']['it']['intelligence']['s2']['title']; ?></h3>
            <p id="explains">              
            <?php echo $lang['solutions']['it']['intelligence']['s2']['details']; ?>
            </p>
          </div>
        </div>
        <div class="row" style="padding: 3rem;" >         
          <div class="col-md-6 info lce-design-card " id="et" >            
            <h3 class="text-o"><?php echo $lang['solutions']['it']['intelligence']['s3']['title']; ?></h3>
            <p id="explains">
              <?php echo $lang['solutions']['it']['intelligence']['s3']['details']; ?>
            </p>
          </div>
          <!--<div class="col-md-6 info info lce-design-card">
            <h3>Solution pour call center</h3>
            <p>
              La Locomotive propose des solutions de centre d'appels pour mieux fidéliser vos clients.
            </p>
          </div>-->
        </div>
      </div>
      <!-- end of IA-->


      <!-- banner carriere 
      <div class="container-fluid" style="margin-top:9rem;background-image:url(' img/147.jpg');background-size:cover;height:300px">
        <div class="container " style="padding: 5rem;transform:translateY(18%)">
          <div class="row" style="" align="center">
            <div class="col-md-7">
              <h4>Vous êtes intéressés par notre vision, nos objectifs? Rejoingnez-nous maintenant ! </h4>
            </div>
            <div class="col-md-5 ">
              <button class="btn  btn-lg btn-warning" id="btn-modif" style="margin-top: 0.5rem;">Rejoignez-nous</button>
            </div>
          </div>
        </div>
    </div>
     end of banner carriere -->
     
    <br>
    <br>
    <br>
    <br>

    <!-- sécurité 
    <div class="container-fluid bord">
      <div class="row">
        <div class="col-md-6 bord">
          <h3>SECURITE</h3>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Cyber Sécurité</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Vidéo Surveillance</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tracking</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">..1.</div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">..2.</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">..3.</div>
          </div>
        </div>
        <div class="col-md-6 bord">
            img
        </div>
      </div>
    </div>
     end securite -->

    <br>
    <br>
    <br>
    <br>

    <!-- Iot -->
    <div class="container-fluid top-9">
      <div class="row" >
        <div class="col-md-6 from-left" style="padding: 3rem;">
            <img src="assets/img/1145.jpg" width="100%" id="Image-nav" alt="" style="border-radius: 5%;">
        </div>
        <div class="col-md-6 info" style="padding: 3rem;">
          <h3 class="text-o"><?php echo $lang['solutions']['it']['internetOF']['title']; ?></h3>
          <br>
          <!--<nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true">RFID</a>
              <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile" aria-selected="false">NFC</a>
              <a class="nav-item nav-link" id="nav-contact-tab1" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" style="padding: 1rem;" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab1">
                L'identification par radiofréquence est une technologie utilisée pour stocker et récupérer des données à distance via des balises. La Locomotive propose cette solution pour la gestion des stocks, l'identification des personnes, les contrôles d'accès ou la traçabilité logistique.
            </div>
            <div class="tab-pane fade" id="nav-profile1" role="tabpanel" style="padding: 1rem;" aria-labelledby="nav-profile-tab1">
                La technologie NFC – Near Field Communication – permet à un smartphone de se connecter et d’échanger des données à courte distance avec un autre dispositif (smartphone, produit…) équipé de la même technologie.
                La Locomotive propose cette solution pour accompagner les entreprises dans le déploiement d'objets connectés.
            </div>
            <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">...2</div>
          </div>-->
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab1" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo $lang['solutions']['it']['internetOF']['s1']['title']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><?php echo $lang['solutions']['it']['internetOF']['s2']['title']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo $lang['solutions']['it']['internetOF']['s3']['title']; ?></a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab1">
              <?php echo $lang['solutions']['it']['internetOF']['s1']['details']; ?>            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <?php echo $lang['solutions']['it']['internetOF']['s2']['details']; ?>            
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <?php echo $lang['solutions']['it']['internetOF']['s3']['details']; ?>            
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Iot -->
    <br>
    <br>
    <br>
  <!-- footer -->
  <footer >
    
                <div class="card" style="padding: 3.5rem;border:none;background-color:rgba(223, 221, 219, 0.212);">               
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-2">
                                <h2><?php echo $lang['footer']['intro']; ?></h2>
                                
                                <!--<div class="row">
                                    <div class="col-md-3">
                                        <img src="https://img.icons8.com/color/48/000000/facebook.png"/>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="https://img.icons8.com/color/48/000000/twitter-squared.png"/>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="https://img.icons8.com/fluent/48/000000/linkedin.png"/>
                                    </div>
                                </div>-->
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
                                </div>
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
                        © Copyright 2020 LCE-CI
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