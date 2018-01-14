<?php
    /*require('connexion_bdd.php');

    mysql_query('TRUNCATE TABLE table_donnees');
    // Stockage du fichier .txt dans la table
    mysql_query('LOAD DATA INFILE "/var/www/html/Supervision/data.txt" INTO TABLE table_donnees FIELDS TERMINATED BY "|" LINES TERMINATED BY "\n"');
    // Recuperation du contenu de la table
    $donnees = mysql_query('SELECT nom_capteur, date_heure, donnee_capteur FROM table_donnees');
    $i = 0;
    $table_donnees = null;
    while ($row = mysql_fetch_array($donnees))
    {
        $table_donnees[$i] = "[Date.parse('" . $row[1] . "')" . "," . $row[2] . "]";
        $i++;
    }
	echo implode(',', $table_donnees);*/
	// Strings de valeurs de debug
	//$test = "[Date.parse('2017-10-02 00:00:00'),100],[Date.parse('2017-10-03 00:00:00'),200]";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'area',
		zoomType:'x',
		panning: true,
		panKey: 'shift'
    },
    title: {
        text: 'Supervision'
    },
    xAxis: {
		type: 'datetime',
		labels:{
			/*dateTimeLabelFormats: {
				month: '%d. %b',
				year: '%b'
					},*/
			format: '{value:%d-%m-%Y %H:%M:%S}'
			},
		title: {
			text: 'Période'
		},
        /*labels: {
			format: '{value:%Y-%M-%d}'
            formatter: function () {
                return this.value; // clean, unformatted number for year
            }
        }*/
    },
    yAxis: {
        title: {
            text: 'Valeurs mesurées'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        pointFormat: 'valeur <b>{point.y:,.0f}</b><br/> le {point.x:%d. %b %Y}'
    },
    plotOptions: {
        area: {
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
    series: {
        name: 'Humidimètre',
        data: [null, null, null, null, null, null, null, null, null, null,
            5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
            4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
            15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
            33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
            35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
            21000, 20000, 19000, 18000, 18000, 17000, 16000]
    }]
});
		</script>
	</body>
</html>
