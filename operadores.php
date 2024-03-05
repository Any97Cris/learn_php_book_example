<?php
#binario
#operadores de atribuição
$counter += 1; //soma o valor da variavel mais 1 
$counte -= 1; //subtrai o valor da variavel mais 1 

#Valores suportados: =, -=, /=, *=, +=, .=, |=, >>=, <<=, &=, ^=, and &=

#Operador de atribuição númerico
# +, -, *, /, %

#Operador de concatenação
$numero_favorito = 23;
// print "Meu número favorito é " . $numero_favorito;

#Operador de comparação
# == comparar se os valores sãp iguais
#!= verifica se os valores são diferentes
#> maior que
#< menor que
#>= maior ou igual
#<= menor ou igual

#operadores Lógicos
#&& AND/E
#|| OR/OU
#xor retorna se somente 1 for verdadeiro

#unario
#operadores de negação
#! - Negação/false
#~ - retorna o valor inverso, exemplo se for 0 será 1

#Incrementar e decrementar
$exemplo++;
$exemplo1--;
++$exemplo2;
--$exemplo3;

#Dá o tipo para cada variavel
#(array)
$array = (array) [];

#(int)
$numero = (int) 10;

#(string)
$frase = (string) "hello";

#(object)
$objeto = (object)array(
    'one' => 'amarelo'
);

#(real)/(float)/(double)
$valor_real = (float) 3.4;

#(bool)/(boolean)
$gru = (bool)true;
$gru1 = (boolean)false;


#ternário
$num = 10;
$exemplo_classico = $num > 20 ? "Maior" : "Menor";
print $exemplo_classico;