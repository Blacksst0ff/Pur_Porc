<!doctype html>
<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>Pure Porc Home Page</title>
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
						case 'createAccount':
							require_once('users/createAccount.html');
							break;
						case 'legislationFrancaise':
							require_once('pages/generalite/legislationFrancaise.html');
							break;
						case 'reglement':
							require_once('pages/generalite/reglement.html');
							break;
						case 'domMeca':
							require_once('pages/technique/domMeca.html');
							break;
						case 'element':
							require_once('pages/technique/element.html');
							break;
						case 'mon_compte':
							require_once('users/index.html');
							break;
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