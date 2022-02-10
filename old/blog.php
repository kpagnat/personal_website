<?php $page_title = "Mon blog personnel"; include "header.php"; ?>

<div class="post">
    <h3 class="title">K�vin sur son blog</h3>
    <div class="entry">
        <p>
        	<img src="images/blog_picture.png" class="image_presentation" alt="k�vin sur son blog - illustration" title="k�vin sur son blog" />
        	<span class="subtitle">Description :</span>
        	K�vin sur son blog est mon espace de discussion personnel sur lequel je discute de choses et d'autres. Le plus souvent, les sujets trait�s sont sur les nouvelles technologies, l'ergonomie web en g�n�ral, et quelques fois quelques pens�es sur des conf�rences/forums/discussions auxquels je participe.
        </p>
        <p>
        	Ce blog n'est pour le moment pas aussi productif que ce que je souhaiterais mais je compte am�liorer cela au cours de mes prochaines vacances, moments de libert�.
        </p>
        <p>
        	<a href="http://www.kevinpagnat.fr/blog/" title="acc�s blog" class="acces_site">Acc�der au site</a>
        </p>  
         <p>
        	<span class="subtitle">Flux rss li� :</span>
            <?php
			require_once("feedparser.php");
			echo FeedParser("http://www.kevinpagnat.fr/blog/feed/", 3);
			?>
        </p>
        
    </div>
</div>


<?php include "bottom.php"; ?>