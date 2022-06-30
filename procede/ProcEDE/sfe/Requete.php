
<!DOCTYPE html >
<html>
<head>
<title>ProcEDE</title>


<link href="tooplate_style.css" rel="stylesheet" type="text/css" />



<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">



</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 


</head>

<body>

<div id="tooplate_wrapper">
	
    <div id="tooplate_header">
        <div id="site_title"><h1><a href="index.html"></a></h1></div>
        <div id="tooplate_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a>ProcEDE</a>
                    <ul>
                        <li><a href="about.html">Presentation generale</a></li>
                        
                        <li><a href="mbr.html">Membres de la structure</a></li>
                        <li><a href="adr.html">Adresses</a></li>
           
                        
                  </ul>
                </li>
                <li><a>Recherche</a>
                    <ul>
                        <li><a href="rech.html">Organisation generale</a></li>
                        <li><a href="t1.html">1. Modelisation des transferts </a></li>
                        <li><a href="t2.html">2. Mesures et controle des procedes</a></li>
                        <li><a href="t3.html">3. Procedes et materiaux pour l energie et efficacite energetique </a></li>
                  </ul>
                </li>
                <li><a href="doc.html">Liste des doctorants</a></li>
                
 
            </ul>
        </div> <!-- end of tooplate_menu -->
    </div> <!-- END of tooplate_header -->
    
    <div id="tooplate_main">
    

		<section style="background-color: #163c88;" class="page-section" id="contact" >
            <div class="container">
           <div class="pp" style="font-size:17px;color:#500606e8;padding-top:20px;">
           <?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

if (!empty($name) || !empty($email) || !empty($phone) || !empty($message)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ikram";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From message Where email = ? Limit 1";
     $INSERT = "INSERT Into message (name, email, phone, message) values('$name','$email','$phone','$message')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->execute();
      
      echo "Votre message a été envoyé avec succes";
     } else {
      echo "Cette adresse email a deja ete utilise, essayez une autre !";
     }
   
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
</div>
                <div class="text-center">
                    <h2 style="text-align: center;color: white;font-family:'Arial';padding-top: 30px;font-size: 40px ;" class="section-heading text-uppercase">Contactez nous</h2>
                    <h3 style="font-size: 17px;font-family: Arial, Helvetica, sans-serif;margin-bottom: 29px;font-style: italic;color: #679e90;text-align: center;";section-subheading text-muted>Laissez-nous un message !</h3>
                </div>
        
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                <form action="Requete.php" method="post"  >
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea style="width: 400px;
                            margin-bottom: 20px;
                            margin-right: 170px;
                            
                            height: 168px;
                            padding: 12px;
                            border: 1px solid #ccc;
                            border-radius: 3px;font-size: 15px;font-family: Verdana, Geneva, Tahoma, sans-serif;float:right"class="form-control" name="message"  id="message" placeholder="Votre message *" required="required" data-validation-required-message="Veuillez entrer votre message"></textarea>
                             <p class="help-block text-danger"></p>
                            </div>
                                <div class="form-group">
                                    <input style="width: 250px;
                                    margin-left: 30px;
                                    margin-bottom: 20px;
                                    padding: 12px;
                                    border: 1px solid #ccc;
                                    border-radius: 3px;font-size: 15px;font-family: Verdana, Geneva, Tahoma, sans-serif;"class="form-control" name="name" id="name"  type="text" placeholder="Votre nom *" required="required" data-validation-required-message="Veuillez entrer votre nom." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                                <div class="form-group">
                                    <input style="width: 250px;
                                    margin-bottom: 20px;
                                    margin-left: 30px;
                                    padding: 12px;
                                    border: 1px solid #ccc;
                                    border-radius: 3px;font-size: 15px;font-family: Verdana, Geneva, Tahoma, sans-serif;" class="form-control" name="email" id="email"  type="email" placeholder="Votre email *" required="required" data-validation-required-message="Veuillez entrer votre email." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group mb-md-0">
                                    <input  style="width: 250px;
                                    margin-bottom: 10px;
                                    padding: 12px;
                                    margin-left: 30px;
                                    border: 1px solid #ccc;
                                    border-radius: 3px;font-size: 15px;font-family: Verdana, Geneva, Tahoma, sans-serif;" class="form-control" name="phone" id="phone" type="tel" placeholder="Votre tel *" required="required" data-validation-required-message="Veuillez entrer votre numero de telephone." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button style="background-color: #008037; width:100px; float: right;margin-right: 170px;margin-bottom: 20px;" class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" name="send" type="submit">Envoyez</button>
                    </div>
                </form>
            </div>
        </section>
                
        <div class="cleaner"  ></div>
        <div id="ftt">
        <div id="tooplate_bottom">
            <div class="col one_fourth">
                <h4>Pages</h4>
                <ul class="footer_list">
                  <li><a href="login.php">Authentification</a></li>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="about.html">ProcEDE</a></li>
                    <li><a href="rech.html">Recherche</a></li>
                  
                    <li><a  href="contact.html">Contact</a></li>
                    
                </ul>
            </div>
            <div class="col one_fourth">
                <h4>Abonnez-vous</h4>	
                
                <div class="footer_social_button">
                    <a href="#"><img src="images/facebook.png" alt="facebook" /></a>
                    <a href="#"><img src="images/flickr.png" alt="flickr" /></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
                    <a href="#"><img src="images/youtube.png" alt="youtube" /></a>
                    <a href="#"><img src="images/feed.png" alt="rss" /></a>
                </div>
                
            </div>
            <div class="col one_fourth">
                <h4>ProcEDE</h4>
                <ul class="twitter_post">
                    <li>Laboratoire des Procedes, Metrologie et des Materiaux pour l Energie et l Environnement</li>
                </ul>
            </div>
            <div class="col one_fourth no_margin_right">
            <img class="ftimg" src="images/ft1.png">
            </div>
            <div class="cleaner"></div>
            
        </div> <!-- END of tooplate_bottom -->
    
      </div> <!-- END of tooplate_main -->    
    
    </div> <!-- END of tooplate_wrapper -->
</body>
</html>
