<?php 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ikram";
	$error="";
    //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=ikram&table=message&pos=0');
    }
    else{
        $error = " Nom d'utilisateur ou mot de passe invalide";
    }   
}
?>
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
                <li><a href="index.html" >Accueil</a></li>
                <li><a>ProcEDE</a>
                    <ul>
                        <li><a href="about.html">Presentation generale</a></li>
                  
                        <li><a href="mbr.html">Membres de la structure</a></li>
                        <li><a href="adr.html">Adresse</a></li>
                  
                        
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
    <section style="background-color:#163c88;"   class="page-section" id="login"> 
		   
           <div class="container">
           <form role="form" method="post" action="">
               <div class="rowlogin">
                   <div class="admin-img text-center">
                       <img  src="images/me.jpg"  alt="login" style="border-radius: 50%; height: 170px; width: 170px; position : centre;padding-bottom:40px;padding-top:40px;display: block;
  margin-left: auto;
  margin-right: auto;
  ">
                   </div>
                   <div class="admin">
                       <h3 style="color: #679e90;margin-bottom:30px;text-align:center;"  class="section-heading text-uppercase text-center" >Administration</h3>
                   </div>
                   
                           <div class="form-group">
                               <input style="width: 250px;
                                    margin-bottom: 20px;
                                    padding: 12px;
                                    margin-left: 330px;
                                
                                    border: 1px solid #ccc;
                                    border-radius: 3px;font-size: 15px;font-family: Verdana, Geneva, Tahoma, sans-serif;"class="form-control" name="username" id="username" type="text" placeholder="Username@procEDE.com *" required="required" data-validation-required-message="Veuillez entrer votre nom" />
                               <p class="help-block text-danger"></p>
                           </div>
                           <div class="form-group">
                               <input style="width: 250px;
                                    margin-bottom: 5px;
                                    padding: 12px;
                                    margin-left: 330px;
                                    
                                    
                                    border: 1px solid #ccc;
                                    border-radius: 3px;font-size: 15px;font-family: Verdana, Geneva, Tahoma, sans-serif;" class="form-control" name="password" id="password" type="password" placeholder="Password *" required="required" data-validation-required-message="Veuillez entrer votre mot de passe" />
                               <p class="help-block text-danger"></p>
                               <div style = "text-align:center;font-size:16px; color:#ff0000; margin-top:10px;font-style:italic;font-weight:bold;"><?php echo $error;?></div>
                               
                           </div>
                           <div class="text-center">
                               <div id="success"></div>
                               <button style="margin-top:10px;background-color:#008037;width:100px;margin-left:505px;margin-bottom:20px"class="btn btn-primary btn-xl text-uppercase" type="submit" id="login" name="login" alt="login">LOGIN </button>
                       </div>
                   <div href="#login">
               </div></div>
               </form>
   
           </div>
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
    