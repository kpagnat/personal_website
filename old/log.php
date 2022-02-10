<?php $page_title = "Historique de kevinpagnat.fr"; include "header.php"; ?>
 
<script type="text/javascript" src="js/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="js/jqplot.pointLabels.min.js"></script>
<script type="text/javascript" src="js/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  var line1=[['01-Dec-2009', 18], ['01-Jan-2010', 36], ['01-Feb-2010', 27], ['01-Mar-2010', 50],
      ['01-Apr-2010', 30], ['01-May-2010', 62], ['01-Jun-2010',56], ['01-Jul-2010', 54],
      ['01-Aug-2010', 40], ['01-Sep-2010', 49], ['01-Oct-2010', 58], ['01-Nov-2010', 51], 
	  ['01-Dec-2010', 57], ['01-Jan-2011', 77], ['01-Feb-2011', 61], ['01-Mar-2011', 59],
      ['01-Apr-2011', 53], ['01-May-2011', 56], ['01-Jun-2011',83], ['01-Jul-2011', 53],
      ['01-Aug-2011', 58], ['01-Sep-2011', 81], ['01-Oct-2011', 47], ['01-Nov-2011', 49], 
	  ['01-Dec-2011', 40], ['01-Jan-2012', 35], ['01-Feb-2012', 35], ['01-Mar-2012', 25],
	  ['01-Apr-2012', 48], ['01-May-2012', 35], ['01-Jun-2012', 43], ['01-Jul-2012', 45],
	  ['01-Aug-2012', 32], ['01-Sep-2012', 34], ['01-Oct-2012', 32], ['01-Nov-2012', 33],
	  ['01-Dec-2012', 32], ['01-Janv-2013', 25], ['01-Feb-2013', 19], ['01-Mar-2013', 37],
      ['01-Apr-2013', 28], ['01-May-2013', 50], ['01-Jun-2013',26]];
  var plot1 = $.jqplot('chartdiv', [line1], {
      //title:'Data Point Highlighting',
      axes: {
������	xaxis: {
��������	//renderer: $.jqplot.CategoryAxisRenderer,
			renderer:$.jqplot.DateAxisRenderer,
          	tickOptions:{
            	formatString:'%m/%Y',
				fontSize:'8pt'
          	}			
������	},
		yaxis: {
��������	//renderer: $.jqplot.CategoryAxisRenderer,
			min:0,
			max:100,
			tickInterval:10,
			autoscale:true,
          	tickOptions:{
				fontSize:'8pt'
			}
������	}
����  },
		grid:{
			background: '#eeeeee'
		},
	 seriesDefaults: { 
        showMarker:true,
        pointLabels: { show:false } 
      },
      highlighter: {
        show: true,
        sizeAdjust: 7.5
      }
  });
});
</script>

<div class="post">
    <h3 class="title">Historique de kevinpagnat.fr</h3>
    <div class="entry">
   	
    <h3 class="subtitle">Statistiques des visites</h3>   
   	<div id="chartdiv"></div>
	
	<h3 class="subtitle">15 Mai 2014</h3>
	<ul>
		<li>Mise � jour CV et site</li>
	</ul>
	
	<h3 class="subtitle">26 Juillet 2013</h3>
	<ul>
		<li>Update des statistiques visiteurs</li>
	</ul>
	
	<h3 class="subtitle">26 Ao�t 2012</h3>
	<ul>
		<li>Restructuration de la partie "R�alisations"</li>
        <li>Ajout du lien vers le projet PolyCount</li>
	</ul>

   	<h3 class="subtitle">27 Avril 2012</h3>
	<ul>
		<li>Ajout d'un script JQuery pour permettre un zoom sur les images des sites</li>
        <li>Ajout d'un script JQuery pour afficher les visites sous forme graphique</li>
        <li>Update des statistiques visiteurs</li>
	</ul>
   
   	<h3 class="subtitle">07 D�cembre 2011</h3>
	<ul>
		<li>Modification partielle du CSS du site.</li>
        <li>Update des statistiques visiteurs</li>
	</ul>
   
   	<h3 class="subtitle">05 Octobre 2011</h3>
	<ul>
		<li>Refonte compl�te de la <a href="http://mobile.kevinpagnat.fr">version mobile du site.</a></li>
	</ul>
   
   	<h3 class="subtitle">22 Septembre 2011</h3>
	<ul>
		<li>Refonte compl�te du design.</li>
	</ul>
   
   	<h3 class="subtitle">15 Ao�t 2011</h3>
	<ul>
		<li>Modifications l�g�res du th�me du site.</li>
        <li>Ajout du site <b>PronoHebdo</b> aux R�alisations</li>
        <li>Update des statistiques visiteurs</li>
	</ul>
   
	<h3 class="subtitle">24 Mars 2011</h3>
	<ul>
		<li>Mise � jour du titre h1 du site en "K�vin Pagnat - Ing�nieur en Cognitique" pour le r�f�rencement</li>
	</ul>
   
	<h3 class="subtitle">09 Mars 2011</h3>
	<ul>
		<li>Int�gration des statistiques Google Analytics</li>
		<li>Update des statistiques visiteurs</li>
	</ul>

    <h3 class="subtitle">01 D�cembre 2010</h3>
	<ul>
		<li>Mise � jour de la comp�tence en programmation : Android</li>
        <li>Mise � jour de l'adresse d'h�bergement</li>
	</ul>
    
    
	<h3 class="subtitle">28 octobre 2010</h3>
	<ul>
		<li>Update des statistiques visiteurs</li>
	</ul>

	<h3 class="subtitle">14 Juin 2010</h3>
	<ul>
		<li>Cr�ation du CSS pour la version mobile du site</li>
	</ul>

	<h3 class="subtitle">01 Juin 2010</h3>
	<ul>
		<li>Am�lioration de la d�finition de la cognitique</li>
		<li>Ajout de la comp�tence "Python"</li>
	</ul>

        <h3 class="subtitle">17 Mai 2010</h3>
	<ul>
		<li>Construction de la page Historique</li>
		<li>Ajout du stage de 3<sup>�me</sup> ann�e dans le CV</li>
		<li>Mise � jour des comp�tences (niveau en Visual Basic)</li>
		<li>Mise en forme des acronymes sur les diff�rentes pages</li>
		<li>Suppression des liens vers le blog (et suppression du blog)</li>
	</ul>
	<ul>
		<li>Update des statistiques visiteurs</li>
	</ul>
	
	<h3 class="subtitle">D�cembre 2009</h3>
	<ul>
		<li>Statistiques Xiti</li>
	</ul>
	
	<h3 class="subtitle">Mars 2009</h3>
	<ul>
		<li>Cr�ation du site <a href="http://www.kevinpagnat.fr">www.kevinpagnat.fr</a></li>
	</ul>

 
    </div>
</div>


<?php include "bottom.php"; ?>