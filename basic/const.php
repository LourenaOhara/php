<?php
// constante 
// define (nome, valor)


define("altura", 1.67);
define("idade", 34);
define("nome", "lourena");

echo "Olá, gostaria de me apresentar: <br>";
echo "Meu nome é " . nome . "<br>";
echo "Tenho " . altura . "m de altura" . "<br>";
echo "E tenho " . idade . " anos" . "<br>";

//algumas constantes pré-definidas

//A versão atual do PHP como uma string no formato "major.minor.release[extra]".
echo PHP_VERSION . "<br>";

//A família do sistema operacional para o qual o PHP foi compilado
echo PHP_OS_FAMILY . "<br>";

//O símbolo correto de 'Fim de linha' para esta plataforma.
var_dump (PHP_EOL) . "<br>";