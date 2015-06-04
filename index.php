<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>

<meta charset="UTF-8"/>

<title>Pizz'Atomic</title>

<meta name="description" content="Onepage Multipurpose Bootstrap HTML Template">

<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/theme.css">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

</head>

<?php
include 'db.php';
$error = "";

// Create connection
$conn = new mysqli($serveur, $user, $mdp, $mabase);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reglages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $title = $row['title'];
         $tel = $row['tel'];
         $adresse = $row['adresse'];
         $descpizza = $row['descpizza'];
         $descavis = $row['descavis'];
         $desccontact = $row['desccontact'];
         $descchef = $row['descchef'];
         $descfiche1 = $row['descfiche1'];
         $lienfiche1 = $row['lienfiche1'];
         $descfiche1 = $row['descfiche1'];
         $titrefiche1 = $row['titrefiche1'];
         $descfiche2 = $row['descfiche2'];
         $lienfiche2 = $row['lienfiche2'];
         $titrefiche2 = $row['titrefiche2'];
         }
} else {
     echo "0 results";
}

$conn->close();

/////////////////////////////
//modifier le tel
?>  



<body>
<!--wrapper start-->
<div class="wrapper" id="wrapper">
	
	<!--header-->
	<header>
	<div class="banner row" id="banner">		
		<div class="parallax text-center">
			<div class="parallax-pattern-overlay">
				<div class="container text-center" style="height:580px;padding-top:5px;">
					<a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="img/first-logo.png" alt="logo"/></a>
					<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s"><?php echo $title ; ?></h2>
					<h3 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s"><?php echo $tel ; ?></h3>
					<h3 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s"><?php echo $adresse ; ?></h3>
				</div>
			</div>
		</div>
	</div>	
	<div class="menu">
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navwrapper">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="container">
							<div class="navArea">
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li class="menuItem active"><a href="#wrapper">Accueil</a></li>
										<li class="menuItem"><a href="#aboutus">Le Chef</a></li>
										<li class="menuItem"><a href="#specialties">Nos Pizzas</a></li>
										<li class="menuItem"><a href="#gallery">Nos événements</a></li>
										<li class="menuItem"><a href="#feedback">Les Avis</a></li>
										<li class="menuItem"><a href="#contact">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</header>
		
	<!--about us-->
	<section class="aboutus" id="aboutus">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Le Chef !</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3><?php echo $descchef; ?></h3>
		</div>			
		<div class="row">
			<div class="col-md-6">
				<div class="papers text-center">
					<img src="img/fabien.jpg" alt="fabien chef pizzaïolo"><br/>
					<a href="#"><b><?php echo $lienfiche1; ?></b></a>
					<h4 class="notopmarg nobotmarg"><?php echo $titrefiche1; ?></h4>
					<p><?php echo $descfiche1; ?></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="papers text-center">
					<img src="img/livreur.jpg" alt=""><br/>
					<a href="#"><b><?php echo $lienfiche2; ?></b></a>
					<h4 class="notopmarg nobotmarg"><?php echo $titrefiche2; ?></h4>
					<p><?php echo $descfiche2; ?></p>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	<!--specialties-->
	<section class="specialties" id="specialties">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Nos Pizzas</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3><?php echo $descpizza ; ?></h3>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">Pizzas Classiques   33cm</h3>
					<div class="restitem clearfix">
						<div id="prix"><p>9€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Marguerite</h5>
						<p>
						Sauce tomate, Mozza, Olive
						</p>
						<div id="prix"><p>9€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Napoli</h5>
						<p>Sauce tomate, anchois, emmental, olives
						</p>
						<div id="prix"><p>9€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Chevrette</h5>
						<p>
							Sauce tomate, chèvre, mozza, olives
						</p>
						<div id="prix"><p>10€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Chevrette</h5>
						<p>
							Sauce tomate, chèvre, mozza, olives
						</p>
						<div id="prix"><p>10€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Marguerite</h5>
						<p>
						Sauce tomate, Mozza, Olive
						</p>
						<div id="prix"><p>10€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Chevrette</h5>
						<p>
							Sauce tomate, chèvre, mozza, olives
						</p>
						<div id="prix"><p>10€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Chevrette</h5>
						<p>
							Sauce tomate, chèvre, mozza, olives
						</p>
						<div id="prix"><p>10€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Chevrette</h5>
						<p>
							Sauce tomate, chèvre, mozza, olives
						</p>

						<div id="prix"><p>11€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Chevrette</h5>
						<p>
							Sauce tomate, chèvre, mozza, olives
						</p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">Pizza Pan & Calzone   26cm</h3>
					<h4>Calzones</h4>
					<div class="restitem clearfix">

						<div id="prix"><p>9€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Calatomic</h5>
						<p>
						Jambon, champignon, oeuf, emmental
						</p>
						<div id="prix"><p>12€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Calmad</h5>
						<p>Sauce tomate, chorizo, poivrons, oignons, emmental, olives
						</p>
						<div id="prix"><p>9€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Chevrette</h5>
						<p>
						Sauce tomate, chèvre, mozza, olives
						</p>
						<h4>Pan</h4>
						<h5>Simple</h5>
						<div id="prix"><p>9€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Tozcana</h5>
						<p>
						Sauce tomate, mozarrella, herbes, olive
						</p>
						<div id="prix"><p>7€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Sardegna</h5>
						<p>Sauce tomate, jambon, champignon, mozza, herbes
						</p>
						<h5>Extra</h5>
						<div id="prix"><p>9€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Sardegna</h5>
						<p>Sauce tomate, jambon, champignon, mozza, herbes
						</p>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">Boissons & Desserts</h3>
					<div class="restitem clearfix">
						<h4>Boissons</h4>
						<div id="prix"><p>1,50€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>33cl sans alcool</h5>
						<p>
							CocaCola, light, zéro, ice-tea, orangina
						</p>		
						<div id="prix"><p>1,50€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>33cl avec alcool</h5>
						<p>
							Kronenbourg, Heineken
						</p>
						<h4>Desserts</h4>
						<div id="prix"><p>2,50€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Crumble</h5>
						<p>
						de pommes et spéculos 
						</p>
						<div id="prix"><p>2,50€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Gâteau Chocolat</h5>
						<p>
						au coeur coulant 
						</p>
						<div id="prix"><p>2,50€</p></div>
						<div class="rm-thumb" style="background-image: url(img/pizza.jpg)">
						</div>
						<h5>Glaces 150ml</h5>
						<p>
						véritables glaces importées d'Italie
						</p>
						<br>
						<p><div id="picto"><img width="65px"; src="img/especes.png"><img id="img1" width="50px"; src="img/cbcb.png"><img id="img1" width="80px"; src="img/ticket.png"></p></div>
						<p>Mode de paiement refusé : chèques, chèques vacances</p>
					</div>
			</div>
		</div>
	</div>
	</section>
	
	<!--gallery-->
	<section class="gallery" id="gallery">
		<div class="container">
			<div class="heading text-center">
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>Nos Événements</h2>
				<img class="dividerline" src="img/sep.png" alt="">
			</div>
			
			<div id="grid-gallery" class="grid-gallery">

					<section class="grid-wrap">
						<ul class="grid">
							<li class="grid-sizer"></li><!-- for Masonry column width -->				
							<li>
								<figure>
									<img src="img/event1.png" alt=""/>
									<figcaption><h3>FIF'ATOMIC CUP</h3>
									<p>Le 13 avril venez inscrire votre nom dans la légende !
									Match à élimination direct !
									Places limitées. Réservation et renseignements au 04 94 31 53 70</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="img/event2.jpg" alt=""/>
									<figcaption><h3>France / Danemark</h3><p>Diffusion le 29 mars du match chez Pizz'atomic à La Seyne !<br>
									Pour l'occasion : 1 pizza achetée sur place pendant le match, 1 bière offerte ! ALLEZ LES BLEUS !</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="img/event3.jpg" alt=""/>
									<figcaption><h3>Ouverture Pizz'Atomic La Seyne</h3><p>C'est officiel Pizz'Atomic TOULON est ouvert le lundi à partir du 23 mars !!<br>
									Si vous avez une envie de pizza ce soir, c'est à TOULON et LA SEYNE que ça se passe !</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="img/event2.jpg" alt=""/>
									<figcaption><h3>France / Danemark</h3><p>Diffusion le 29 mars du match chez Pizz'atomic à La Seyne !<br>
									Pour l'occasion : 1 pizza achetée sur place pendant le match, 1 bière offerte ! ALLEZ LES BLEUS !</p></figcaption>
								</figure>
							</li>						
						</ul>
					</section><!-- // end small images -->
								
				</div><!-- // grid-gallery -->
			</div>
	</section>
	
	<!--feedback-->
	<section class="feedback" id="feedback">
	<div class="container w960">
		<div class="heading">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Les Avis</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3><?php echo $descavis ; ?></h3>
		</div>
		<div class="row">
		<blockquote>Super Super Super<cite>Marguerite Lélon<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite> </blockquote>
		<blockquote>Les calzones sont au top ! Je recommande !<cite>Boris Desvint<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </cite> </blockquote>
		</div>
	</div>
	</section>
	
	<!--feedback-->
	<section class="contact" id="contact">
	<div class="container">
		<div class="heading">
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>Nous contacter</h2>
				<img class="dividerline" src="img/sep.png" alt="">
				<h3><?php echo $desccontact ; ?></h3>
		</div>
	</div>
	 <div class="container w960">
      <div class="row">
		<div class="done">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert"></button>
				Message envoyé! Merci!
			</div>
		</div>
       <form method="post" action="contact.php" id="contactform">
          <input name="name" type="text" class="contact col-md-6" placeholder="Nom" >
          <input name="email" type="email" class="contact noMarr col-md-6" placeholder="Adresse mail" >
          <textarea name="comment" class="contact col-md-12" placeholder="Message"></textarea>
          <input type="submit" id="submit" class="contact submit" value="Envoyer">
        </form>
      </div>
    </div>
	</section>
  
	<!--footer-->
	<section class="footer" id="footer">
	<p class="text-center">
		<a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
	</p>
	<div class="container">
		<ul>
			<li><a href="https://www.facebook.com/PizzAtomic?ref=br_rs"><img src="img/salut.png" width="70%";></a></li>
			</ul>
		<p>
			&copy; 2015 | <a href="http://localhost/pizzatomic/connection/connection.php">Admin</a>
		</p>
	</div>
	</section>
	
</div><!--wrapper end-->

<!--Javascripts-->
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/menustick.js"></script>
<script src="js/parallax.js"></script>
<script src="js/easing.js"></script>
<script src="js/wow.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/masonry.js"></script>
<script src="js/imgloaded.js"></script>
<script src="js/classie.js"></script>
<script src="js/colorfinder.js"></script>
<script src="js/gridscroll.js"></script>
<script src="js/contact.js"></script>
<script src="js/common.js"></script>

<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'specialties',
		  3: 'gallery',
		  4: 'feedback',
		  5: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
});
</script>
</body>
</html>