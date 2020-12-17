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
            <div class="col-md-4" style="margin-top: 1.5rem;">
                <div class="" align="center"><br/><br/>
                    <h1 style="font-size:75px"><?php echo $lang['solutions']['telecoms']['p0']['0']; ?></h1>
                    <p ><?php echo $lang['solutions']['telecoms']['p0']['1']; ?></p>
                </div>
            </div>
            <div class="col-md-4 ">

            </div>
            
            
          <!-- <div class="col-md-4 ">
                <h1>A propos</h1>
                <p style="margin-left: 1rem;">Accueil - A propos</p>
            </div>
            <div class="col-md-8 ">

            </div>-->
        </div>
    </div>
    
            <CENTER><div class="container-fluid " style=" background: linear-gradient(180deg, #f2f6fa 0%, #fff 100%);"style="box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;" ><br/><br/>
            <h1 style="">
              <?php echo $lang['solutions']['telecoms']['p1']['title1']; ?>
            </h1>
               
            </div></CENTER>
    <!-- end of banner -->

      <br>
      
      

    <!-- conception -->
    <section id="soft_dev_1" class="soft_dev section-bg " >

    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-4  info from-left " align="center">
            <img src="assets/img/telecom-2-1.png" width="50%" alt="">
        </div>
        <div class="col-md-7  info" style="padding-right: 3rem;">
          <h3 class="text-o"><?php echo $lang['solutions']['telecoms']['p2']['title']; ?></h3><br/><br/>
          <div >
              <h4><?php echo $lang['solutions']['telecoms']['p2']['subtitle']; ?></h4>
              <p>
                <?php echo $lang['solutions']['telecoms']['p2']['content1']; ?>
                <?php echo $lang['solutions']['telecoms']['p2']['content2']; ?>

              </p>
          </div>
        </div>
      </div>
    </div>


    
    </section>
   

    <!-- realisation -->
   

      <section id="soft_dev_1" class="soft_dev section-bg from-right " style="box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),

;" >
      <div class="container-fluid ">
      <div class="row">
        <div class="col-md-6  info" style="padding-left: 3rem;"><br/>
          <h3 class="text-o"><?php echo $lang['solutions']['telecoms']['p1']['title']; ?></h3><br/><br/> 
          <div>
              <h4>
                <?php echo $lang['solutions']['telecoms']['p1']['subtitle']; ?>              
              </h4>
              <p>
                <?php echo $lang['solutions']['telecoms']['p1']['content1']; ?>              
              </p>
              <p>
                <?php echo $lang['solutions']['telecoms']['p1']['content2']; ?>              
              </p>
          </div>
          
        </div>
        <div class="col-md-6 info from-right" align="center">
          <br><br>
            <img src="assets/img/telecom-0.png" width="60%" alt="">
        </div>
      </div>
</section>





<section id="soft_dev_1" class="soft_dev section-bg "  style="box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
 
;">

    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-4  info from-left " align="center">
            <img src="assets/img/telecom-2-1.png" width="50%" alt="">
        </div>
        <div class="col-md-7  info" style="padding-right: 3rem;">
           <div >
          <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s1']['title']; ?></h3><br/><br/>
             <div>
              <h4>
              <?php echo $lang['solutions']['it']['services']['s1']['details']; ?>
              </h4>
              
          </div>
        </div>
      </div>
    </div>
    
    </section>
<section id="soft_dev_1" class="soft_dev section-bg from-right "  >
      <div class="container-fluid ">
      
      <div class="row">
        <div class="col-md-6  info" style="padding-left: 3rem;"><br/><br/>
        <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s2']['title']; ?></h3><br/><br/>
             <div>
              <h4>
              <?php echo $lang['solutions']['it']['services']['s2']['details']; ?>
              </h4>
              
          </div>
          
        </div>
        <div class="col-md-5 info " align="center">
          
            <img src="assets/img/telecom-0.png" width="60%" alt="">
        </div>
      </div>
</section>


<section id="soft_dev_1" class="soft_dev section-bg " >

    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-4  info from-left " align="center">
            <img src="assets/img/telecom-2-1.png" width="50%" alt="">
        </div>
        <div class="col-md-7  info" style="padding-right: 3rem;">
           <div >
           <h3 class="text-o"><?php echo $lang['solutions']['it']['services']['s4']['title']; ?></h3><br/><br/>
            <div>
             <ul id="explains">
                <li><?php echo $lang['solutions']['it']['services']['s4']['p1']; ?></li>
                <li><?php echo $lang['solutions']['it']['services']['s4']['p2']; ?></li>
                <li><?php echo $lang['solutions']['it']['services']['s4']['p3']; ?></li>
              </ul>
              
          </div>
        </div>
      </div>
    </div>
    
    </section>



    <section id="soft_dev_1" class="soft_dev section-bg from-right "  >
      <div class="container-fluid ">
      
      <div class="row">
        <div class="col-md-6  info" style="padding-left: 3rem;"><br/><br/>
        <h3 class="text-o"><?php echo $lang['solutions']['it']['intelligence']['s3']['title']; ?></h3><br/><br/>
                
                  <div>
              
                 <p id="explains">
              <?php echo $lang['solutions']['it']['intelligence']['s3']['details']; ?>
                </p>
              
          </div>
          
        </div>
        <div class="col-md-5 info " align="center">
          
            <img src="assets/img/telecom-0.png" width="60%" alt="">
        </div>
      </div>
</section>




  

<section id="soft_dev_1" class="soft_dev section-bg "  >

    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-4  info from-left " align="center">
            <img src="assets/img/telecom-2-1.png" width="50%" alt="">
        </div>
        <div class="col-md-7  info" style="padding-right: 3rem;">
           <div >
           <h3 class="text-o"><?php echo $lang['solutions']['it']['intelligence']['s2']['title']; ?></h3><br/>
              <div>
              <p id="explains">              
            <?php echo $lang['solutions']['it']['intelligence']['s2']['details']; ?>
            </p>
              
          </div>
        </div>
      </div>
    </div>
    
    </section>

    <!-- end realisation -->

     
    

    <!-- operate -->
    <section id="soft_dev_1" class="soft_dev section-bg " style=" background: linear-gradient(180deg,  #fff  0%,#f2f6fa 100%);" >
    <div class="container-fluid ">
    <div class="row">
    <div class="col-md-6  info from-right " align="center">
        <br><br>
          <img src="assets/img/telecom-3.png" width="100%" alt="">
      </div>
      <div class="col-md-6  info" style="padding-left: 3rem;"><br/><br/><br/><br/><br/><br/>
        <h3 class="text-o"><?php echo $lang['solutions']['telecoms']['p3']['title']; ?></h3><br/><br/>
        <div>
          <h4><?php echo $lang['solutions']['telecoms']['p3']['subtitle']; ?></h4>
          <p>
            <?php echo $lang['solutions']['telecoms']['p3']['content1']; ?>          
          </p>
        </div>
      </div>
     
    </div>
    </div>
    </section>
    <!-- end operate -->


    <!-- support -->
    
    </div>
    <CENTER><div class="container-fluid " style=" background: linear-gradient(180deg, #f2f6fa 0%, #fff 100%);"style="box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;" ><br/><br/>
            <h1 style="">
              <?php echo $lang['solutions']['telecoms']['p1']['title2']; ?>
            </h1>
               
            </div></CENTER>
            <br/><br/><br/><br/><br/><br/>
    <!-- end support -->

    <footer >
            <div class="card-footer text-dark text-center">
                   <h2><?php echo $lang['footer']['intro']; ?></h2><br/>
                   <a href="https://www.facebook.com/lalocomotivesarl/" target="_blank">
                   <img src="https://img.icons8.com/color/48/000000/facebook.png"/></a>
                                    
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