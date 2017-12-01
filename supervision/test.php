<?php
	require('mysql_connect.php');

?>
<?php
	
     $timestamp = mktime(0, 0, 1, 8, 15, 2017);
     
     $time = time();

     $second = $time-$timestamp;

 	 $second2=($second*0.000957);
 	 $second3=intval($second2+15000);
    
	echo "<td> $second s</td><br>";
    echo "<td> $second2 $</td><br>";
    echo "<td> $second3  $</td><br>";

?>

