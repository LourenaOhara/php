# PHP 
## 😍 Um guia para a mulher mais linda de todo universo 

Este guia é para te ajudar a entender o que é o PHP e para que ele é comumente aplicado 🚀

## O que é o PHP?
PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações
presentes e atuantes no lado do servidor, capazes de gerar conteúdo
dinâmico no World Wide Web. 🗿🍷

Humm... meio chatão esse parágrafo né? Deixa eu explicar melhor: 

O PHP é uma linguagem de programação que os desenvolvedores usam para criar sites que podem fazer coisas legais, como processar formulários, exibir informações diferentes com base no que o usuário faz e muito mais. Ele é como uma cola que mantém as partes do site juntas e torna tudo funcional e interessante para os visitantes 😎

Com PHP criamos **scripts** 
Scripts são programas ou rotinas que são executados em tempo de execução
Ou seja, um script não precisa ser transformado em código de máquina para depois ser executado!! ✌️

## Pra gente começar
Vamos precisar baixar algumas coisas para rodar nossos arquivos PHP. Como a gente curte um linux, segue abaixo  que vamos precisar e os comandos que vamos rodar! 💻 

### Servidor Apache
O Apache é um servidor de código aberto e nome oficial é Apache HTTP Server.
O Apache permite que donos de sites mostrem e mantenham seus conteúdos na internet – daí o nome de “servidor de internet”. Ele é um dos mais antigos e confiáveis servidores de internet. 🐻
Quando alguém visita um site, esse visitante entra em um domínio na barra de endereço por um navegador. Em seguida, o servidor entrega os arquivos solicitados atuando como se fosse um como um entregador de encomendas, só que virtual.
Dessa forma, vamos abrir nossos arquivos usando o navegador. Vai ser legal, você vai ver!😁
Pra instalar o apache, rode os seguintes comandos:
```
sudo apt update && sudo apt -y upgrade
```
e depois
```
sudo apt install -y apache2
```
No navegador, digite **localhost**. Se tudo estiver certo, você deve visualizar a seguinte tela:

### Instalando o PHP 
Execute os seguintes comandos:
```
sudo apt install software-properties-common ca-certificates lsb-release apt-transport-https
```
```
sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
```
```
sudo apt update
```
```
sudo apt install php7.4
```
Aqui, precisamos reiniciar o apache para pegar as atualizações que foram feitas. Execute o comando:
```
sudo systemctl restart apache2
```
No seu computador, caminhe até a pasta /var/www/html
Dentro da pasta, crie um arquivo com o nome **info.php**
Escreva como abaixo, no arquivo:

```
<?php
phpinfo();
```
No Browswer, digite **localhos/info.php**. Você deve ver a seguinte tela:

🎯 Se deu tudo certo até aqui... PODEMOS COMEÇAR
Antes de seguir, já disse que vc é linda? 😘
LINDA!  💞

**IMPORTANTE**: Sempre que for mexer e criar os scripts, inicie o servidor e deixe ele rodando. Dessa forma vamos conseguir executar no browse todas as atualizações que fizermos ao longo do guia

## O básico do PHP
Então, linda. Chegou o momento de colocar a mão na massa e entender, além de PHP, um pouco sobre linguagem de programação.
O conteúdo agora, vai te mostrar como construir nossos scrpits!
Eu criei alguns exemplos e acho que vai funcionar bem da seguinte forma: eu te explico o que faz e depois te mostro. Você pode copiar os arquivos no seu note e ver se consegue executar. Pode ser?
AH!! Já tava esquecendo. Você pode usra qualquer editor de programação (NotePad, Sublime, etc).Eu gosto de usar o VSCode. Se precisar instalar, pode seguir esse passo passo [aqui ó!](https://www.edivaldobrito.com.br/visual-studio-code-no-linux/) 

### Imprimir Texto
Em PHP, utilizamos o **echo** e o **print** para imprimir o texto. 
Existem diferenças importantes entre os dois comandos
📝echo não retorna nenhum valor, e a print retorna o número 1, e isso é importante para usarmos em expressões, coisas que vamos aprender mais adiante
📝echo suporta várias informações ao mesmo tempo (strings, separadas por vírgula) enquanto a print só aceita uma por vez.

Podemos escrever os comandos assim:
```
<?php
echo "Meu nome é Silu!";
```
```
<?php
print "Meu nome é Cida";
```
o exemplo de **impressão** [aqui](https://github.com/LourenaOhara/php/blob/main/basic/print.php)

### Variáveis e Comentários
Variáveis servem para armazenar valores que serão utilizados posteriormente. O valor da variáve só muda através de algumas funções, mas isso vamos entender melhor depois
Exemplo de variáveis:
▶️ $a = 1
▶️ $nome = "Tadeu"
▶️ $altura = 1.67
Na imagem abaixo, temos os tipos de variáveis mais usados em PHP
```
<?php
/isso é um comentário/ - apenas uma linha.
/*isso
é um
bloco de
comentário*/ - comenta um bloco.
```
Podemos comentar nosso código para facilitar o entendimento do nosso script. No php, podemos comentar das seguintes formas:

o exemplo de **variáveis e comentários** [aqui](subir arquivo)

### var_dump
O var_dump é muito utilizado para imprimir variáveis. Ele imprime o conteúdo e o tipo da variável
O comando fica assim:

```
<?php
$a = 10;
var_dump($a);
```
Na tela, veremos a impressão assim: **int(10)**

o exemplo de **var_dump** [aqui](https://github.com/LourenaOhara/php/blob/main/basic/var.php)

### Operadores matemáticos
Podemos realizar cálculos matemáticos em diversas linguagens. Em PHP não é diferente
Adição(+), subtração(-), multiplicação(*), divisão(/) e resto da divisão(%), são os principais operadores
Exemplos de cálculo:
```
<?php
$a = 6;
$b = 3;
$c = $a % $b;
echo $c; // vai ser impresso 0. Pois o resto da divisão de 6 por 3 é igual a 0
```
o exemplo de **operadores matemáticos** [aqui](https://github.com/LourenaOhara/php/blob/main/basic/math.php)

### Operadores de Condição (e um foreach)
No PHP, os operadores mais comuns são: **IF-ELSIF-ELSE** e **WHILE**
A lógica do **IF-ELSIF-ELSE** é: "se isso, faça isso. Senão, faça aquilo"
Já, a do **WHILE** é: "enquanto isso, faça isso"

o exemplo de **operadores de condição** [aqui](https://github.com/LourenaOhara/php/blob/main/basic/cond.php)

### Função
Quando se desenvolve um projeto muito grande, é possível ter várias partes que necessitam do mesmo código, então ficar duplicando códigos pode dar muito trabalho na hora de fazer a manutenção e deixar o projeto mais pesado. Para solucionar vários problemas existem as funções, elas criam blocos de instruções que podem retornar valores, receber valor e com isto executar ações.

o exemplo de **operadores de condição** [aqui](https://github.com/LourenaOhara/php/blob/main/basic/func.php)
