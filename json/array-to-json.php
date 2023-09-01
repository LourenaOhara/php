<?php

//JSON
/*
{
    "titulo" : "Pulp Fiction",
    "sinopse" : "Vincent Vega e Jules Winnfield são dois mafiosos com a missão de fazer uma cobrança a mando do chefe, Marsellus Wallace.",
    "ano" : "1995",
    "horarios" : "[14:50], [16:30], [20:00]"
}
*/


//Array
$arrayFilme = array(
    "titulo" => "Pulp Fiction",
    "sinopse" => "Vincent Vega e Jules Winnfield sao dois mafiosos com a missao de fazer uma cobranca a mando do chefe, Marsellus Wallace.",
    "ano" => 1995,
    "horarios" => array(
        "14:50", 
        "16:30", 
        "20:00"
    )
);

$jsonStr = json_encode($arrayFilme);
echo $jsonStr;