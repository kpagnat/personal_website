<?php
	include "mdetect.php";
	$uagent_obj = new uagent_info();
	if($uagent_obj->DetectMobileLong()){
		header('Location: http://mobile.kevinpagnat.fr/');  
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title><?php echo $page_title; ?> - Kévin Pagnat - Ingénieur en Cognitique</title>
<meta name="keywords" lang="fr" content="pagnat, kevin, cognitique, ingénieur, cogniticien, ensc, idc, ergonomie, portfolio" />
<meta name="robots" content="index" />
<meta name="revisit-after" content="7 days" />
<meta name="author" lang="fr" content="Kévin Pagnat" />
<meta name="copyright" content="© Kévin Pagnat" />
<meta name="generator" content="Dreamweaver, bloc notes, Photoshop" />
<meta name="google-site-verification" content="-xLBFRqFL7HJlPGieC4zCZ5P3pBDj0jIOhhiTVZCWuM" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="icon" type="image/png" href="/images/favicon.ico" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.pack.js"></script>
<script type="text/javascript" src="js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'fr'}</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21934201-1', 'kevinpagnat.fr');
  ga('send', 'pageview');

</script>
</head>
<body>

<div id="wrapper">

    <div id="header">
        <div id="logo">
            <h1><a href="http://www.kevinpagnat.fr">Kévin Pagnat</a> - Ingénieur en Cognitique</h1>
            <p>Mes compétences et réalisations</p>
            <img src="images/kevin.jpg" alt="kevin pagnat ingénieur en cognitique" />
        </div>
		<div class="mots_clefs">
			Cognitique - Cogniticien - la cognitique - Ecole Nationale Supérieure de Cognitique - Ingénieur Cogniticien - Cognition - Cognitif
		</div>
        <!-- end #logo -->
        <!-- end #menu -->
    </div>
    <!-- end #header -->

	<?php
		$url = explode("/",$_SERVER["REQUEST_URI"]);
		$fichier = $url[count($url)-1];
	?>
    <div id="page">
        <div id="header-barre"></div>

        <div id="sidebar">
            <div id="sidebar-bgtop"></div>
            <div id="sidebar-content">
                <div id="sidebar-bgbtm">
                <ul>
                    <li>
                        <h2>Navigation</h2>
                        <ul>
                        	<li<?php echo (($fichier == "La-Cognitique") || ($fichier == ""))?" class=\"sidebar_active\"":""; ?>><?php echo (($fichier == "La-Cognitique") || ($fichier == ""))?"La Cognitique":"<a href=\"La-Cognitique\">La Cognitique</a>"; ?></li>
                            <li<?php echo ($fichier == "CV")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "CV")?"Curriculum Vitae":"<a href=\"CV\">Curriculum Vitae</a>"; ?></li>
                            <li<?php echo ($fichier == "Historique")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "Historique")?"Historique":"<a href=\"Historique\">Historique</a>"; ?></li>
                            <li<?php echo ($fichier == "Contact")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "Contact")?"Contact":"<a href=\"Contact\">Contact</a>"; ?></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h2>Réalisations</h2>
                        <ul>
                        	<h3>Web</h3>
                            <li<?php echo ($fichier == "PronoHebdo")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "PronoHebdo")?"PronoHebdo":"<a href=\"PronoHebdo\">PronoHebdo</a>"; ?></li>
                            <li<?php echo ($fichier == "Poker-2012")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "Poker-2012")?"Poker 2012":"<a href=\"Poker-2012\">Poker 2012</a>"; ?></li>
                            <li<?php echo ($fichier == "ASM-Musculation")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "ASM-Musculation")?"ASM Musculation":"<a href=\"ASM-Musculation\">ASM Musculation</a>"; ?></li>
                            
                           	<h3>Android</h3>
                            <li<?php echo ($fichier == "PolyCount")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "PolyCount")?"PolyCount":"<a href=\"PolyCount\">PolyCount</a>"; ?></li>
							<li<?php echo ($fichier == "OneSMS")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "OneSMS")?"OneSMS":"<a href=\"OneSMS\">OneSMS</a>"; ?></li>
                            
                            <h3>Projets</h3>
                            <li<?php echo ($fichier == "Tux-is-alive")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "Tux-is-alive")?"Tux is alive":"<a href=\"Tux-is-alive\">Tux is alive</a>"; ?></li>
                            <li<?php echo ($fichier == "Flex-Google")?" class=\"sidebar_active\"":""; ?>><?php echo ($fichier == "Flex-Google")?"Flex - Google Maps":"<a href=\"Flex-Google\">Flex - Google Maps</a>"; ?></li>                            
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h2>Compétences</h2>
                        <ul>
                            <li class="competences">
                                <b>Web :</b>
                            </li>
                            <li class="competences">
                                <ul>
                                    <li class="competences">
                                        <acronym title="eXtensible HyperText Markup Language">XHTML</acronym> (<acronym title="World Wide Web Consortium">W3C</acronym>) <img src="images/niveau4.gif" alt="niveau 4" />
                                    </li>
                                    <li class="competences">
                                        <acronym title="Cascading Style Sheets">CSS</acronym> (<acronym title="World Wide Web Consortium">W3C</acronym>) <img src="images/niveau4.gif" alt="niveau 4" />
                                    </li>
                                    <li class="competences">
                                        <acronym title="Hypertext Preprocessor">PHP</acronym> <img src="images/niveau4.gif" alt="niveau 4" />
                                    </li>
                                    <li class="competences">
                                        JavaScript <img src="images/niveau3.gif" alt="niveau 3" />
                                    </li>
                                    <li class="competences">
                                        MySQL <img src="images/niveau3.gif" alt="niveau 3" />
                                    </li>
                                </ul>
                            </li>
                            <li class="competences">
                                <b>Programmation :</b>
                            </li>
                            <li class="competences">
                                <ul>                              
				    				<li class="competences">
                                        Visual Basic <img src="images/niveau4.gif" alt="niveau 4" />
                                    </li>
									<li class="competences">
                                        SDK Android <img src="images/niveau3.gif" alt="niveau 3" />
                                    </li>
                                    <li class="competences">
                                        C/C++ <img src="images/niveau2.gif" alt="niveau 2" />
                                    </li>
                                    <li class="competences">
                                        Python <img src="images/niveau2.gif" alt="niveau 2" />
                                    </li>
                                    <li class="competences">
                                        Delphi <img src="images/niveau2.gif" alt="niveau 2" />
                                    </li>
                                    <li class="competences">
                                        Assembleur <img src="images/niveau2.gif" alt="niveau 2" />
                                    </li>
                                    <li class="competences">
                                        Matlab <img src="images/niveau2.gif" alt="niveau 2" />
                                    </li>
                                    <li class="competences">
                                        Qt <img src="images/niveau1.gif" alt="niveau 1" />
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                	<li>
                    	<h2>Mots-clés</h2>
                        <ul id="tagcloud">
                            <li class="pg1-1">Cognitique</li>
                            <li class="pg1-2">Connaissances</li>
                            <li class="pg1-4">XHTML</li>
                            <li class="pg1-3">Conception</li>
                            <li class="pg1-4">C/C++</li>
                            <li class="pg1-2">Facteur Humain</li>
                            <li class="pg1-1">Ingénieur</li>
                            <li class="pg1-4">Flash</li>
                            <li class="pg1-3">Interface</li>
                            <li class="pg1-4">PHP</li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
    	</div>
		<!-- end #sidebar -->
	<div id="content">
		<div id="right_side">
            <div class="liens_sociaux">
             	<ul>
                    <li>
                        <h2>Social</h2>
                        <ul>
                        	<li class="liste_cogniticiens">
                            	<b>Cogniticiens en ligne :</b>
                            	<ul>
                                	<li class="social_cog"><a href="http://www.camillechauvelin.com//" title="Camille Chauvelin, page perso">Camille Chauvelin</a></li>
                                    <li class="social_cog"><a href="http://www.xaviergodart.com/" title="Xavier Godard, page perso">Xavier Godard</a></li>
                                    <li class="social_cog"><a href="http://sylvain.saget.free.fr/" title="Sylvain Saget, page perso">Sylvain Saget</a></li>
                                    <li class="social_cog"><a href="http://www.thibautsagi.fr/" title="Thibaut Sagi, page perso">Thibaut Sagi</a></li>
                                </ul>
                            </li>
							<li class="social"><a href="http://gplus.to/kevinpagnat"><img src="images/google_social_logo.png" alt="profil google plus Kévin Pagnat" /></a></li>
                            <li class="social"><a href="http://www.facebook.com/people/Kevin-Pagnat/586909856"><img src="images/facebook_social_logo.jpg" alt="profil facebook Kévin Pagnat" /></a></li>
                        	
                        </ul>
                        <ul>
                        	<li class="google_plus">
                                <div class="g-plusone" id="plusonevalide"></div>
                                <script type="text/javascript">
                                var Validplusun=document.getElementById("plusonevalide");
                                Validplusun.setAttribute("data-href","http://www.kevinpagnat.fr");
                                Validplusun.setAttribute("data-size","tall");
                                </script>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--<ul>
                    <li>
                        <h2>Validations</h2>
                        <ul>
                            <li class="social"><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a></li>
                        </ul>
                        <ul>
                        	<li class="social"><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://kevinpagnat.fr&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;vextwarning="><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" /></a></li>
						</ul>
                    </li>
                </ul>-->
            </div>
		</div>
            	
        <div class="post">