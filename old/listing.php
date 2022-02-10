<?php 
$num = $_GET["site"]-1;

// Listing des sites
$titles = array("PronoHebdo","Tux is alive","Flex - Google Maps","Poker 2012","ASM Musculation","PolyCount","OneSMS");
$pictures = array("pronohebdo","tux","flex","poker","musculation","polycount","onesms");

$subtitles = array("Site créé par 3 étudiants de l'ENSC","Projet transdisciplinaire de 1ère année à l'Institut de Cognitique.","Projet de 2ème année utilisant la technologie Flex (Flash)","Site web personnel qui permet la gestion d'un classement pour des joueurs de poker","Le site de l'ASM Musculation de Martignas sur Jalle","Jeu de réflexion avec des nombres","Application permettant l'envoi simplifié de SMS");

$descriptions = array("PronoHebdo est une plateforme innovante de pronostics sportifs en ligne : ce site orienté détente et paris entre amis met l'accent sur l'esprit de compétition, les classements et les performances des joueurs. Le défi : permettre à chacun de lancer ses paris sur une interface simple et engageante, et lui permettre de comparer ses performances à celles des autres joueurs sans se perdre dans une usine à gaz de chiffres.<br /><br /><b>Après 3 ans de fonctionnement, nous avons décidé de clôturer le site pour des raisons d'affluence faible. Cette expérience fût très enrichissante néanmoins.</b>",

"Le contexte était le suivant : quelle <b>interaction</b> peuvent avoir un robot à apparence animale (en l'occurrence un pingouin) et un enfant lors de l'apprentissage d'un exercice ? A l'aide d'expérimentations et d'un logiciel d'<b>apprentissage</b> dans plusieurs domaines (mathématiques, français, ...), nous avons réalisé une étude sur cette interaction et en avons tiré des conclusions.",

"Le but du projet était de réaliser une application utilisant la technologie <a href=\"http://www.adobe.com/fr/products/flex/\" title=\"Adobe Flex\">Flex</a> et destinée à la <b>navigation</b> d'un utilisateur sur une <b>carte Google</b> (type Google Maps). L'interface finale permet de tracer de manière aussi intuitive que possible un trajet et d'en calculer le temps de parcours, la distance, et d'avoir une visite guidée du chemin.",

"Une version plus évoluée est confectionnée chaque année et permet à des joueurs de poker (dont je fais parti) d'avoir à leur disposition un classement, des outils, des statistiques, un calendrier pour l'organisation de parties. Ce site me sert également assez souvent de <b>plateforme de tests</b> pour de nouvelles applications, de nouveaux scripts. Il utilise actuellement des technologies comme <b>Ajax</b> et <b>Javascript</b> pour la gestion du Drag&amp;Drop du comparateur de joueurs.",

"Le site de l'ASM Musculation m'a été demandé par mon père, trésorier de l'association, qui voulait pouvoir rassembler sur le web toutes les informations concernant l'association : photos/vidéos des compétitions, calendrier des évènements, tarifs des licenses, outils de calcul de performance. <br />Il permet aux adhérents d'être toujours au courant de ce qui se passe dans leur association. La fréquentation du site est constante depuis sa création.",

"PolyCount est un jeu de réflexion dans lequel chaque numéro de chaque case indique le nombre de voisins allumés.
Le but est de trouver le bon état (éteint ou allumé) pour chacune des cases de la grille.",

"OneSMS est une application permettant l'envoi simplifié de SMS prédéfini. L'utilisation est simple : configurer un couple Contact+SMS à envoyer, installer le widget sur le bureau du smartphone et en 2 clics le SMS est en envoyé (appui sur le widget + confirmation d'envoi). Une version pro a été développé permettant le choix parmi 3 SMS prédéfinis. Sur les smartphones actuels, l'application ne fonctionne plus.");

$urls = array("#","http://kevpagnat.free.fr/tux/","http://kevpagnat.free.fr/flex/","http://www.tep-series.fr/2012/","http://www.asm-musculation.fr/","https://play.google.com/store/apps/details?id=com.polycount","https://play.google.com/store/apps/details?id=com.onesms");


$page_title = $titles[$num];
include "header.php"; 
?>
<script type="text/javascript">
$(function() {
	$('a.expand').lightBox({
		fixedNavigation:true,
		imageLoading: 'images/lightbox-ico-loading.gif',
		imageBtnClose: 'images/lightbox-btn-close.gif',
		imageBtnPrev: 'images/lightbox-btn-prev.gif',
		imageBlank : 'images/lightbox-blank.gif',
		imageBtnNext: 'images/lightbox-btn-next.gif'});
});
</script>

<div class="post">
    <h3 class="title"><?php echo $titles[$num]; ?></h3>
    <div class="entry">
        <div>
        	<span class="subtitle">Description :</span>
        	<i><?php echo $subtitles[$num]; ?></i><br /><br />
          	<?php echo $descriptions[$num]; ?>
            <div class="bloc_images">
                <a href="images/<?php echo $pictures[$num]."1.png"; ?>" class="expand"><img src="images/<?php echo $pictures[$num]."1.png"; ?>" class="image_presentation" alt="<?php echo $titles[$num] ?> - illustration" title="<?php echo $titles[$num]; ?>" /></a>
                <a href="images/<?php echo $pictures[$num]."2.png"; ?>" class="expand"><img src="images/<?php echo $pictures[$num]."2.png"; ?>" class="image_presentation" alt="<?php echo $titles[$num]; ?> - illustration" title="<?php echo $titles[$num]; ?>" /></a>
				<?php 
				if(file_exists("images/".$pictures[$num]."3.png")){
				?>
                <a href="images/<?php echo $pictures[$num]."3.png"; ?>" class="expand"><img src="images/<?php echo $pictures[$num]."3.png"; ?>" class="image_presentation" alt="<?php echo $titles[$num]; ?> - illustration" title="<?php echo $titles[$num]; ?>" /></a>
				<?php
				}
				?>
            </div>
        </div>
        <div>
		<?php 
			if($urls[$num] != "#"){
		?>
        	<a href="<?php echo $urls[$num]; ?>" title="accès <?php echo $titles[$num]; ?>" class="acces_site">Accéder au site</a>
		<?php 
			} else {
		?>
			<a href="#" title="accès <?php echo $titles[$num]; ?>" class="acces_site">Site non accessible</a>
		<?php } ?>
        </div>
    </div>
</div>


<?php include "bottom.php"; ?>