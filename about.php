
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
        <!-- end nav -->
            <div class="row" align="center">
                <div class="col-md-4 ">

                </div>
                <div class="col-md-4" style="margin-top: 5rem;">
                    <div class="" align="center">
                        <h1 style="font-size:75px"><?php echo $lang['about']['f1']['1']; ?></h1>
                        <p ><?php echo $lang['about']['f1']['2']; ?></p>
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
        
        <!-- corps -->

        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6" style="padding: 2.5rem;">
                    <small class="text-o"><?php echo $lang['about']['lce']['1']; ?></small>
                    <h1>&ldquo;<?php echo $lang['about']['lce']['2']; ?>&rdquo;</h1>
                    <br>
                    <p>
                        <?php echo $lang['about']['lce']['3']; ?>
                                    
                    </p>
                    <br>
                    <p>
                        <a class="btn btn-lg" href="service-it.php" id="btn-modif"><?php echo $lang['about']['lce']['4']; ?></a>
                    </p>
                </div>
                <div class="col-md-6 "></div>
            </div>
        </div>

        <!-- end corps -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- value content -->

        <div class="container-fluid">
            <div class="container" style="padding: 2.5rem;">                
                <h1 style="">
                    <span class=" arete"></span>
                    <?php echo $lang['about']['lce']['5']; ?>                
                </h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 from-left" style="padding: 1.5rem;">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-muted">
                                  <!--<i class="material-icons icon-about" style="font-size: 50px;">headset_mic</i>-->
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="48" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="" fill="none"></path><g fill="#f55a00"><path d="M110.4025,0c-1.14219,-0.12094 -2.27094,0.36281 -3.01,1.29l-10.32,12.9c-1.63937,2.05594 -4.05812,3.49375 -6.665,3.87l-0.9675,0.1075c-4.59562,0.645 -13.37031,5.76469 -17.7375,16.4475c-4.36719,10.68281 -17.63,44.1825 -17.63,44.1825c-2.10969,5.28094 0.41656,11.32781 5.6975,13.4375c5.28094,2.12313 11.32781,-0.41656 13.4375,-5.6975l15.265,-38.3775h73.4225l9.5675,-15.3725c0.52406,-0.83312 0.71219,-1.85437 0.43,-2.795c-0.26875,-0.94062 -0.94062,-1.73344 -1.8275,-2.15l-58.48,-27.52c-0.36281,-0.17469 -0.80625,-0.28219 -1.1825,-0.3225zM55.7925,44.8275c-8.07594,0 -15.62781,4.04469 -20.1025,10.75l-14.0825,21.1775l-20.1025,13.33c-1.1825,0.79281 -1.70656,2.27094 -1.3975,3.655l2.9025,13.0075l10.8575,48.9125c0.34938,1.57219 1.72,2.6875 3.3325,2.6875h17.2v-7.095c0,-7.51156 6.18125,-13.6525 13.76,-13.6525c4.12531,0 7.79375,1.88125 10.32,4.73c2.52625,-2.84875 6.19469,-4.73 10.32,-4.73c4.12531,0 7.79375,1.88125 10.32,4.73c2.52625,-2.84875 6.19469,-4.73 10.32,-4.73c4.12531,0 7.79375,1.88125 10.32,4.73c2.52625,-2.84875 6.19469,-4.73 10.32,-4.73c7.59219,0 13.76,6.14094 13.76,13.6525v7.095h20.64c5.6975,0 10.32,-4.6225 10.32,-10.32c0,-5.6975 -4.6225,-10.32 -10.32,-10.32h-6.88c-1.90812,0 -3.44,-1.53187 -3.44,-3.44c0,-1.90812 1.53188,-3.44 3.44,-3.44h10.32c5.6975,0 10.32,-4.6225 10.32,-10.32c0,-5.6975 -4.6225,-10.32 -10.32,-10.32h-6.88c-1.90812,0 -3.44,-1.53187 -3.44,-3.44c0,-1.90812 1.53188,-3.44 3.44,-3.44h10.32c5.6975,0 10.32,-4.6225 10.32,-10.32c0,-5.6975 -4.6225,-10.32 -10.32,-10.32h-6.88c-1.90812,0 -3.44,-1.53187 -3.44,-3.44c0,-1.90812 1.53188,-3.44 3.44,-3.44h10.32c5.6975,0 10.32,-4.6225 10.32,-10.32c0,-5.6975 -4.6225,-10.32 -10.32,-10.32h-61.5975l-13.6525,34.0775c-2.6875,6.71875 -9.08375,10.75 -15.91,10.75c-2.12312,0 -4.36719,-0.34937 -6.45,-1.1825c-8.80156,-3.52062 -13.08812,-13.55844 -9.5675,-22.36l12.685,-31.605zM48.16,144.48c-3.80281,0 -6.88,3.05031 -6.88,6.7725v10.6425c0,3.72219 3.07719,6.7725 6.88,6.7725c3.80281,0 6.88,-3.05031 6.88,-6.7725v-10.6425c0,-3.72219 -3.07719,-6.7725 -6.88,-6.7725zM68.8,144.48c-3.80281,0 -6.88,3.05031 -6.88,6.7725v10.6425c0,3.72219 3.07719,6.7725 6.88,6.7725c3.80281,0 6.88,-3.05031 6.88,-6.7725v-10.6425c0,-3.72219 -3.07719,-6.7725 -6.88,-6.7725zM89.44,144.48c-3.80281,0 -6.88,3.05031 -6.88,6.7725v10.6425c0,3.72219 3.07719,6.7725 6.88,6.7725c3.80281,0 6.88,-3.05031 6.88,-6.7725v-10.6425c0,-3.72219 -3.07719,-6.7725 -6.88,-6.7725zM110.08,144.48c-3.80281,0 -6.88,3.05031 -6.88,6.7725v10.6425c0,3.72219 3.07719,6.7725 6.88,6.7725c3.80281,0 6.88,-3.05031 6.88,-6.7725v-10.6425c0,-3.72219 -3.07719,-6.7725 -6.88,-6.7725z"></path></g></g></svg>
                              </h6>
                              <h5 class="card-title text-muted"><?php echo $lang['about']['lce']['5_']['1']['p1']; ?></h5>                              
                              <small class="card-text"><?php echo $lang['about']['lce']['5_']['1']['p2']; ?></small>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-3 from-left" style="padding: 1.5rem;">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-muted">
                                  <i class="material-icons icon-about" style="font-size: 50px;">wb_sunny</i>
                              </h6>
                              <h5 class="card-title text-muted"><?php echo $lang['about']['lce']['5_']['2']['p1']; ?></h5>                              
                              <small class="card-text"><?php echo $lang['about']['lce']['5_']['2']['p2']; ?></small>
                            </div>
                        </div>   
                    </div>
                    <div class="col-md-3 from-right" style="padding: 1.5rem;">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-muted">
                                  <i class="material-icons icon-about" style="font-size: 50px;">visibility_off</i>
                              </h6>
                              <h5 class="card-title text-muted"><?php echo $lang['about']['lce']['5_']['3']['p1']; ?></h5>                              
                              <small class="card-text"><?php echo $lang['about']['lce']['5_']['3']['p2']; ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 from-right" style="padding: 1.5rem;">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-muted">
                                  <i class="material-icons icon-about" style="font-size: 50px;">check_circle</i>
                              </h6>
                              <h5 class="card-title text-muted"><?php echo $lang['about']['lce']['5_']['4']['p1']; ?></h5>                              
                              <small class="card-text"><?php echo $lang['about']['lce']['5_']['4']['p2']; ?> <br><br></small>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
               
            
        </div>

        <!-- end value content -->

        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- members of teams 

        <div class="container-fluid ">
            <div class="container-fluid " style="padding: 2.5rem;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="container" style="margin-left: 5.4rem;">
                            <h1>
                                <span class=" arete"></span>
                                Notre Equipe
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-9 ">

                    </div>
                </div>
            </div>
            
            <div class="container-fluid ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 " align="center" style="padding: 1.5rem;">
                            <img src="../img/man-4568762_1280.jpg" width="70%" />
                            <div>
                                
                                <small class="text-muted">CTO</small>
                                <h4 class="text-dark">JOHN JAY</h4>
                                <span class="text-o">john.jay@lce-ci.ci</span>
                            </div>
                        </div>
                        <div class="col-md-3 "  align="center" style="padding: 1.5rem;">
                            <img src="../img/man-4568762_1280.jpg" width="70%" />
                            <div>
                                
                                <small class="text-muted">CTO</small>
                                <h4 class="text-dark">JOHN JAY</h4>
                                <span class="text-o">john.jay@lce-ci.ci</span>
                            </div>
                        </div>
                        <div class="col-md-3 "  align="center" style="padding: 1.5rem;">
                            <img src="../img/man-4568762_1280.jpg" width="70%" />
                            <div>
                                
                                <small class="text-muted">CTO</small>
                                <h4 class="text-dark">JOHN JAY</h4>
                                <span class="text-o">john.jay@lce-ci.ci</span>
                            </div>
                        </div>
                        <div class="col-md-3 "  align="center" style="padding: 1.5rem;">
                            <img src="../img/man-4568762_1280.jpg" width="70%" />
                            <div>
                                
                                <small class="text-muted">CTO</small>
                                <h4 class="text-dark">JOHN JAY</h4>
                                <span class="text-o">john.jay@lce-ci.ci</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         end of member -->

        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- rejoindre partenariat 

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">
                    <h2>Nous rejoindre</h2>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas quasi distinctio modi suscipit vitae iste officiis dolore minus nesciunt doloribus sunt, perspiciatis maiores, ab error aperia</span>
                    <button class="btn">+</button>
                </div>
                <div class="col-md-6 ">
                    <h2>Devenir partenaire</h2>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas quasi distinctio modi suscipit vitae iste officiis dolore minus nesciunt doloribus sunt, perspiciatis maiores, ab error aperia</span>
                    <button class="btn">+</button>
                </div>
            </div>
        </div> -->


      
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
