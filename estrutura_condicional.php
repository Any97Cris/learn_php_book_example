<?php
$amostra = 50;

#Caso a estrutura de condição não for verdadeira não retorna 
#o valor do bloco condicional
if($amostra >= 100){
    print "$amostra é maior ou igual a 100";
}

#Por outro lado, se a senteça não for verdadeira pode usar o bloco
#else para retornar um valor.

if($amostra >= 100){
    print "$amostra é maior ou igual a 100\n";
}else{
    print "$amostra não é maior ou igual a 100\n";
}
echo "<br>";
#Outra forma de avaliar uma condição até que corresponda ao que
#esta sendo solicitado, é o elseif()

if($amostra > 100){
    print "$amostra é maior ou igual a 100\n";
}elseif($amostra == 100){
    print "$amostra é igual a 100\n";
}else{
    print "$amostra não é maior ou igual a 100\n";
}

#===================================================================

#Switch
$solucao = "U";

switch($solucao){
    case 'X':
    case 'x':
        print "A solução esta correta\n";
        break;
    
    case 'U':
    case 'u':
        print "A solução esta incorreta\n";
        break;
    
    default:
        print "Error: O sistema não reconhece as soluções\n";
        break;
}