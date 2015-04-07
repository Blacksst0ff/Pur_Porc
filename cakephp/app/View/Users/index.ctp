<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Mon Compte</li>
</ol>

<div class="content">
<?php
// Bannière Mon compte
//require_once('banner.html');
?>

<ul class="nav nav-tabs nav-justified" role="tablist" id="myTab">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Infos Perso</a></li>
  <li role="presentation"><a href="#equip" aria-controls="equip" role="tab" data-toggle="tab">Equipements</a></li>
  <li role="presentation"><a href="#stat" aria-controls="stat" role="tab" data-toggle="tab">Statistiques</a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Préférences</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">
  	<?php
	// page informations personnelles
	echo $this->element('Users/infos',array(
	    "user" => $user
	)); 
	?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="equip">
  <?php
	// page des equipements
    echo $this->element('Users/equipement'); 
	?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="stat">
  <?php
	// page des statistiques
    echo $this->element('Users/stats'); 
	?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="settings">
  <?php
	// page des préférences
    echo $this->element('Users/preference'); 
	?>
  </div>
</div>


<script>
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

<?php
// si create est present afficher la section equipement 
if(isset($_GET["create"])){
?>
	<script>
		$('#myTab a[href="#equip"]').tab('show')
	</script>
<?php } ?>

</div>