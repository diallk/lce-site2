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
                                  <a class="dropdown-item" href="service-it.php"><?php echo $lang['header']['h2_']['1']; ?></a>
                                  <a class="dropdown-item" href="service-telecom.php"><?php echo $lang['header']['h2_']['2']; ?></a>
                                  <a class="dropdown-item" href="service-logistique.php"><?php echo $lang['header']['h2_']['3']; ?></a>
                                 
                                  <!--<div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>-->
                              </li>
                            <li class="nav-item">
                              <a class="nav-link text" href="boutique.php"><?php echo $lang['header']['h3']; ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <?php echo $lang['header']['h4']; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="about.php"><?php echo $lang['header']['h4_']['1']; ?></a>
                                  <!--<a class="dropdown-item" href="pages/partners.php">Partenaires</a>-->
                                  <a class="dropdown-item" href="join-team.php"><?php echo $lang['header']['h4_']['2']; ?></a>
                                  <a class="dropdown-item" href="partners.php"><?php echo $lang['header']['h4_']['3']; ?></a>

                                  <a class="dropdown-item" href="#"><?php echo $lang['header']['h4_']['4']; ?></a>
                                  <a class="dropdown-item" href="contact.php"  id="cbtn"><?php echo $lang['header']['h4_']['5']; ?></a>

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

            <!-- header contennt -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 desc ">
                        <div class="row">
                            <h1 class="accroche"><?php echo $lang['home']['f1']; ?> </h1>                        
                        </div>
                        <div class="row " style="color:#fd7e14;">
                            <h1 class="accroche"><?php echo $lang['home']['f2']; ?> </h1>
                        </div>
                        <div class="row " style="text-justify: distribute;">
                            <p class="left desc" id="explain"><?php echo $lang['home']['f3']; ?> </p>
                        </div>
                        <div class="row  desc">
                            <a class="btn btn-lg btn-animate right left text-light" href="service-it.php" id="btn-modif" style="margin-left:2rem"><?php echo $lang['home']['f6']; ?> </a>
                            <!--<a class="btn btn-light btn-lg btn-animate" href="contact.php" style="border-radius:0;"><?php echo $lang['home']['f7']; ?> </a>-->
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="assets/img/6913.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <!-- end hc -->
            <br>
            <!-- little word -->
  
            <div class="container " style="margin-top: 6rem;" align="center"  style="width: 50%;box-sizing: content-box;width: 100%;">
                <div class="">
                    <h1>
                        <span style="color: #fd7e14;"><?php echo $lang['home']['intro']; ?></span> <?php echo $lang['home']['intro1']; ?>
                    </h1>
                </div>
            </div>
  
            <?php include "includes/pop.php"; ?>
            <br><br> <br><br>
            <!-- skills content -->
            
                <div class="row" style="" >
                    <div class="col-md-4" >
                        <div class="flip-box from-left" style="border: 1px black solid ;height: 390px;width: 600px;">
                            <div class="flip-box-inner">
                              <div class="flip-box-front" style="padding: 3rem;">
                                  <img src="assets/img/cloud.png"  alt="">
                                  <br><br>
                                <p><strong><?php echo $lang['home']['ct']['s1']['title']; ?></strong></p>
                              </div>
                              <div class="flip-box-back" style="padding: 1rem;text-align: left;"><br/>
                                  
                                
                                <b><a href="service-it.php#intelligence"><?php echo $lang['home']['ct']['s1']['p']; ?></a></b><br/>
                                
                                <b><a href="service-it.php#digit_trans"><?php echo $lang['home']['ct']['s1']['p1']; ?></a></b><br/>
                                
                                <b><a href="service-it.php#"> <?php echo $lang['home']['ct']['s1']['p2']; ?></a></b><br/>
                                
                                <b><a href="#"><?php echo $lang['home']['ct']['s1']['p3']; ?></a></b><br/>
                               
                                <b><a href="#"><?php echo $lang['home']['ct']['s1']['p4']; ?></a></b> <br/>
                                
                                <b><a href="#"><?php echo $lang['home']['ct']['s1']['p5']; ?></a></b><br/>
                               
                                <b><a href="#"><?php echo $lang['home']['ct']['s1']['p6']; ?></a></b><br/>
                                
                                <b><a href="#"><?php echo $lang['home']['ct']['s1']['p7']; ?></a></b><br/>
                               
                                <b><a href="#"><?php echo $lang['home']['ct']['s1']['p8']; ?></a></b><br/> 
                               
                                
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 " >
                        <div class="flip-box from-left" style="border:1px black solid ;height: 390px;

width: 600px;">
                            <div class="flip-box-inner">
                              <div class="flip-box-front" style="padding: 3rem;">
                                <img src="assets/img/securite.png"  alt="">
                                <br><br>
                                <p><strong><?php echo $lang['home']['ct']['s2']['title']; ?></strong></p>
                              </div>
                              <div class="flip-box-back" style="padding: 1rem;text-align: left;">
                                 <br>
                                <p>
                                   <a href="#"><?php echo $lang['home']['ct']['s2']['p']; ?> </a> 
                                </p>
                                <p>
                                   <a href="#"><?php echo $lang['home']['ct']['s2']['p1']; ?> </a> 
                                </p>
                                <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s2']['p2']; ?> </a>
                                </p>
                                <p>
                                   <a href="#"><?php echo $lang['home']['ct']['s2']['p3']; ?> </a> 
                                </p>
                                <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s2']['p4']; ?> </a>
                                </p>
                                <p>
                                   <a href="#"><?php echo $lang['home']['ct']['s2']['p5']; ?> </a> 
                                </p>
                                <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s2']['p6']; ?></a> 
                                </p>
                                <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s2']['p7']; ?> </a>
                                </p>
                                
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="flip-box from-right"style="border:1px black solid ;height: 390px;width: 600px;" >
                            <div class="flip-box-inner">
                              <div class="flip-box-front" style="padding: 3rem;">
                              <img src="assets/img/cloud.png"  alt="">
                                <br><br/>
                                <strong><?php echo $lang['home']['ct']['s3']['title']; ?></strong>
                              </div>
                              <div class="flip-box-back" style="padding: 1rem;text-align: left;size:25px;">
                                  
                                <p>
                                   <a href="#"> <?php echo $lang['home']['ct']['s3']['p1']; ?> </a>
                                 </p>
                                 <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s3']['p2']; ?> </a>
                                 </p>
                                 <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s3']['p3']; ?> </a>
                                 </p>
                                 <p>
                                    <a  href="#"><?php echo $lang['home']['ct']['s3']['p4']; ?> </a>
                                 </p>
                                 <p>
                                   <a href="#"><?php echo $lang['home']['ct']['s3']['p5']; ?> </a> 
                                 </p>
                                 <p>
                                   <a href="#"><?php echo $lang['home']['ct']['s3']['p6']; ?> </a> 
                                 </p>
                                 <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s3']['p7']; ?> </a>
                                 </p>
                                 <p>
                                   <a href="#"><?php echo $lang['home']['ct']['s3']['p8']; ?> </a> 
                                 </p>
                                 <p>
                                    <a href="#"><?php echo $lang['home']['ct']['s3']['p9']; ?> </a>
                                 </p>
                              </div>
                            </div>
                          </div>
                    </div>
                   <!-- <div class="col-md-3 ">
                        <div class="flip-box from-right">
                            <div class="flip-box-inner">
                              <div class="flip-box-front" style="padding: 3rem;">
                                <img src="assets/img/coach.png" class="img" alt="">
                                <br><br>
                                <p><strong><?php echo $lang['home']['ct']['s4']['title']; ?></strong></p>
                              </div>
                              <div class="flip-box-back" style="padding: 1rem;">
                                <h2><?php echo $lang['home']['ct']['s4']['title']; ?></h2>
                                <br>
                                <p>
                                    <?php echo $lang['home']['ct']['s4']['p']; ?>                                
                                </p>
                                <p>
                                    <?php echo $lang['home']['ct']['s4']['p1']; ?>                                
                                </p>
                              </div>
                            </div>
                          </div>
                    </div> -->   
                </div>
                <br>
                <div class="row desc" style="justify-content: center;">
                    <a class="btn text-light btn-lg btn-animate" href=service-it.php id="btn-modif" ><?php echo $lang['home']['ct']['plus']; ?></a>
                </div>
                
            </div>
            <!-- end sc-->
    
           
            <!-- little word -->
            <div class="container" style="margin-top: 6rem;" align="center">
                <div class="" style="width: 50%;">
                    <h1>
                    <?php echo $lang['home']['client']; ?> <span style="color: #fd7e14;"><?php echo $lang['home']['client_fin']; ?></span>
                    </h1>
                </div>
            </div>
            <!-- end lw -->

            
    
            <!-- content client -->
 <div class="container-fluid  desc1">
    <div class="row">
     <div class="col-md-6" style="padding: 3rem;">                 
      
         <h2 class="text-o"> <h2><?php echo $lang['home']['c_1']; ?></h2> </h2>
         <br>
         <nav>
           <div class="nav nav-tabs" id="nav-tab" role="tablist">
             <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $lang['home']['c_2']; ?></a>
            <!-- <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo $lang['home']['c_3']; ?></a>
       -->
           </div>
         </nav>
       <div class="tab-content" id="nav-tabContent">
           <div class="tab-pane fade show active" style="padding: 1rem;" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab1">
              <h4 class="text-o" style="color: black;"> <?php echo $lang['home']['c_16']; ?> </h4>
        </div>
          <!-- <div class="tab-pane fade" id="nav-profile1" role="tabpanel" style="padding: 1rem;" aria-labelledby="nav-profile-tab1">
                <h4 class="text-o" style="color:black;"> <?php echo $lang['home']['c_15']; ?></h4> </div>-->
             </div>  
         </div>
         <div class="col-md-6 from-right">
                        <img src="assets/img/5222.jpg" width="80%" alt="">
         </div>
        </div>
     </div>
     


     <div class="container-fluid  desc1">
    <div class="row">
    <div class="col-md-6 from-right">
                        <img src="assets/img/4376.png" width="80%" alt="">
      </div>
     <div class="col-md-6" style="padding: 3rem;">                 
      
         <h2 class="text-o"> <h2><?php echo $lang['home']['c_4']; ?></h2> </h2>
         <br>
         <nav>
           <div class="nav nav-tabs" id="nav-tab" role="tablist">
             <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $lang['home']['c_5']; ?></a>
             <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo $lang['home']['c_6']; ?></a>
            <a class="nav-item nav-link" id="nav-contact-tab1" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false"><?php echo $lang['home']['c_8']; ?></a>
                
             
           </div>
         </nav>
        <div class="tab-content" id="nav-tabContent">
           <div class="tab-pane fade show active" style="padding: 1rem;" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab1">
              <h4 class="text-o" style="color: black;text-justify: distribute;"> <?php echo $lang['home']['c_21']; ?></> </h4>
          </div>
           <div class="tab-pane fade" id="nav-profile2" role="tabpanel" style="padding: 1rem;" aria-labelledby="nav-profile-tab1">
                <h4 class="text-o" style="color: black;text-justify: distribute;"> <?php echo $lang['home']['c_7']; ?> </h4> 
           </div>
           <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab1">
               <h4 class="text-o" style="color: black;text-justify: distribute;"> <?php echo $lang['home']['c_17']; ?></h4> 
           </div>
          
           
          

        </div>  
         </div>
        
        </div>
     </div><br>


     <div class="container-fluid  desc1">
    <div class="row">
     <div class="col-md-6" style="padding: 3rem;">                 
      
         <h2 class="text-o"> <h2><?php echo $lang['home']['c_9']; ?></h2> </h2>
         <br>
         <nav>
           <div class="nav nav-tabs" id="nav-tab" role="tablist">
           <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home3" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $lang['home']['c_10']; ?></</a>
             <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile3" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo $lang['home']['c_11']; ?></a>
            <a class="nav-item nav-link" id="nav-contact-tab1" data-toggle="tab" href="#nav-contact3" role="tab" aria-controls="nav-contact" aria-selected="false"><?php echo $lang['home']['c_12']; ?></a>
             <a class="nav-item nav-link " id="nav-secteur-tab1" data-toggle="tab" href="#nav-secteur3" role="tab" aria-controls="nav-secteur" aria-selected="false"><?php echo $lang['home']['c_13']; ?></a>
              </div>
         </nav>
       <div class="tab-content" id="nav-tabContent">
       <div class="tab-pane fade show active" style="padding: 1rem;" id="nav-home3" role="tabpanel" aria-labelledby="nav-home-tab1">
              <h4 class="text-o" style="text-justify: distribute;color:black;"> <?php echo $lang['home']['c_18']; ?> </h4>
          </div>
           <div class="tab-pane fade" id="nav-profile3" role="tabpanel" style="padding: 1rem;" aria-labelledby="nav-profile-tab1">
                <h4 class="text-o" style="text-justify: distribute;color:black;"> <?php echo $lang['home']['c_19']; ?> </h4> </div>
           <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab1">
           <h4 class="text-o" style="text-justify: distribute;color:black;"> <?php echo $lang['home']['c_19']; ?> </h4> </div>
     
           </div>
           <div class="tab-pane fade" id="nav-secteur3" role="tabpanel" aria-labelledby="nav-secteur-tab1">
           <h4 class="text-o" style="text-justify: distribute;color:black;"> <?php echo $lang['home']['c_20']; ?> </h4> </div>
     
           </div>
         <div class="col-md-6 from-right">
         <img src="assets/img/6685.png" width="80%" alt=""> 
         </div>
        </div>
     </div>



           <!-- <div class="container-fluid desc1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container top" style="margin-left: 2.5rem;"><br><br>
                            <div class="row from-left">
                                <h2><?php echo $lang['home']['c_9']; ?></h2>                            
                            </div>                        
                            <div class="row from-left" style="margin-top: 1rem;margin-left:1rem" id="explain">
                                <ul>
                                    <li><?php echo $lang['home']['c_10']; ?></li>
                                    <li><?php echo $lang['home']['c_11']; ?></li>
                                    <li><?php echo $lang['home']['c_12']; ?></li>
                                    <li><?php echo $lang['home']['c_13']; ?></li>
                                </ul>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 from-right">
                        <img src="assets/img/6685.png" width="80%" alt="">
                    </div>
                </div>
            </div>-->
    
            <!-- end cc -->
            <!-- service contact -->

            <div class="container-fluid  desc " align="center" style="padding: 4rem;background-color:rgba(238, 166, 32, 0.87)">
                <div class="">
                   <marquee direction="right" behavior="alternate"><h1 class="text-light"><?php echo $lang['ask_1']; ?></h1></marquee> 
                    <br>
                    <a class="btn btn-lg" id="btn-modif" style="box-shadow:none;color:white;" href="contact.php"><?php echo $lang['ask_2']; ?></a>
                </div>
                <br>
            </div>
            <!-- end service -->
    

    
<?php include_once('includes/footer.php') ?>
   