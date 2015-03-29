<header>
	<div class="logo">
		<?php
			echo $this->Html->image("ljeb.gif", array(
			    "alt" => "logo",
			    "width" => "250",
			    'url' => "/"
			));
		?>
	</div>
	
	<div class="right" id="login">
		<p> 
			<?php
				echo $this->Html->link(
									    'S\'enregistrer',
									    '/creer_compte'
									);
			?>
			/ <a href="#" onclick="javascript:hideshow(document.getElementById('box-login'))">Se Connecter</a>
		<p>
	</div>
	<div class="clear"> </div>	
	<div class="right" id="box-login" style="display:none;">
		<!-- Partie Non Connecté (Pop up de connexion) -->
		<form role="form">
			  <div class="form-group">
			    <label for="InputEmail">Email</label>
			    <input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="InputPassword">Mot de passe</label>
			    <input type="password" class="form-control" id="InputPassword" placeholder="P********">
	  		  </div>
			<!--<button type="submit" class="btn btn-default" id="btn-log">Connexion</button>-->
			<a class="btn btn-default" id="btn-log" href="index.php?log=1&chap=mon_compte" role="button">Connexion</a>
		</form>

	</div>



</header>