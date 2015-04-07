<?php
var_dump($user);
?>

	<div class="row">
	

	  <div class="col-md-12">
	  <div class="panel panel-primary">
	  	<div class="panel-heading">
	  	Renseignements Personnels  
	  	<button type="button" class="btn btn-warning right" data-toggle="modal" data-target=".bs-example-modal-lg">Modifier</button>
	  	</div>
		  <div class="panel-body">

		  	<p class="right"><span class="badge">94%</span></p>
		  	<div class="progress">	
			  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 94%">
			    <span class="sr-only">94% Complete</span>
			  </div>

			</div>

		  	<div class="col-md-12"><h3>Général</h3></div>
		    	  <div class="col-md-6">
		    	  	<form role="form">
			    	    <div class="form-group">
						    <label class="col-sm-4 control-label">Nom :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Bernier</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Civilité :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Homme</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Ville :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Valenciennes</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Adresse :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">90 Avenue Villars</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Profession :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Informaticien</p>
						    </div>
						  </div>
					</form>
				  </div>
				  <div class="col-md-6">
		    	  	<form role="form">
			    	    <div class="form-group">
						    <label class="col-sm-4 control-label">Prénom :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Kévin</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Naissance :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">10/01/1993</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Code Postal :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">59300</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Téléphone :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">06 26 61 19 78</p>
						    </div>
						  </div>
					</form>
				  </div>

				  <div class="col-md-12"><h3>Informations sur le site</h3></div>

				  <div class="col-md-6">
		    	  	<form role="form">
			    	    <div class="form-group">
						    <label class="col-sm-4 control-label">Pseudo :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Blackst0ff</p>
						    </div>
						  </div>
						   <div class="form-group">
						    <label class="col-sm-4 control-label">Avatar :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">-</p>
						    </div>
						  </div>
						   <div class="form-group">
						    <label class="col-sm-4 control-label">Email :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">bernier.kevin59@gmail.com</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-4 control-label">Mot de Passe :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">********</p>
						    </div>
						  </div>
						 
					</form>
				  </div>
				  <div class="col-md-6">
		    	  	<form role="form">
			    	    <div class="form-group">
						    <label class="col-sm-4 control-label">Statut :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Stay Peace Bro !</p>
						    </div>
						  </div>
					</form>
				  </div>
				  <div class="col-md-12"><h3>Hobbies</h3></div>

				  <div class="col-md-6">
		    	  	<form role="form">
			    	    <div class="form-group">
						    <label class="col-sm-4 control-label">Passion :</label>
						    <div class="col-sm-8">
						      <p class="form-control-static">Weed</p>
						    </div>
						  </div>
					</form>
				  </div>
		  </div>

	<!-- Model d'edition de compte -->

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modifications de mes informations personnelles</h4>
      </div>
    <div class="modal-body">      
      		  	<div class="col-md-12">
      		  	<div class="col-md-6">
	      		  		<h3>Général</h3>
	      		  	</div>
	      		  	
	      		  		<div id="radio-box" class="right" style="margin-top:20px;">
					    	<p>
						      	<label class="radio-inline">
								  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="F"> Airsofteuse
								</label>
								<label class="radio-inline">
								  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="M" checked> Airsofteur
								</label>
							</p>
						</div>
					
      		  	</div>
		    	  <div class="col-md-6">
		    	  	<form role="form">
			    	    <div class="form-group">
						    <label for="InputNom">Nom</label>
						    <input type="text" class="form-control" id="InputNom" placeholder="Bernier">
						  </div>
							<div class="form-group">
							    <label for="InputVille">Ville</label>
							    <input type="text" class="form-control" id="InputVille" placeholder="Valenciennes">
						  	</div>
						  	<div class="form-group">
							    <label for="InputAddress">Adresse</label>
							    <input type="text" class="form-control" id="InputAddress" placeholder="90 Avenue Villars">
						  	</div>
						  	<div class="form-group">
							    <label for="InputProfession">Profession</label>
							    <input type="text" class="form-control" id="InputProfession" placeholder="Informaticien">
						  	</div>
					</form>
				  </div>
				  <div class="col-md-6">
		    	  	<form role="form">
			    	    <div class="form-group">
						    <label for="InputPrenom">Prenom</label>
						    <input type="text" class="form-control" id="InputPrenom" placeholder="Kévin">
						  </div>
						  <div class="form-group">
						    <label for="InputBirth">Date de naissance</label>
						    <input type="date" class="form-control" id="InputBirth" placeholder="10/01/1993">
						  </div>
						  <div class="form-group">
						    <label for="InputCp">Code Postal</label>
						    <input type="date" class="form-control" id="InputCp" placeholder="59300">
						  </div>
						  <div class="form-group">
						    <label for="InputTel">Téléphone</label>
						    <input type="date" class="form-control" id="InputTel" placeholder="06 26 61 19 78">
						  </div>
					</form>
				  </div>

				  <div class="col-md-12">
					  <div class="col-md-6">
					  	<h3>Informations sur le site</h3>
					  </div>
				  </div>

				  <div class="col-md-6">
		    	  	<form role="form">
			    	     <div class="form-group">
						    <label for="InputPseudo">Pseudo</label>
						    <input type="text" class="form-control" id="InputPseudo" placeholder="Blackst0ff">
						  </div>
						   <div class="form-group">
						    <label for="InputEmail">Email</label>
						    <input type="email" class="form-control" id="InputEmail" placeholder="bernier.kevin59@gmail.com">
						  </div>
						  <div class="form-group">
						    <label for="InputPassword">Password</label>
						    <input type="password" class="form-control" id="InputPassword" placeholder="**********">
						  </div>
						  <div class="form-group">
						    <label for="InputFile">Avatar</label>
						    <input type="file" id="InputFile">
						  </div>
					</form>
				  </div>
				  <div class="col-md-6">
		    	  	<form role="form">
			    	  	<div class="form-group">
							    <label for="InputStatut">Statut</label>
							    <input type="text" class="form-control" id="Statut" placeholder="Stay Peace Bro !">
						</div>
					   <div class="form-group">
					    <label for="InputEmail1">Confirme Email</label>
					    <input type="email" class="form-control" id="InputEmail1" placeholder="bernier.kevin59@gmail.com">
					  </div>
					  <div class="form-group">
					    <label for="InputPassword1">Confirme Password</label>
					    <input type="password" class="form-control" id="InputPassword1" placeholder="**********">
					  </div>
						<div class="form-group">
						    <label for="InputFile">Image Avatar</label>
						    -
					  </div>
					</form>
				  </div>
				  <div class="col-md-12">
					  <div class="col-md-6">
					  	<h3>Hobbies</h3>
					  </div>
				  </div>
				  <div class="col-md-6">
		    	  	<form role="form">
			    	  	<div class="form-group">
							    <label for="InputPassion">Passion</label>
							    <input type="text" class="form-control" id="InputPassion" placeholder="Weed">
						</div>
					</form>
				  </div>
		</div>
		<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Sauvegarder</button>
      </div>
    </div>
  </div>
</div>



	  </div>

	  </div>
	</div>




