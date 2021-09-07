<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=enekatestream;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère le contenu id(1) de la table contenu
$reponse1 = $bdd->query('SELECT * FROM contenu  WHERE ID_contenu = 1');
$reponse2 = $bdd->query('SELECT * FROM contenu  WHERE ID_contenu = 2');

// On affiche chaque entrée une à une
$donnees1 = $reponse1->fetch();
$donnees2 = $reponse2->fetch();
?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>EnekateStream</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>EnekateStream</h1>
						<p>A free, fully responsive HTML5 + CSS3 streaming site developped by <a href="">Enecco</a> and <a href="">Pikate</a> </p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Accueil</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Accueil</a></li>
							<li><a href="generic.html">Catalogue</a></li>
							<li><a href="elements.html">Mon profil</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter" target="blank"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f" target="blank"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram" target="blank"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/Enecco/projetCube3" target="blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">6 septembre, 2021</span>
									<h2><a href="#">Le nouveau Netflix</a></h2>
									<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
									facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
									amet nullam sed etiam veroeros.</p>
								</header>
								<a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="#" class="button large">Full Story</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										<span class="date"><?php echo $donnees1['date_video'] ?></span>
										<h2><a href="#"><?php echo $donnees1['titre']?></a></h2>
									</header>
									<!-- <a href="#" class="image fit"><img src="C:\Users\Pikate\Videos\Kaamelott ( série )\Livre I\Épisodes\001 Heat.mkv" alt="" /></a> -->
									<!-- <video width="320" height="240" src="https://www.youtube.com/watch?v=yVQY6z7lyQ8" type=video/mp4>
										<source src="http://techslides.com/demos/sample-videos/small.ogv" type=video/ogg>
									  </video> -->
									<video controls src="images/every-breath-you-take-the-police-acoustic-cover-tutorial.mp4" ></video>
									<p><?php echo $donnees1['explication']?></p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date"><?php echo $donnees2['date_video']?></span>
										<h2><a href="#"><?php echo $donnees2['titre']?></a></h2>
									</header>
									<!-- <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a> -->
									<video controls src="images/otherside-cover.mp4"></video>
									<p><?php echo $donnees2['explication']?></p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Nom</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Adresse</h3>
								<p>264 Bd Godard<br />
									33300 Bordeaux</p>
							</section>
							<section>
								<h3>Téléphone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/Enecco/projetCube3" target="blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>