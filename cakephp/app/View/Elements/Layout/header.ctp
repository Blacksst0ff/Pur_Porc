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

<!-- Partie user connecté -->








    <!-- connexion -->
<?php if(AuthComponent::user('id')): ?> 
		<div class="right" id="login">
			<p> 
				<?php echo $this->Html->link('Mon Compte',array('controller'=>'users','action'=>'index')) ?>
				/ <?php echo $this->Html->link('Déconnexion', array('controller'=>'users', 'action'=>'logout')) ?>
			<p>
		</div>
		<div class="clear"> </div>	
		<div class="right" id="box-login">
			<!-- Partie Connecté (Infos user) -->
			<div class="box-avatar">
				<?php echo $this->Html->image(AuthComponent::user('avatar'), array('alt' => 'avatar', 'class' =>'img-thumbnail', 'id' => 'avatar')); 
					  echo $this->Html->image('user/plaque-militaire.png', array( 'id' => 'border-avatar')); 
				?>
			</div>
		</div>
		<div class="plaque-user right">
			<header style="background:none;">
				<?php echo $this->Html->image('rang/rang-01.jpg', array( 'id' => 'rang')); ?>
				<h2 id="user"><?php echo AuthComponent::user('pseudo');?><span> [LVL <?php echo AuthComponent::user('lvl');?>]</span></h2>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
				    <?php echo AuthComponent::user('exp').' / 10000 exp';?> 
				  </div>
				</div>
			</header>
			<div class="col-md-6">
				<div class="list-group">
					<a href="#" class="list-group-item"><span class="badge">14</span>Trophé(s)</a>
			  		<a href="#" class="list-group-item"><span class="badge">1</span>Classe(s)</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="list-group">
			  		<a href="#" class="list-group-item"><span class="badge">16</span>Titres</a>
				</div>
			</div>
			<div class="col-md-12" id="user-footer">
				<p>Le Défourailleur de billes</p>
			</div>
		</div>
<?php else: ?>
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
					    'id' => 'headlog',
					    'admin' => false
					);
					echo $this->Form->end($options); 
			?>
		</div>
<?php  endif;?>



</header>