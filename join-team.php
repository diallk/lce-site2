<?php require_once "./config/config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lce</title>
    <link rel="icon" href="assets/img/facs.ico">
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

            <!-- navbar -->
          <div class="container-fluid  header-bar " >
            <div  class="container">
                <nav class="navbar navbar-expand-lg navbar-light" id="nav" >
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" width="70%" alt="">
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
        <!-- rejoindre partenariat -->

        <div class="container-fluid">
            <div class="container" style="height: 700px;">
                <div class="row" style="height: 700px;">
                    <div class="col-md-7" style="background-image: url('assets/img/IMG_0952.JPG');background-size:cover">
                        <h1 class="text-light lce-team-text"><?php echo $lang['about']['carreers']['title']; ?></h1>
                    </div>
                    <div class="col-md-5" style="padding: 2rem;box-shadow:4px 4px 10px #aaa">
                        <div>
                            <h2 class="text-o"><?php echo $lang['about']['carreers']['f1']; ?></h2>
                            <br><br>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><?php echo $lang['about']['carreers']['f2']; ?></label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option><?php echo $lang['about']['carreers']['f3']; ?></option>
                                  <option><?php echo $lang['about']['carreers']['f4']; ?></option>
                                  <!--<option>3</option>
                                  <option>4</option>
                                  <option>5</option>-->
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputname"><?php echo $lang['about']['carreers']['f4_']; ?></label>
                              <input type="text" class="form-control  " id="exampleInputName" placeholder="<?php echo $lang['about']['carreers']['f9']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName"><?php echo $lang['about']['carreers']['f5']; ?></label>
                                <input type="text" class="form-control  " id="exampleInputPhone" placeholder="<?php echo $lang['about']['carreers']['f10']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1"><?php echo $lang['about']['carreers']['f6']; ?></label>
                                <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input  " id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                      <label class="custom-file-label" for="inputGroupFile04"><?php echo $lang['about']['carreers']['f7']; ?></label>
                                    </div>                                    
                                  </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1"><?php echo $lang['about']['carreers']['f8']; ?></label>
                                <div class="input-group">                                    
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input  " id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                      <label class="custom-file-label" for="inputGroupFile04"><?php echo $lang['about']['carreers']['f7']; ?></label>
                                    </div>                                   
                                  </div>
                            </div>
                            <br><br>
                            <button type="submit" id="btn-modif" class="btn btn-warning btn-lg btn-block btn-animate"><?php echo $lang['about']['carreers']['btn']; ?></button>
                          </form>
                    </div>
                </div>
            </div>
        </div> 

        <!-- end rejoindre parte -->

      <br><br><br>
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