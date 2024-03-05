<?php

#Inteiro
$num = 30000;
$num1 = 0xCDEF; //Hexadecimal
$num2 = 003;
$num3 = -90;
// print $num3;

#Números de pontos flutuantes
$num4 = 65.7E43;
$num5 = -1800.4;
$num6 = +0.8e-3;
//print $num6;

#Caracteres
$teste = '\x{0xCDEF}';
// print $teste;

#Boleano - Verddiero ou Falso
$first_value = 3;
$second_value = 4;
if ($second_value > $first_value) {
    // print "O segundo valor é maior que o primeiro\n.";
}


#Nulo
$teste_variavel = "";
if(isset($teste_variavel)){
    print "passou";
}else{
    print "Deu error";
}