<?php $page_title = "Ingénieur en Cognitique"; include "header.php"; ?>
    
<h3 class="title">La cognitique, c'est quoi ?</h3>
<div class="entry">
    <p>
        <span class="subtitle">Ingénieur Cogniticien ? Késako ? </span>
        Selon <a href="http://fr.wikipedia.org/wiki/Jean-Michel_Truong" title="fiche Wikipédia">Jean-Michel Truong</a>, la cognitique c'est :
        <span class="blockquote">
        Discipline scientifique et pratique technique, branche de l’informatique, qui a pour objet l’acquisition et la représentation formelle des connaissances et des modes de raisonnement, en vue de leur simulation à l’aide d’ordinateurs
        </span>
    </p>
    <div>
        Ma propre définition :
        <span class="blockquote">
        Discipline qui vise à intégrer le Facteur Humain dans la conception d'Interfaces Homme-Système.
        </span>
	<br />
	Depuis 2003, la cognitique est reconnue comme discipline d’ingénierie par la commission des titres d’ingénieur. D’une manière générale, elle est le « traitement automatique de la connaissance et des modes de raisonnement », au même titre que l’informatique est le « traitement automatique de l’information ».
	<br /><br />

	Cette discipline tire sa force de l’interdisciplinarité qu’elle propose à travers les différentes sciences qu’elle enseigne :
	<ul>
		<li><b>Sciences de l’Information</b> : intelligence artificielle, informatique, automatique et modélisation ;</li>
		<li><b>Sciences de la connaissance</b> : ergonomie, neurosciences cognitives, IHM, sciences humaines ;</li>
		<li><b>Méthodes pour l’ingénieur</b> : gestion de projets, GRH (Gestion des Ressources Humaines), TIC (Technologies de l’Information et de la Communication), droit de l’entreprise, anglais.</li>
	</ul>

	<br />
	Elle forme ainsi des ingénieurs dont les compétences s’étendent des interfaces hommes-systèmes et de la gestion des systèmes complexes, à la gestion des connaissances et des compétences, en passant par l’optimisation ergonomique de systèmes de production ou encore la modélisation de systèmes d’information.

    </div>
    <p>
        <span class="subtitle">Flux rss liés :</span>
        <?php
        require_once("feedparser.php");
        echo FeedParser("http://bernard-claverie.blogspot.com/feeds/posts/default?alt=rss", 3);
        ?>
    </p>
</div>
        
      
<?php include "bottom.php"; ?>