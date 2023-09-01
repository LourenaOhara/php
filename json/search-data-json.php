<?php
$zip = "33162";
$str = file_get_contents('https://api.zippopotam.us/us/'. $zip); 

$arrCity = json_decode($str);

echo "<p><b>Post Code: </b> ". $arrCity->{"post code"} . "</p>";
echo "<p><b>Country: </b> ". $arrCity->country. "</p>";
echo "<p><b>Conutry Abreviation: </b> ". $arrCity->{"country abbreviation"}. "</p>";
echo "<p><b>Places: </b></p>";
foreach( $arrCity->places as $place) {
    echo "<p><b>Places: </b></p>";
    echo"<p>-------------" . $place->{"place name"}."<br>";
    echo"<p>-------------" . $place->longitude."<br>";
    echo"<p>-------------" . $place->state."<br>";
    echo"<p>-------------" . $place->{"state abbreviation"}."<br>";
    echo"<p>-------------" . $place->latitude."<br>";
 }