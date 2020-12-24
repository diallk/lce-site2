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
        <!--<img class="locomotive" src="assets/img/LOCO.png" alt="locomotive">   -->     
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

            <div class="col-md-4" style="margin-top: 5rem;">
                <div class="" align="center">
                    <h1 style="font-size:75px"><?php echo $lang['solutions']['it']['p0']["3"]; ?></h1>
                    <p ><?php echo $lang['solutions']['it']['p0']["4"]; ?></p>
                </div>
            </div>
           
        </div>
    </div>
    <!-- end of banner -->





      
      <!-- digit -->
      
               <!--<div class="container-fluid card"   style="color:orange;
          text-shadow: 3px 2px #000;size:100px;border-left-color: #FF8C00;">
    
            
            <h1><p id="explains">
            <?php echo $lang['solutions']['it']['title']; ?>   

          </p>
          </h1>
       
        
      </div>-->

      <CENTER>
            <div class="container-fluid " style=" background: linear-gradient(180deg, #f2f6fa 0%, #fff 100%);text-decoration : underline;"><br/><br/>
              <?php echo $lang['solutions']['it']['services']['s3']['title1']; ?>    
            </div>
      </CENTER>


      

    <!-- conception -->
    <section id="soft_dev_1" class="soft_dev section-bg "  >
<div class="container-fluid  "  > <br/><br/>

    <div class="container">
        
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right"> <br> 
                <div id="carouselExampleCaptionsK" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img src="assets/img/ia-5.png" class="d-block w-100"height="300px"  alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/ia-5.png" width="50%" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                        
                            <img src="assets/img/ia-5.png" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptionsK" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptionsK" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            
            <!--<img src="assets/img/services/software_dev.jpg" alt="Image solution 3" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left"> <br><br>

            <h3 class="text-o"><?php echo $lang['solutions']['telecoms']['p4']['title']; ?></h3><br/>
                  <p id="explains"><?php echo $lang['solutions']['telecoms']['p4']['subtitle']; ?></p> 
                  <p >
                     <ul id="explains">
                      <li><?php echo $lang['solutions']['it']['digit_trans']['content1']; ?></li>
                      </ul>
                  </p>   
               
            </div>

        </div><br/><br/>
    </div>
</div>
</section><br/>
<CENTER>
            <div class="container-fluid " style=" background: linear-gradient(180deg, #f2f6fa 0%, #fff 100%);text-decoration : underline;"><br/><br/>
              <?php echo $lang['solutions']['it']['services']['s3']['title2']; ?>    
            </div>
      </CENTER>


<section id="soft_dev_1" class="soft_dev section-bg "  >
<div class="container-fluid  " > <br/><br/>

    <div class="container">
        
        <div class="row content" id="">
           <!-- <div class="col-md-5 aos-init" data-aos="fade-right"> <br> 
                <div id="carouselExampleCaptionsK" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img src="assets/img/ia-5.png" class="d-block w-100"height="300px"  alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/ia-5.png" width="50%" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                        
                            <img src="assets/img/ia-5.png" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptionsK" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptionsK" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            
             </div>-->
           <!-- <div class="col-md-7 pt-7 aos-init" data-aos="fade-left"> <br><br>

            <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s3']['title']; ?></h3><br/><br/>
          
              <?php echo $lang['solutions']['it']['services']['s3']['details']; ?>            
            </p>
               
            </div>-->

        </div><br/><br/>
    </div>
</div>
</section><br/>
    <!-- end conception -->

    
   


    <!-- support -->
    <div class="container-fluid ">
      <div class="row">
         
      </div>
    </div>
    <!-- end support -->
    <div class="card-footer text-dark text-center">
    <h2><?php echo $lang['footer']['intro']; ?></h2><br/>
  
                                     
                                    <a href="https://www.facebook.com/lalocomotivesarl/" target="_blank"><img src="https://img.icons8.com/color/48/000000/facebook.png"/></a>
                                    
                                    <a href=""><img src="https://img.icons8.com/color/48/000000/instagram-new.png"/></a>                                    
                                
                                    <a href=""><img src="https://img.icons8.com/color/48/000000/twitter-squared.png"/></a>
                                
                                    <a href="https://www.linkedin.com/company/la-locomotive-sarl-ci" target="_blank"><img src="https://img.icons8.com/fluent/48/000000/linkedin.png"/></a>
                            
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