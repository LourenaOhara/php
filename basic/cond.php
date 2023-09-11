<?php
//if //elseif //else

$idade = 17;

if($idade >= 18){
    echo "Ok, você pode entrar!<br>";
}
elseif ($idade == 17){
    echo "Ano que vem eu te libero!<br>";
}
else{
    echo "Entrada não permitida!<br>";
}

echo "----------------------------------------------------------------------------------------------<br>";

// while

$cont = 0;

while($cont < 10){
    echo "enfia que cabe!" . "<br>";
    $cont += 1;
}

echo "----------------------------------------------------------------------------------------------<br>";

//for

for($i=0; $i<=10; $i++){
    $i *= 2;
    echo $i . "<br>";
}

echo "----------------------------------------------------------------------------------------------<br>";

//do while 

$x = 1;
do{
    echo "Número " . $x . "<br>";
    $x++;
}while($x <= 10);

echo "----------------------------------------------------------------------------------------------<br>";

//foreach

$nomes = array("Lou", "Amana", "Louie", "Feew", "Fafa");
foreach($nomes as $valor){
    echo "Nome atual: {$valor} <br/>";
}