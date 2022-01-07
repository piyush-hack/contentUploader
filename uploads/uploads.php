<?php include 'filesLogic.php';

$sql3 = "SELECT id FROM files ORDER BY id DESC";

$result3 = mysqli_query($conn, $sql3);

$files3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
print_r($files3);
echo (" ID are : ");

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
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="width: 58%;" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><h5 style="color: white;">burningOTAKU</h5></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.youtube.com/channel/UCiRbkeVXrtKW4oCLj61pVNQ">YouTube Channel</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Updates</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url(assets/img/banner.jpg);">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our SITE!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">So Currently I am uploading only chapter here And This site is under development so ignore some errors</a>
            </div>
        </header>
        <!-- Services-->
        <!-- <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio" class="updates">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">UPLAODS</h2>
                    <h3 class="section-subheading text-muted">ALL RECENT UPLAODS ARE SHOWN HERE</h3>
                </div>
                <div class="row">
                    
                    <?php 
                            $i = 0;
                            while(isset($files3[$i]['id'])){

                                

                                $id = $files3[$i]['id'];
                                $sql4 = "SELECT * FROM files WHERE `id`='" . $id . "'";
                                $result4 = mysqli_query($conn,$sql4);

                                while($row2 = mysqli_fetch_array($result4)) {
                                
                                ?>

                            
                                    <div class="col-lg-4 col-sm-6 mb-4 chap" id="chap<?php echo $i; ?>">
                                        <div class="portfolio-item">
                                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $row2['id']; ?>" >
                                                <div class="portfolio-hover">
                                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                
                                                <div class="container" style="position: relative;">
                                                
                                                <img class="img-fluid" src="assets/img/portfolio/<?php if($row2['manganame']){echo $row2['manganame'];}else{echo "01-thumbnail.jpg" ;} ?>.jpg" alt="" />
                                                <div class="text-block" style="position: absolute;bottom: 1vw;right: 2vw;background-color: black;color: white;padding-left: 20px;padding-right: 20px;">
                                                    <p><?php $row2['manganame']; ?></p>
                                                </div>
                                                </div>
                                            </a>
                                            <div class="portfolio-caption">
                                                <div class="portfolio-caption-heading"><?php echo $row2['chaptername']; ?></div>
                                                <div class="portfolio-caption-subheading text-muted"><a href="uploads.php?file_id=<?php echo $row2['id']; ?>" style="display: none;">Download</a> </div>
                                                <div class="portfolio-caption-subheading text-muted"> ID : <?php echo $row2['id']; ?> <p  style="display: none;">Counts<?php echo $row2['downloads']; ?></p></div>

                                                <div class="portfolio-caption-subheading text-muted"  style="display: none;">SIZE : <?php echo floor($row2['size'] / 1000) . ' KB'; ?></div>
                                            </div>
                                        </div>
                                    </div>

                                <?php }$i = $i + 1;
                                        $x = $i;
                                     
                            } ?>
                        <!-- <div class="col-lg-4 col-sm-6">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Window</div>
                                    <div class="portfolio-caption-subheading text-muted">Photography</div>
                                </div>
                            </div>
                        </div> -->
                </div>

                <?php if($x > 2){ ?>
                                
                                <button onclick="myFunction()" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" id="more">MORE</button>

                               <?php } ?>
                
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Here I am going to disscuss about site updates</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Feb 2021</h4>
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
        <!-- Team-->
        <!-- <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section> -->
        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Under Construction</h2>
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
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
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        
                
                
               
        
        

        <?php 
            $i = 0;
            while(isset($files3[$i]['id'])){
                $id = $files3[$i]['id'];
                $sql4 = "SELECT * FROM files WHERE `id`='" . $id . "'";
                $result4 = mysqli_query($conn,$sql4);

                while($row2 = mysqli_fetch_array($result4)) {
                                        
                ?>        
                <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $row2['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase"><?php echo $row2['chaptername']; ?></h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <div style="font-size: 0;"><?php echo $row2['mangalink']; ?></div>
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>Date: January 2020</li>
                                                <li>Client: Threads</li>
                                                <li>Category: Illustration</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fas fa-times mr-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
            $i = $i + 1; }?>    
        
        
        <!-- Modal 5-->
        
        <!-- <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <!-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --> -->
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


            <?php $chapcount = 3; ?>
            function myFunction() {

                
                <?php for($y=0; $y < $x; $y = $y + 1){ ?>
                    <?php if($y <= $chapcount){ ?>
                    document.getElementById('chap<?php echo $y; ?>').style.display = "block";
                    <?php }else{ $chapcount= $chapcount+1; break; } ?>
                <?php } ?>
            }
            </script>
    </body>
</html>
