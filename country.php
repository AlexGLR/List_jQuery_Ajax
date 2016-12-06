<?php

// echo $_POST['country'];

// $country = 2;
// $mas = array();
$country = $_POST['country'];
     if ($country==1) {$mas = array("New-York","Sietl","Denver","San-Francisco");} 
else if ($country==2) {$mas = array("London","Liverpool","Boston","Oxford");} 
else if ($country==3) {$mas = array("Berlin","Munich","Drezden","Bonn");} 
else if ($country==4) {$mas = array("Poznan","Warshaw","Gdansk","Krakow");} 
else {$mas = "";}
echo json_encode($mas);

?>