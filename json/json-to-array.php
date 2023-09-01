<?php

$jsonStr = '{"nome":"Bulbassauro","categoria":"semente","peso":6.9,"evolucoes":["Bulbassauro","Ivyssauro","Venussauro"]}';

$arrPokemon = json_decode($jsonStr);

echo "<p><b>Nome: </b> ". $arrPokemon->nome . "</p>";
echo "<p><b>Categoria: </b> ". $arrPokemon->{"categoria"}. "</p>";
echo "<p><b>Peso: </b> ". $arrPokemon->peso. "</p>";
echo "<p><b>Evoluções: </b></p>";

for($i = 0; $i < count($arrPokemon->evolucoes); $i++){
    echo"<p>-------------<b>". $arrPokemon->evolucoes[$i] ." </b></p>"; 
}