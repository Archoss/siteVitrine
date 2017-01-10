<!DOCTYPE html>
<html>

	<head>
	<!-- Le meta -->
		<meta charset="utf-8">
		<!-- le style -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<!-- Le titre -->
		<title></title>
	</head>

	<body>
			<header>
					<h1>Webforce Beurk!!</h1>
					<nav>
						<ul>	
							<li><a href="#presentation">Présentation</a></li>
							<li><a href="#equipe">L'équipe</a></li>
							<li><a href="#reserve">Réservation</a></li>
						</ul>	
					</nav>	
			</header>

			<main>
				<section id="presentation">	

					<?php 	include "inc/presentation.php" ?>

				</section>

				<section id="equipe">	

					<?php 	include "inc/equipe.php" ?>

				</section>
					
				<section id="reserve">
					<h2>Réservation</h2>
					<p>Vous souhaitez reserver?</p>

						

						<?php 	include "inc/reservation.php" ?>

							
					</section>
			</main>

			<footer>
					<?php 	include "inc/footer.php" ?>	

			</footer>
	</body>
</html>