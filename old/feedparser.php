<?php
// on inclut la classe magpierss
require_once("magpierss/rss_fetch.inc");


// la fonction FeedParser() va extraire le contenu pour l'afficher
// elle prend en paramètre $url_feed, l'url du flux RSS et $nb_items_affiches, le nombre d'éléments (items) à afficher
function FeedParser($url_feed, $nb_items_affiches) {

    // lecture du fichier distant (flux XML)
    $rss = fetch_rss($url_feed);
	$html = "";

    // si le parcours du fichier se passe bien, on lit les élements (items)
    if (is_array($rss->items))  {

        // on ne garde que les $nb_items_affiches premiers éléments (items), nombre défini dans l'en-tête de la fonction
        $items = array_slice($rss->items, 0, $nb_items_affiches);

        // on peut récupérer les informations sur le site proposant le flux (optionnel)
        $site_titre = htmlspecialchars  ($rss->channel["title"]); // titre du site
        $site_lien = htmlentities(addslashes($rss->channel["link"])); // lien du site
        $site_description = htmlentities(addslashes($rss->channel["description"])); // description du site   


        // à présent on stocke les données dans $html, variable à afficher

        // titre sous forme de lien
        $html .= "<span class=\"titre_flux\"><a href=\"".$site_lien."\" title=\"".$site_description."\">".$site_titre."</a></span><br />\n";

        // on affiche la description du site proposant le flux
        $html .= "<br />\n"; // le clear="left" renvoie à la ligne même s'il y a une image

        // on fait une boucle sur les informations : pour chaque item, récupérer $titre... et afficher
        foreach($items as $item) {

            // on mémorise les informations de chaque item dans des variables
            $titre = htmlspecialchars  ($item["title"]);
            $lien = htmlspecialchars  ($item["link"]);
			$description = htmlspecialchars($item["description"]);
            // la date utilisée pour les flux RSS est au format timestamp, il faut donc formater la date
            // conversion au format jj/mm/aa. pour plus d'informations, vous conférer au tutorial sur les timestamp
			
			if($item["pubdate"] <> ""){
				$date = date("d/m/y",strtotime($item["pubdate"]));         
			}else{
				$date = date("d/m/y",strtotime($item["published"])); 	
			}
			
            // on affiche le titre de chaque item
            $html .= "<span>$date - </span><a href=\"".$lien."\" title=\"".$titre."\">".$titre."</a><br />\n";
			$html.= "<br />\n";
			
        } // fin de la boucle
		
		
        // on retourne la variable $html au programme (elle contient le code HTML pour l'affichage du flux)
        return $html;
    } // fin du traitement du fichier
} // fin de la fonction FeedParser()
?> 