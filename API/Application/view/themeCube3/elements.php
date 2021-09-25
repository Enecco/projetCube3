<?php

function readUser(){

include '../../models/Model1.php';

$req = "SELECT * from `user` ";
$result = $pdo->query($req);
if ($result){ ?>
	<td><?php echo "ID - Username <br>"; ?></td>
	<?php
	while ($row = $result->fetch_assoc()) { ?>
		<td><?php echo $row['ID_USER'], ' - '; ?></td>
		<td><?php echo $row['username'], ' - '; ?></td>
		<td><a class="btn btn-info" href="update.php?id=<?php echo $row['ID_USER']; ?>"><strong>Edit</strong>
                                    </a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['ID_USER']; ?>">
                                     <strong>Delete</strong></a></td>
		<td><?php echo "<br>"; ?></td>
	</tr>
<?php }
}

}


?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>User manager</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Accueil</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.php">Accueil</a></li>
							<li><a href="generic.html">Catalogue</a></li>
							<li class="active"><a href="elements.php">Mon profil</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h1>Utilisateurs<br />
									Manager</h1>
								</header>

								<!-- User stuff -->
									<h2>Users :</h2>

									<p><?php readUser() ?></p>
									
									<script src="updateDelete.js"></script>

								
							</section>
					</div>
			</div>

	</body>
</html>