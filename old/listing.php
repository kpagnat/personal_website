<?php 
$num = $_GET["site"]-1;

// Listing des sites
$titles = array("PronoHebdo","Tux is alive","Flex - Google Maps","Poker 2012","ASM Musculation","PolyCount","OneSMS");
$pictures = array("pronohebdo","tux","flex","poker","musculation","polycount","onesms");

$subtitles = array("Site cr�� par 3 �tudiants de l'ENSC","Projet transdisciplinaire de 1�re ann�e � l'Institut de Cognitique.","Projet de 2�me ann�e utilisant la technologie Flex (Flash)","Site web personnel qui permet la gestion d'un classement pour des joueurs de poker","Le site de l'ASM Musculation de Martignas sur Jalle","Jeu de r�flexion avec des nombres","Application permettant l'envoi simplifi� de SMS");

$descriptions = array("PronoHebdo est une plateforme innovante de pronostics sportifs en ligne : ce site orient� d�tente et paris entre amis met l'accent sur l'esprit de comp�tition, les classements et les performances des joueurs. Le d�fi : permettre � chacun de lancer ses paris sur une interface simple et engageante, et lui permettre de comparer ses performances � celles des autres joueurs sans se perdre dans une usine � gaz de chiffres.<br /><br /><b>Apr�s 3 ans de fonctionnement, nous avons d�cid� de cl�turer le site pour des raisons d'affluence faible. Cette exp�rience f�t tr�s enrichissante n�anmoins.</b>",

"Le contexte �tait le suivant : quelle <b>interaction</b> peuvent avoir un robot � apparence animale (en l'occurrence un pingouin) et un enfant lors de l'apprentissage d'un exercice ? A l'aide d'exp�rimentations et d'un logiciel d'<b>apprentissage</b> dans plusieurs domaines (math�matiques, fran�ais, ...), nous avons r�alis� une �tude sur cette interaction et en avons tir� des conclusions.",

"Le but du projet �tait de r�aliser une application utilisant la technologie <a href=\"http://www.adobe.com/fr/products/flex/\" title=\"Adobe Flex\">Flex</a> et destin�e � la <b>navigation</b> d'un utilisateur sur une <b>carte Google</b> (type Google Maps). L'interface finale permet de tracer de mani�re aussi intuitive que possible un trajet et d'en calculer le temps de parcours, la distance, et d'avoir une visite guid�e du chemin.",

"Une version plus �volu�e est confectionn�e chaque ann�e et permet � des joueurs de poker (dont je fais parti) d'avoir � leur disposition un classement, des outils, des statistiques, un calendrier pour l'organisation de parties. Ce site me sert �galement assez souvent de <b>plateforme de tests</b> pour de nouvelles applications, de nouveaux scripts. Il utilise actuellement des technologies comme <b>Ajax</b> et <b>Javascript</b> pour la gestion du Drag&amp;Drop du comparateur de joueurs.",

"Le site de l'ASM Musculation m'a �t� demand� par mon p�re, tr�sorier de l'association, qui voulait pouvoir rassembler sur le web toutes les informations concernant l'association : photos/vid�os des comp�titions, calendrier des �v�nements, tarifs des licenses, outils de calcul de performance. <br />Il permet aux adh�rents d'�tre toujours au courant de ce qui se passe dans leur association. La fr�quentation du site est constante depuis sa cr�ation.",

"PolyCount est un jeu de r�flexion dans lequel chaque num�ro de chaque case indique le nombre de voisins allum�s.
Le but est de trouver le bon �tat (�teint ou allum�) pour chacune des cases de la grille.",

"OneSMS est une application permettant l'envoi simplifi� de SMS pr�d�fini. L'utilisation est simple : configurer un couple Contact+SMS � envoyer, installer le widget sur le bureau du smartphone et en 2 clics le SMS est en envoy� (appui sur le widget + confirmation d'envoi). Une version pro a �t� d�velopp� permettant le choix parmi 3 SMS pr�d�finis. Sur les smartphones actuels, l'application ne fonctionne plus.");

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
        	<a href="<?php echo $urls[$num]; ?>" title="acc�s <?php echo $titles[$num]; ?>" class="acces_site">Acc�der au site</a>
		<?php 
			} else {
		?>
			<a href="#" title="acc�s <?php echo $titles[$num]; ?>" class="acces_site">Site non accessible</a>
		<?php } ?>
        </div>
    </div>
</div>


<?php include "bottom.php"; ?>