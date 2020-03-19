<?php
/**
 * Created by Weslley Ribeiro.
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Date 18/03/2020 22:08
 */

//operadores aritimeticos +,-,/,%,**, *

$soma = 1 + 1;
$sub = 2 - 1;
$div = 4/2;
$expo = 5**5;
$mult = 5*5;
$modulo = 3%2;

//echo "$soma $sub $div $expo $mult $modulo";


//atribuição: (=,+=, etc... )
$somaAtri = 2;
$somaAtri += 2;

//string: (.=, .)
$nome = "jose";
$nome .= " roberto lira";

//decremento e incremento: (++, --)

$valor = 1;
//$valor = 1 + 1;
$valor++;// aqui vale 2
$valor--;


//logicos: (and, &&, or, !, ||, xor)
if(1 > 3 && 2 > 0){
    echo 'os dois numeros sao maiores que zero!';
    //se o 1º estiver errado, nem vai ver o outro
}

if(1 > 3 and 2 > 0){
    //verifica os dois, mesmo que o primeiro esteja errado
    echo 'os dois numeros sao maiores que zero!';
}

if(1 > 3 xor 2 > 0){
    //verifica os dois, mesmo que o primeiro esteja errado
    echo 'alguem ta falando a verdade, porem, apenas um!';
}

if(1 > 3 || 2 > 0){
    //verifica os dois, mesmo que o primeiro esteja errado
    echo 'alguem é maior que zero!';
}

//idêntica
"1" === 1;
