<?php $page_title = "Ing�nieur en Cognitique"; include "header.php"; ?>
    
<h3 class="title">La cognitique, c'est quoi ?</h3>
<div class="entry">
    <p>
        <span class="subtitle">Ing�nieur Cogniticien ? K�sako ? </span>
        Selon <a href="http://fr.wikipedia.org/wiki/Jean-Michel_Truong" title="fiche Wikip�dia">Jean-Michel Truong</a>, la cognitique c'est :
        <span class="blockquote">
        Discipline scientifique et pratique technique, branche de l�informatique, qui a pour objet l�acquisition et la repr�sentation formelle des connaissances et des modes de raisonnement, en vue de leur simulation � l�aide d�ordinateurs
        </span>
    </p>
    <div>
        Ma propre d�finition :
        <span class="blockquote">
        Discipline qui vise � int�grer le Facteur Humain dans la conception d'Interfaces Homme-Syst�me.
        </span>
	<br />
	Depuis 2003, la cognitique est reconnue comme discipline d�ing�nierie par la commission des titres d�ing�nieur. D�une mani�re g�n�rale, elle est le � traitement automatique de la connaissance et des modes de raisonnement �, au m�me titre que l�informatique est le � traitement automatique de l�information �.
	<br /><br />

	Cette discipline tire sa force de l�interdisciplinarit� qu�elle propose � travers les diff�rentes sciences qu�elle enseigne :
	<ul>
		<li><b>Sciences de l�Information</b> : intelligence artificielle, informatique, automatique et mod�lisation ;</li>
		<li><b>Sciences de la connaissance</b> : ergonomie, neurosciences cognitives, IHM, sciences humaines ;</li>
		<li><b>M�thodes pour l�ing�nieur</b> : gestion de projets, GRH (Gestion des Ressources Humaines), TIC (Technologies de l�Information et de la Communication), droit de l�entreprise, anglais.</li>
	</ul>

	<br />
	Elle forme ainsi des ing�nieurs dont les comp�tences s��tendent des interfaces hommes-syst�mes et de la gestion des syst�mes complexes, � la gestion des connaissances et des comp�tences, en passant par l�optimisation ergonomique de syst�mes de production ou encore la mod�lisation de syst�mes d�information.

    </div>
    <p>
        <span class="subtitle">Flux rss li�s :</span>
        <?php
        require_once("feedparser.php");
        echo FeedParser("http://bernard-claverie.blogspot.com/feeds/posts/default?alt=rss", 3);
        ?>
    </p>
</div>
        
      
<?php include "bottom.php"; ?>