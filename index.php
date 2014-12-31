<!doctype html>
<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>Pur Porc Home Page</title>
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" href="css/bootstrap-theme.css">
	   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="js/script.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <script src="js/npm.js"></script>
	</head>
		<body>
			<?php
				require_once('header.html');
				require_once('menu.html');
				/* On test si le paramètre chap existe */
				if (isset($_GET["chap"])) {
				/* On Choisi la page à afficher */
					switch ($_GET["chap"]) {
						// USER
						case 'createAccount':
							require_once('users/createAccount.html');
							break;
						case 'mon_compte':
							require_once('users/index.php');
							break;
						// PAGES / GENERALITE
						case 'generalite':
							require_once('pages/generalite/generalite.html');
							break;
						case 'legislationFrancaise':
							require_once('pages/generalite/legislationFrancaise.html');
							break;
						case 'reglement':
							require_once('pages/generalite/reglement.html');
							break;
						// PAGES / PRESENTATION
						case 'presentation':
							require_once('pages/presentation/presentation.html');
							break;
						case 'membre':
							require_once('pages/presentation/membre.html');
							break;
						case 'terrain':
							require_once('pages/presentation/terrain.html');
							break;
						case 'tofTerrain':
							require_once('pages/presentation/tofTerrain.html');
							break;
						case 'vidTerrain':
							require_once('pages/presentation/vidTerrain.html');
							break;
						case 'amenTerrain':
							require_once('pages/presentation/amenTerrain.html');
							break;
						case 'assoc':
							require_once('pages/presentation/assoc.html');
							break;
						case 'assocPart':
							require_once('pages/presentation/assocPart.html');
							break;
						// PAGES / TECHNIQUE
						case 'coinTech':
							require_once('pages/technique/coinTech.html');
							break;
						case 'domMeca':
							require_once('pages/technique/domMeca.html');
							break;
						case 'domGear':
							require_once('pages/technique/domGear.html');
							break;
						case 'element':
							require_once('pages/technique/element.html');
							break;
						case 'demRepUp':
							require_once('pages/technique/demRepUp.html');
							break;
						case 'entretien':
							require_once('pages/technique/entretien.html');
							break;
						case 'pbRec':
							require_once('pages/technique/pbRec.html');
							break;
						case 'gears':
							require_once('pages/technique/gears.html');
							break;
						// DEFAULT
						default:
							require_once('content.html');
							break;
					};
				}else{
				/* Si pas de paramètre => Home Page*/
					require_once('content.html');
				}
				require_once('footer.html');
			?>
		</body>
</html>