<?php

$sql 			= "SELECT * FROM config WHERE id ='1' LIMIT 1";
$query			= mysql_query($sql);
$data			= mysql_fetch_assoc($query);


echo "Hot tub / Pool Controler <br />";
echo "Server version: ".$data['version']."  <br />"; 

echo "<br /> <br/>";
echo "For further information or new software releases contact rickfeenstra1@hotmail.com";
echo "<br /> <br/>";
echo "Luxury Home Spa edition by Cory Verellen";
echo "<br />";
echo "Modified to be used with MQTT controlled <a href=\"https://www.itead.cc/sonoff-wifi-wireless-switch.html\" target=\"_blank\">Sonoff</a> switches and 
<a href=\"https://github.com/xoseperez/espurna\" target=\"_blank\">Espurna firmware</a>";

echo "<br/><p align=\"right\">  <a href=\"./manual.html#about\" target=\"_blank\"> <img src=\"./images/questionmark.png\"> </a> </p> ";


?>