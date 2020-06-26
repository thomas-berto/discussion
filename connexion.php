<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>

<body>

 
  <header>
		<?php include('header.php');
		if(isset($_SESSION['login'])){header('Location: index.php');} 
		
		?>
	

		</header>
<main>

		
				<section> <div class="titre"><legend>Connexion</legend>
				<form  method="post">
						
						
					
			
						<input class="submi" type="text" name="login" placeholder="login"required/></br>
						
						<input class="submi" type="password" name="pass"  placeholder="mot de passe"required/></br>
		
						<input class="submit" type="submit"   value="Connexion" name="Connexion"required/></br>
						
					
				</form></div>
</section>
</main>
<footer>
				<section>
				<article>
				Copyright © 2020 All rights reserved
			</article>
		</section>
	</footer>		
</body></html>

	<?php

if(isset($_POST["Connexion"]))
{

	$login=$_POST["login"];
	$password=$_POST["pass"];
	$password = sha1($password);
	$connexion=mysqli_connect("localhost","root","","discussion");
	$requete = "SELECT * FROM utilisateurs WHERE login='$login'";
	$query=mysqli_query($connexion,$requete);
	$resultat=mysqli_fetch_all($query);

	
  if(!empty($resultat))
  {

    if ($password == $resultat[0][2])
    {
      $_SESSION['id']=$resultat[0][0];
      $_SESSION['login']=$resultat[0][1];
    mysqli_close($connexion);
    header('Location: index.php');
    
    }

  }
}

?>