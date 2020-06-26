<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>
<body>
		
<header>
		<?php include('header.php') ?>

		</header>

		<main>

		<?php

		if(isset($_SESSION['login']) || isset($_SESSION['pass']))
					{
						echo "<section><h1 class='titree'>Chat Club</h1></section>

						<section>
				<article><h2>Choisissez le salon de votre club</h2></article>
			          </section>
			<section class='index'>
				<article><a href='discussion.php'><img  class='img'src='https://upload.wikimedia.org/wikipedia/fr/thumb/4/43/Logo_Olympique_de_Marseille.svg/806px-Logo_Olympique_de_Marseille.svg.png'
			width='250px'
			height='250px'></a></article>
			<aside><p>Olympique de Marseille</p></aside>
			</section>
		
			
			<section class='salon'>
			<article><h2>Salon en preparation</h2></article>
				
		<section class='index'>
			<article><img  class='img'src='https://upload.wikimedia.org/wikipedia/fr/thumb/e/e2/Olympique_lyonnais_%28logo%29.svg/888px-Olympique_lyonnais_%28logo%29.svg.png'
		width='250px'
		height='250px'></article>
		<aside><p>Olympique lyonnais</p></aside>
		</section>
		<section class='index'>
			<article><img  class='img'src='https://upload.wikimedia.org/wikipedia/commons/e/ea/Logo_ASSE.png'
		width='250px'
		height='250px'></article>
		<aside><p>Association Sportive de Saint-Étienne</p></aside>
		</section>
		<section class='index'>
			<article><img  class='img'src='https://upload.wikimedia.org/wikipedia/fr/thumb/4/4a/Paris_Saint-Germain_Football_Club_%28logo%29.svg/1024px-Paris_Saint-Germain_Football_Club_%28logo%29.svg.png'
		width='250px'
		height='250px'></article>
		<aside><p>Paris Saint-Germain</p></aside>
		</section>
			
		</section>";
					}
					else{
						echo " <section> 
						<article><h1 class='titree'>Chat Club </h1></article>
						<article class='info'><p>Le 1er Chat en ligne 100% gratuit dédier au club de votre coeur.</p>
						<p> Rejoins Chat Club  et partage ta passion.</p></article>
							</section>
				<section>
			        	<nav><ul class='titre'>
				<li class='lee'><a href='inscription.php'>Inscrivez-vous</a></li>
				<li class='lee'><a href='connexion.php'>connectez-vous</a></li>
						</ul></nav>
						</section>
						";
					   }
				?>

</main>


<footer>
				<section>
				<article>
				Copyright © 2020 All rights reserved
			</article>
		</section>
	</footer>
        </body>
</html>
