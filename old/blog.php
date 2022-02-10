<?php $page_title = "Mon blog personnel"; include "header.php"; ?>

<div class="post">
    <h3 class="title">Kévin sur son blog</h3>
    <div class="entry">
        <p>
        	<img src="images/blog_picture.png" class="image_presentation" alt="kévin sur son blog - illustration" title="kévin sur son blog" />
        	<span class="subtitle">Description :</span>
        	Kévin sur son blog est mon espace de discussion personnel sur lequel je discute de choses et d'autres. Le plus souvent, les sujets traités sont sur les nouvelles technologies, l'ergonomie web en général, et quelques fois quelques pensées sur des conférences/forums/discussions auxquels je participe.
        </p>
        <p>
        	Ce blog n'est pour le moment pas aussi productif que ce que je souhaiterais mais je compte améliorer cela au cours de mes prochaines vacances, moments de liberté.
        </p>
        <p>
        	<a href="http://www.kevinpagnat.fr/blog/" title="accès blog" class="acces_site">Accéder au site</a>
        </p>  
         <p>
        	<span class="subtitle">Flux rss lié :</span>
            <?php
			require_once("feedparser.php");
			echo FeedParser("http://www.kevinpagnat.fr/blog/feed/", 3);
			?>
        </p>
        
    </div>
</div>


<?php include "bottom.php"; ?>