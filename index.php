<?php include 'filesLogic.php';

$filter = 'AllManga';

if(isset($_GET["filter"])){
    $filter = $_GET["filter"];
    $sql3 = "SELECT id FROM files WHERE type='$filter' ORDER BY id DESC";
}else if(isset($_GET["searchInput"])){
    $key = $_GET["searchInput"];
        $sql3 = "SELECT id FROM files WHERE manganame like '%".$key."%' ORDER BY id DESC";

}else{
    
    $sql3 = "SELECT id FROM files WHERE type='$filter' ORDER BY id DESC";

}

$result3 = mysqli_query($conn, $sql3);

$files3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>burningOTAKU</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        


        <style>
        img * {
            display: block;
        }


        </style>       
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="width: 100%;" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><h5 style="color: white;">DESTINY</h5></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#updates">Updates</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#searchcont">Search</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('https://i.ytimg.com/vi/MU3qrgR2Kkc/maxresdefault.jpg');">
            <div class="container">
                <div style="
                    /* margin: 28px; */
                    position: fixed;
                    right: 0;
                    bottom: 0;
                    z-index: 9999999999;
                    background: yellow;
                    padding: 5px;
                    width: 238px;
                    border-top-left-radius: 5px;
                "><a style="color:black" href="">Destiny</a></div>
                <div class="masthead-subheading">Welcome To DESTINY!</div>
                <div class="masthead-heading text-uppercase">A Chance To Shape Your Destiny</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Learning never exhausts the mind</a>
            </div>
        </header>

        <section class="page-section bg-light" id="portfolio" class="updates">
            <div class="container">
                <div class="text-center">
                <div class="col-mb-4">

                        <form class="form-inline mr-auto mb-4" id="searchcont" style="display:block;" action="index.php" method="GET">
                        <input class="form-control mr-sm-2" id="seacrchInput" name="searchInput" type="text" placeholder="Search" aria-label="Search" style="min-width: 85%;">
                        <button class="btn btn-indigo btn-rounded btn-sm my-0 waves-effect waves-light" id="searchBtn" type="submit" style="background-color: blue; color:wheat;"><strong>SEARCH</strong></button>
                        </form>

                    </div> 
                    <h2 class="section-heading text-uppercase">UPLOADS</h2>
                    <h3 class="section-subheading text-muted">ALL RECENT UPLAODS ARE SHOWN HERE</h3>
                    <span class="filter" onclick="window.location='?filter=AllManga'">AllManga</span>
                    <span class="filter" onclick="window.location='?filter=YouTube'">YouTube</span>
                    <span class="filter"  onclick="window.location='?filter=Plans'">Plans</span>
                    <span class="filter"  onclick="window.location='?filter=Content'">Content</span>

                </div>
                <div class="row" id="updates">
                    
                    <?php 
                            $i = 0;
                            $x = 0;
                            while(isset($files3[$i]['id'])){

                                

                                $id = $files3[$i]['id'];
                                $sql4 = "SELECT * FROM files WHERE `id`='" . $id . "'";
                                $result4 = mysqli_query($conn,$sql4);

                                while($row2 = mysqli_fetch_array($result4)) {
                                    
                                ?>

                            
                                    <div class="col-lg-4 col-sm-6 mb-4 chap" id="chap<?php echo $i; ?>">
                                        <div class="portfolio-item">
                                            <a id="rlink<?php echo $row2['id']; ?>" class="portfolio-link"  href="viewchapter.php?i=<?php echo $row2['id']; ?>&f=<?php echo $filter; ?>" >
                                                <div class="portfolio-caption">
    
                                                    <div class="container" style="height:100%;overflow-x:scroll;">
                                                        
                                                        <?php $display = "block"; if($row2['img'] == ""){
                                                            $display = "none";
                                                        }; ?>
                                                        <div style="float:left;height: 162px;
                                                        overflow: hidden;    width: 100%;display:<?php echo $display; ?>;
                                                        background: url(<?php echo $row2['img']; ?>) , url(https://i.stack.imgur.com/9WYxT.png) center no-repeat;
                                                        background-size: cover;background-position: center;">
                                                        
                                                        </div> 
                                                        
                                                        <div class="portfolio-caption-heading">
                                                        <?php echo $row2['manganame']; ?>  </div>  <?php echo $row2['chaptername']; ?> 
                                                        
                     
                                                    </div>
                                                    
                                                
                                                
                                                </div>
                                            </a>    
                                            
                                            <?php 
                                            // if($row2["type"] == "Study"){
                                            //           echo "<script> var foo = prompt('Password'); document.getElementById(`rlink".$row2['id']."`).href += `&pass=` + foo;</script>";}
                                                      ?>
                                        </div>
                                    </div>

                                <?php 
                                
                                }
                                $i = $i + 1;
                                        $x = $i;
                                     
                            } ?>

                </div>

                <?php if($x > 2){ ?>
                                
                                <button onclick="myFunction()" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" id="more">MORE</button>

                               <?php } ?>
                
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about" style="display: none;">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Know About Our Journey Till Now</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Feb 2010</h4>
                                <h4 class="subheading">Testing Phase Complete</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">So today I tried to compete this site testing . Now I hope its up and running</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2021</h4>
                                <h4 class="subheading">Add new updates to site</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">I hope i  would add more updates to this site until the end of march like quick search and manga description and all</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>MAy 2021</h4>
                                <h4 class="subheading">Site Complete</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">So after all updates like some comment section and chatting system I hope site would be complete. So yeah fighting.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>How to help</h4>
                                <h4 class="subheading">Donate me and help site</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">If you think my content is good and this site is better place to read manga and you 
                                want to help me then donate me at 9457754125@paytm or you can subsribe my channel on you tube</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Thanks 
                                <br />
                                for visting
                                <br />
                                to this site
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>



        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Address</h2>
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Contact At 7533xxxxxx or piyushxxxxxx@gmail.com.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Shop Name *" required="required" data-validation-required-message="Please enter your name." readonly />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Shop Address  *" required="required" data-validation-required-message="Please enter your email address." readonly />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." readonly />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="REach Out Here" required="required" data-validation-required-message="Please enter a message." readonly></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <!--<div id="success"></div>-->
                        <!--<a class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</a>-->
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>

            <?php for($y=0; $y < $x; $y = $y + 1){ ?>
                <?php if($y > 2 ){ ?>  document.getElementById('chap<?php echo $y; ?>').style.display = "none"; <?php } ?>
            <?php } ?>


            var chapcount = 6;
            function myFunction() {

               
                var y = <?php echo $y; ?>;
                var x = <?php echo $x; ?>;


                for(y=0; y < x; y = y + 1){ 
                    
                    if(y <= chapcount){
                    document.getElementById('chap' + y).style.display = "block";
                    }else{ 
                        chapcount = chapcount +3;
                        break;
                    }
                 }

                 
            }
            </script>
    </body>
</html>