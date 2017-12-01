<?php
    require('connexion.php');
     
    // On recupere tout le contenu de la table news
/*$reponse = $bdd->query('SELECT valeur FROM val');
  

$donnees=$reponse->fetchAll();
for ($i=0; $i <count($donnees) ; $i++) { 
    $tab_donnees[]=$donnees[$i][0];
}*/
/*Affichage du contenu de la bdd
echo'<pre>';
echo print_r($tab_donnees);
echo'</pre>';*/
?> 


<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Supervision</title>

        <style type="text/css">

        </style>
    </head>
    <body>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>

<div id="container" style="min-width: 200px; height: 400px; margin: 0 auto"></div>

        <script type="text/javascript">
      

Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'SUPERVISION'
    },
    subtitle: {
        text: 'Source: <p>Energiculteur</p> '
    },
    xAxis: {
        allowDecimals: false,
        labels: {
            formatter: function () {
                return this.value; // clean, unformatted number for year
            }
        }
    },
    yAxis: {
        title: {
            text: 'Unité'
        },
        labels: {
            formatter: function () {
                return this.value / 1000 + 'k';
            }
        }
    },
    tooltip: {
        pointFormat: '{series.name} "#"<b>{point.y:,.0f}</b><br/>"#" {point.x}'
    },
    plotOptions: {
        area: {
            pointStart: 0,
            marker: {
                enabled: false,
                symbol: 'circle',
                radius: 2,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'Avec bdd',
        data: [<?php echo implode(",",$tab_donnees);?> ]
    }, {
        name: 'Sans bdd',
        data: [20,25,35,45,55]
    }]
});
        </script>
    </body>
</html>
