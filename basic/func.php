<?php
//funções: blocos de instruções que retornam/recebem valores e executam ações
// function nome_funcao(parametros){
//              ações    
// } 
// retorno da função


function exibirCor($cor){
    echo "A cor escolhida foi {$cor}";
}echo exibirCor("vermelho");

echo "<br>";

function mult($a, $b){
    return $a * $b;
}echo mult(6, 2);

echo "<br>";

// FUNÇÕES PRÉ DEFINIDAS

//strtoupper()
//Esta função converte todos os caracteres da string para maiúscula. Link:

$meuNome = strtoupper("mathew murdock");
echo "Meu nome é {$meuNome}.<br>";

echo "----------------------------------------------------------------------------------------------<br>";

//str_ireplace()
//Esta função remove determinada ocorrência de toda uma string e substitui por outra

$mensagen = "Acesse o site do <b>PHP</b>";
$procurar = "PhP";
$substituir = "Google";
echo str_ireplace($procurar, $substituir, $mensagen);