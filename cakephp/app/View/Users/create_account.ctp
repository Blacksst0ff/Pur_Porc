<ol class="breadcrumb">
  <li>
  		<?php
  			echo $this->Html->link(
									    'Home',
									    '/'
									);
  		?>
  </li>
  <li class="active">Création de compte</li>
</ol>

<div class="panel panel-default" id="create">
  <!-- Default panel contents -->
  <div class="panel-heading">Deviens Membre</div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">Tu aurais voulu naître avec une réplique dans les mains ?</li>
    <li class="list-group-item">Dans la semaine tu penses déjà à tes expéditions du week end.</li>
    <li class="list-group-item">Toi aussi tu veux tater de la gachette plutôt qu'un joystick</li>
  </ul>

  <div class="panel-heading">Rejoins nous !</div>
</div>

<?php
	echo $this->Html->image("pur_porc_approuved.png", array(
	    "alt" => "Approuvé par les Pur Porc",
	    "width" => "170",
	    "class" => "right",
	    "id" => "logo-approved"
	));
?>

<!-- Content Create Account -->			
<div class="box">
	<h1 class="box-title">Création de compte</h1>
	<div class="row">
		<?php
	  		echo $this->Form->create('User', array('action' => 'create_account'));
	  	?>
	  <div class="col-md-6">
	  	  <?php	 
	  	  	echo $this->Form->input('User.pseudo', array(
			    	'class' => 'form-control',
			    	'placeholder' => 'Entrer Pseudo',
			    'div' => array(
			        'class' => 'form-group'
			 		)
	  	  	));	
	  	  	echo $this->Form->input('User.nom', array(
			    	'class' => 'form-control',
			    	'placeholder' => 'Entrer Nom',
			    'div' => array(
			        'class' => 'form-group'
			 		)
	  	  	));	
	  	  	echo $this->Form->input('User.birthday', array(
			    	'class' => 'form-control',
			    	'type' =>'texte',
			    	'placeholder' => 'jj-dd-yyyy',
			    'div' => array(
			        'class' => 'form-group'
			 		)
	  	  	));	
	  	  	echo $this->Form->input('User.email', array(
			    	'class' => 'form-control',
			    	'placeholder' => 'Entrer un email',
			    'div' => array(
			        'class' => 'form-group'
			 		)
	  	  	));	
	  	  	echo $this->Form->input('User.password', array(
			    	'class' => 'form-control',
			    	'placeholder' => 'P*******',
			    'div' => array(
			        'class' => 'form-group'
			 		)
	  	  	));	
	  	  
		  ?>
	  </div>
	  <div class="col-md-6">
	    	<div id="radio-box">
	    		<?php
		    		$options = array('H' => 'Airsofteur', 'F' => 'Airsofteuse');
					$attributes = array('legend' => false, 'separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
					echo $this->Form->radio('genre', $options, $attributes);
				?>
			</div>

			<?php
				echo $this->Form->input('User.prenom', array(
				    	'class' => 'form-control',
				    	'placeholder' => 'Entrer Prenom',
				    'div' => array(
				        'class' => 'form-group'
				 		)
		  	  	));
				echo $this->Form->input('User.ville', array(
				    	'class' => 'form-control',
				    	'placeholder' => 'Entrer Ville',
				    'div' => array(
				        'class' => 'form-group'
				 		)
		  	  	));
				echo $this->Form->input('User.emailRP', array(
				    	'class' => 'form-control',
				    	'label' => 'Confirme Email',
				    	'placeholder' => 'Entrer un email',
				    'div' => array(
				        'class' => 'form-group'
				 		)
		  	  	));	
				echo $this->Form->input('User.passwordRP', array(
				    	'class' => 'form-control',
				    	'label' => 'Confirme Password',
				    	'type' => 'password',
				    	'placeholder' => 'P*******',
				    'div' => array(
				        'class' => 'form-group'
				 		)
		  	  	));	
			?>
		  <!-- Button trigger modal 
		  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  			Submit
		  </button>-->
			
		  <!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Création de compte</h4>
			      </div>
			      <div class="modal-body">
			        <div class="jumbotron">
					  <h2>Félicitation!</h2>
					  <img src="img/Success.png" class="right" id="pop-up-img" width="150">
					  <br/>
					  <br/>
					  <p>La demande de création de votre compte à bien été enregistrée. <br/><br/>
					  	Vous allez recevevoir un email à l'adresse : <em>pure_porc@gmail.com</em> <br/>
					  	Afin de valider vos informations.<br/><br/>
					  	Merci de votre adhésion et bonne visite sur le site.
					  </p>
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>


		
		<?php 
			$options = array(
			    'label' => 'Confirmer',
			    'class' => 'btn btn-primary btn-lg',
			    'style' => 'margin-bottom:15px;'
			);
			echo $this->Form->end($options); 
		?>
	  	
	  </div>
	</div>









</div>
<!-- End -->

			

