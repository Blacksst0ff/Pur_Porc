<nav class="navbar navbar-inverse" role="navigation">

	<div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">
	        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
	      </a>
	    </div>

	     <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <?php echo $this->Html->link("Généralités <span class='caret'></span>", '#',array('class'=>'dropdown-toggle','data-toggle'=>'dropdown', 'role'=>'button', 'aria-expanded' => 'false', 'escape' =>false)); ?> 
          <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Généralités <span class="caret"></span></a>-->
          <ul class="dropdown-menu" role="menu">
			<li><a href="index.php?chap=mon_compte">Mon Compte</a></li>
            <li class="divider"></li>
            <li><a href="index.php?chap=legislationFrancaise">Legislation Française</a></li>
			<li><a href="index.php?chap=reglement">Règlement sur le forum/Association</a></li>
          </ul>
        </li>
      </ul>
	  <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="index.php?chap=presentation" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Présentations <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?chap=membre">Membres</a></li>
            <li><a href="index.php?chap=terrain">Terrain</a></li>
            <li class="divider"></li>
            <li><a href="index.php?chap=assoc">Associations</a></li>
            <li><a href="index.php?chap=assocPart">Associations Partenaire</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">War Zone <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Partie Interne</a></li>
            <li class="divider"></li>
            <li><a href="#">Partie Externe</a></li>
          </ul>
        </li>
      </ul>
	  <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="index.php?chap=coinTech" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Coin Technique <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?chap=domMeca">Domaine de la mécanique</a></li>
            <li><a href="index.php?chap=domGear">Domaine du Gear</a></li>
			<li class="divider"></li>
			<li><a href="#">Vos demandes</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Divers <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Achat</a></li>
            <li><a href="#">Vente</a></li>
            <li><a href="#">Echange</a></li>
            <li class="divider"></li>
            <li><a href="#">Sellers Airsoft</a></li>
          </ul>
        </li>
      </ul>
      <!-- next features
      <ul class="nav navbar-nav navbar-right">
       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Rechercher</button>
       </form>
      </ul>-->
      </div><!-- /.navbar-collapse -->
	</div>
  
</nav>