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
		<?php echo $this->Form->create('User', array('controler' =>'user', 'action'=>'login')); 	 
		  	  	echo $this->Form->input('email', array(
				    	'class' => 'form-control',
				    	'type' => 'email',
				    	'placeholder' => 'Entrer un email',
				    'div' => array(
				        'class' => 'form-group'
				 		)
		  	  	));	
		  	  	echo $this->Form->input('User.password', array(
				    	'class' => 'form-control',
				    	'type' => 'password',
				    	'placeholder' => 'P*******',
				    'div' => array(
				        'class' => 'form-group'
				 		)
		  	  	));		

		  	  	$options = array(
				    'label' => 'Connexion',
				    'class' => 'btn btn-default',
				    'id' => 'headlog'
				);
				echo $this->Form->end($options); 
		?>

	</div>



</header>