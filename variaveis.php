<?php

#Declarar váriavel em php basta colocar o $ na frente
#Pode usar depois do $, números, letras e sublinhados entre as letras
#Não inserir número depois do $, exemplo: e $1_apple
#Ao invés de usar e $1_apple use $one_apple


$nome = "Fulano";
$frase = "A maneira de começar é parar de falar e começar a fazer. – Walt Disney";
// print $frase;

#Referência Indireta

$car = "BMW";
$$car = "Z4";
// print ${'BMW'};

$name = "Air nike";
$$name = "Registered item";
// print ${'Air nike'};

$name = "John";
$$name = "Registered user";
// print $John;


#Gerenciar variáveis

# 1 - Verificar se existe
$my_name = '';
if(isset($my_name))
{
    // print '$my_name existe';
}else{
    // print "Não existe";
}
# 2 - Deleta variavel
$gameconsole = "PlayStation 4";
unset ($gameconsole);
if (isset ($gameconsole)) {
    // print '$gameconsole existe';
}
# 1 - Verificar se o valor é verdadeiro
if (empty ($gameconsole)) {
    // print "\n Desculpe, essa variavel não tem valor";
}

#Variaveis super global
$_ENV;
$_GET;
$_SERVER;