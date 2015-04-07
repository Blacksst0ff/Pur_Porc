<footer>
	<div class="leftfooter">
	
		<h4 id='footer-header'> LENS UTILES </h4>
		
		<div class="lien" style="padding: 0 0 0 0px">
			<a href="index.php?chap=legislationFrancaise"> Legislation Française </a></br>
			<a href="index.php?chap=reglement"> Règlement sur le forum/Association </a></br>
			<a href="#"> Partenaire </a></br>
			<a href="#"> FAQ </a>
		</div>
	</div> 
	
	<div class="midfooter">
		<div class="logo">
			<a href="index.php">
				<?php
		        echo $this->Html->image('ljeb.gif', array('alt' => 'logo', 'width' => '150', 'url' => "/"));
		        ?>
			</a>
		</div>
		<div class="comLogo">
			<ul div="comLog">
			
				<li>
					<?php
			        echo $this->Html->link($this->Html->image('logo/facebook-logo.jpg', array('alt' => 'facebook des Pur Porc', 'width' => '50')),'https://www.facebook.com/groups/613571285378537/', array('target'=>'_blank', 'escape'=>false));
			        ?>
				</li>
			</ul>
			<ul div="comLog">
				<li>
					<?php
			        echo $this->Html->image('logo/twitter-logo.png', array('alt' => 'Twitter des Pur Porc', 'width' => '50', 'url' => "#"));
			        ?>
				</li>
			</ul>
			<ul div="comLog">
				<li>
					<?php
					echo $this->Html->link($this->Html->image('logo/youtube-logo.png', array('alt' => 'Youtube des Pur Porc', 'width' => '50')),'https://www.youtube.com/user/bin59710/videos', array('target'=>'_blank', 'escape'=>false));
			        ?>
				</li>
			
			</ul>
		</div>
	</div>

	<div class="rightfooter">
		<h4 id="footer-header"> SITEMAP </h4>
		
		<div class="map" style="padding: 0 0 0 0px">
			<a href="index.php?chap=terrain"> Notre terrain </a></br>
			<a href="#"> Présentation de l'association </a></br>
			<a href="http://airsoft-team-purporc.goodforum.net/"> Notre forum </a>
		</div>
	</div>
</footer>
