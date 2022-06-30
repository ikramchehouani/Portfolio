<?php 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ocean";
	$error="";
    //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=ocean&table=message&pos=0');
    }
    else{
        $error = " Nom d'utilisateur ou mot de passe invalide";
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ocean Souls</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- icons-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Quizz">Quizz yourself</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#News">Ocean News</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link js-scnerroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#login">LOGIN</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- head-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">All together for a radical change</div>
                <div class="masthead-heading text-uppercase">Welcome !</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#Quizz">Learn more</a>
            </div>
        </header>
        <!-- quizz-->
        <section class="page-section" id="Quizz">
            <div class="start_btn"><button>Start Quiz</button></div>
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">Quizz yourself</h2></div>
                    
        </section>
        <section class="page-section" id="Quizz">
        <div>        
            <!--Start Quiz button-->
        
            <!--Info Box-->
            <div class="info_box">
                <div class="info_title">
                    <span>Some rules of this Quiz</span>
                </div>
                <div class="info_list">
                    <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
                    <div class="info">2. Once you select your answer , you can't reselct.</div>
                    <div class="info">3. You can't select any option once time goes off.</div>
                    <div class="info">4. You can't exit from the quiz while you're playing.</div>
                    <div class="info">5. You'll get points on the basis of your correct answers.</div>
                </div>
                <div class="buttons">
                    <button class="quit">Exit Quiz</button>
                    <button class="restart">Continue</button>
                </div>
            </div>
        </section>
            <!--Quiz Box-->
            <section class="page-section" id="Quizz">
            <div class="quiz_box">
                <header>
                    <div class="title">title</div>
                    <div class="timer">
                        <div class="time_text">Time Left :</div>
                        <div class="timer_sec">15</div>
                    </div>
                    <div class="time_line"></div>
                </header>
                <section>
                    <div class="que_text">
                        <!--<span>question 1 :</span>-->
                    </div>
                    <div class="option_list">
                        <!--<div class="option">
                            <span>1</span>
                            <div class="icon tick"><i class="fas fa-check"></i></div>
                        </div>
                        <div class="option">
                            <span>2</span>
                            <div class="icon cross"><i class="fas fa-times"></i></div>
                        </div>
                        <div class="option">
                            <span>3</span>
                            <div class="icon cross"><i></i></div>
                        </div> 
                        <div class="option">
                            <span>4</span>
                            <div class="icon"><i class="fas fa-check"></i></div>
                        </div>> -->
                    </div>
                </section>
            <!--Quiz Box Footer-->
            <footer>
                <div class="total_que">
                    <!--<span> 2 of 5 Questions</span>-->
                </div>
                <button class="next_btn">Next Que</button>
            </footer>
            </div>
            <!--Result box-->
            <div class="result_box">
                <div class="icon">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="complete_text">You've completed the Quiz</div>
                <div class="score_text">
                    <!--<span>and sorry, you got only <p>2</p> out of <p>5</p></span>-->
                </div>
                <div class="buttons">
                    <button class="restart">Replay Quiz</button>
                    <button class="quit">Quit Quiz</button>
                </div>
            </div>
    
       </section>   
        <!-- news-->
        <section class="page-section bg-light" id="News">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">News</h2>
                    <h3 class="section-subheading text-muted">Read the latest updates for the Ocean News.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="News-item">
                            <a class="News-link" data-toggle="modal" href="#NewsModal1">
                                <div class="News-hover">
                                    <div class="News-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/News/01-thumbnail.jpg" alt="" />
                            </a>
                            <div class="News-caption">
                                <div class="News-caption-heading">Climate action </div>
                                <div class="News-caption-subheading text-muted">Seas At Risk</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="News-item">
                            <a class="News-link" data-toggle="modal" href="#NewsModal2">
                                <div class="News-hover">
                                    <div class="News-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/News/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="News-caption">
                                <div class="News-caption-heading">Sharks and Rays</div>
                                <div class="News-caption-subheading text-muted">University of Exeter</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="News-item">
                            <a class="News-link" data-toggle="modal" href="#NewsModal3">
                                <div class="News-hover">
                                    <div class="News-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/News/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="News-caption">
                                <div class="News-caption-heading">Plastic debris</div>
                                <div class="News-caption-subheading text-muted">ScienceDaily</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="News-item">
                            <a class="News-link" data-toggle="modal" href="#NewsModal4">
                                <div class="News-hover">
                                    <div class="News-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/News/04-thumbnail.jpg" alt="" />
                            </a>
                            <div class="News-caption">
                                <div class="News-caption-heading">Plastic Bottles</div>
                                <div class="News-caption-subheading text-muted">Forbes</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="News-item">
                            <a class="News-link" data-toggle="modal" href="#NewsModal5">
                                <div class="News-hover">
                                    <div class="News-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/News/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="News-caption">
                                <div class="News-caption-heading">Sea Turtles</div>
                                <div class="News-caption-subheading text-muted">Le Matin</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="News-item">
                            <a class="News-link" data-toggle="modal" href="#NewsModal6">
                                <div class="News-hover">
                                    <div class="News-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/News/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="News-caption">
                                <div class="News-caption-heading">Coral reefs</div>
                                <div class="News-caption-subheading text-muted">VOANews.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted ">Ocean Souls, a global movement for the protection of the oceans fueled by a community of adventurers, was founded in 2018 to connect the passion for ocean adventure with marine conservation. Ready to act for the protection of the oceans?</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" style="height: 160px;width: 160px;"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Scuba diving</h4>
                                <h4 class="subheading">Dive with us:</h4>
                                    
                            </div>
                            <div class="timeline-body"><p class="text-muted">All over the world, the adventurous community of Ocean Souls is taking action to protect the oceans. Whether it's spreading knowledge about eco-friendly diving practices, coordinating waste collection or fundraising and raising awareness about marine protection, we empower our global community and create opportunities to act locally to global impact. If you come with us you get a free dive, all you have to do is collect as much trash as you can.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" style="height: 160px;width: 160px;" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Bottle collection</h4>
                                <h4 class="subheading">Treat yourself:</h4>
                                    
                            </div>
                            <div class="timeline-body"><p class="text-muted">Can't resist the temptation to shop online? But are you using the best payment method? Let's discover one of them together: discount coupons! Far from disappearing, prepaid solutions are now making their return to the payment market! Do you want to convince yourself? Do a simple Google search, and count the number of sites providing online shopping codes! This payment method is perfectly suited to consumer demands: anonymity, ease of use, and sharing! You only have one Job: Pick up 50 plastic bottles per hour found at the beach and contact us to schedule a meet-up to make our exchange: we take the bottles and you receive a 50% coupon in your favorite store.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" style="height: 160px;width: 160px;"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Let's talk artistically</h4>
                                <h4 class="subheading">Art of living :</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Do you have artistic ambitions? Are you ready to show the world what you can do with your artistic hands? Come with us, try it out and don't fear the new. Create and fantasize with our collected debris of the masterpieces you will be paying for. Yes we did say payed for. All you have to do is bring out your artistic side. Let 's go! As they said: "There's no must in art because art is free".</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" style="height: 160px;width: 160px;"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Make a donation</h4>
                                   
                                <h4 class="subheading">Are you ready to take action ?</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">How we invest your donation: All of our work is made possible by generous donors like you and this is how we invest your donation.
                                <br />- 25% Conservation of sharks and rays
                                <br />- 29% Marine debris solutions
                                <br />- 17% Protection of the oceans
                                <br />- 29% Support to the mission</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Today better than yesterday, tomorrow better than today.</h3>
                </div>
				
				<!-- la zone pour team // row centrée -->
                <div class="rowcontact">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/team1.jpeg" alt="" />
                            <h4>Wassim ELKHOU</h4>
                            <p class="text-muted">Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/team2.jpg" alt="" />
                            <h4>Ikram CHEHOUANI</h4>
                            <p class="text-muted">Dev</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">For 3 years, we have responded to the threats our oceans face and we have had incredible success. We believe in a future where the ocean no longer needs to be protected.</p></div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">need more infos</h3>
                </div>

                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
				<form action="Requete.php" method="post"  >
                            <div class="form-group">
                                <input class="form-control" name="name" id="name"  type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email"  type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="message"  id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" name="send" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!--login-->
           <section class="page-section" id="login"> 
		   
            <div class="container">
			<form role="form" method="post" action="">
			    <div class="rowlogin">
                    <div class="admin-img text-center">
                        <img  src="assets/img/login.jpg " alt="login" style="border-radius: 50%; height: 90px; width: 90px; position : centre;">
                    </div>
                    <div class="admin">
                        <h3 class="section-heading text-uppercase text-center" >Administration</h3>
                    </div>
                    
                            <div class="form-group">
                                <input class="form-control" name="username" id="username" type="text" placeholder="username@ocean_soul.com *" required="required" data-validation-required-message="Please enter your user name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" id="password" type="password" placeholder="Your password *" required="required" data-validation-required-message="Please enter your password." />
								<p class="help-block text-danger"></p>
								<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error;?></div>
								
                            </div>
                            <div class="text-center">
                                <div id="success"></div>
                                <button class="btn btn-primary btn-xl text-uppercase" type="submit" id="login" name="login" alt="login">LOGIN </button>
                        </div>
                    <div href="#login">
                </div></div>
				</form>
	
			</div>
		</div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Ocean Souls 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a>Privacy Policy</a>
                        <a>Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- news Modals-->
        <!-- Modal 1-->
        <div class="News-modal modal fade" id="NewsModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    
                                    <h2 class="text-uppercase">Climate action </h2>
                                    <p class="item-intro text-muted">Ocean conservation is climate action:</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/News/01-full.jpg" alt="" />
                                    <p>The special report on the ocean and cryosphere, published by the Intergovernmental Panel on Climate Change (IPCC), gives a grim reading. The ocean is the vital system of our planet. It pumps nutrients around the world, helps regulate weather conditions, and produces half the oxygen we breathe. By absorbing 90% of the excess heat in the atmosphere and 30% of the CO2, it has so far protected us from the worst effects of the climate crisis.</p>
                                    <ul class="list-inline">
                                        <li>Date: September 25, 2019</li>
                                        <li>Source: Seas At Risk</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="News-modal modal fade" id="NewsModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    
                                    <h2 class="text-uppercase">Sharks and Rays</h2>
                                    <p class="item-intro text-muted">Hundreds of sharks and rays tangled in plastic:</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/News/02-full.jpg" alt="" />
                                    <p>A review of academic papers revealed reports of 557 sharks and rays entangled in plastic, covering 34 species in the oceans, including the Atlantic, Pacific and India. Almost 60% of these animals were either spiny dogfish or spotted ratfish.</p>
                                    <ul class="list-inline">
                                        <li>Date: July 5, 2019</li>
                                        <li>Source: University of Exeter</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="News-modal modal fade" id="NewsModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    
                                    <h2 class="text-uppercase">Plastic debris</h2>
                                    <p class="item-intro text-muted">Rivers carry plastic debris into the sea:</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/News/03-full.jpg" alt="" />
                                    <p>An interdisciplinary research team has been able to show that plastic debris is mainly transported to the sea by large rivers. This constitutes a serious and growing global environmental problem. Marine life can be damaged by the tiny plastic particles floating in the water. An example of how this happens is when fish, seabirds, or marine mammals mistake the particles for food and consume them.</p>
                                    <ul class="list-inline">
                                        <li>Date: October 19, 2017</li>
                                        <li>Source: ScienceDaily</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="News-modal modal fade" id="NewsModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    
                                    <h2 class="text-uppercase">Plastic Bottles</h2>
                                    <p class="item-intro text-muted">We are now at one million plastic bottles per minute - 91% of which are not recycled:</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/News/04-full.jpg" alt="" />
                                    <p>Every person reading this has used a plastic bottle, many of which have likely used one in the past day or week. Plastic, in recent decades, has become a staple of convenience and a modern way of life, with most plastics, including bottles, ending up either in the ocean or in a landfill. It is not uncommon to see objects of marine life found dead with significant amounts of plastic in their stomachs. It is not uncommon to see objects of marine life found dead with significant amounts of plastic in their stomachs.</p>
                                    <ul class="list-inline">
                                        <li>Date: July 25, 2017</li>
                                        <li>Source: Forbes</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="News-modal modal fade" id="NewsModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    
                                    <h2 class="text-uppercase">Sea Turtles</h2>
                                    <p class="item-intro text-muted">Sea Turtles swallow more and more waste:</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/News/05-full.jpg" alt="" />
                                    <p>Green turtles, an endangered species, are more and more likely to ingest waste discarded by humans at sea, or even plastic bags with which they can choke. According to a study published in the scientific journal Conservation Biology, six of the seven species of sea turtles ingest debris discarded by humans and all six are classified as vulnerable or endangered. "For the green turtle, the likelihood of it ingesting waste has almost doubled in 25 years," said Qamar Schuyler, who led the research at the University of Queensland. "Green turtles in particular are ingesting much more of it than before," since the probability has dropped from 30% in 1985 to almost 50% in 2012.</p>
                                    <ul class="list-inline">
                                        <li>Date: August 9, 2013</li>
                                        <li>Source: Le Matin</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="News-modal modal fade" id="NewsModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    
                                    <h2 class="text-uppercase">Coral reefs</h2>
                                    <p class="item-intro text-muted">Les récifs coralliens:</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/News/06-full.jpg" alt="" />
                                    <p>Coral reefs, often referred to as “tropical forests of the ocean”, are delicate, vital and threatened natural resources. Coral reefs face three main threats:
                                        Climate change is causing coral bleaching and this is a huge problem. We also look at the overfishing and depletion of coral reefs of fish, which is a necessary part of having healthy corals. And then the last thing is land-based pollution and land-based contaminants that seep into the ocean and cause damage to coral reefs.</p>
                                    <ul class="list-inline">
                                        <li>Date: July 3, 2011</li>
                                        <li>Source: VOANews.com</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/file.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--Quiz JS-->
        <script src="js/quiz.js"></script>
        <script src="js/questions.js"></script>
    </body>
</html>