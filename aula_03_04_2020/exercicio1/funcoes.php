<?php
/**
 * Created by Weslley Ribeiro.
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Date 03/04/2020 20:56
 */


/*
    //se o valor é inteiro OK
    //verificar se o valor está entre 0 e 9 OK
    //apresentar uma mensagem OK
*/

//valor padrao 0
function verificarInteiroOuIntervalo($valor = 0)
{
    $msg = '';

    //verificando se o valor e esta entre 0 e 9
    if($valor >= 0 && $valor <= 9) {
        $msg .= "$valor está dentro da faixa de 0 a 9.";
    }

    //intval Get the integer value of a variable
    if(!is_int(intval($valor))){
        $msg .= "<br> o valor digitado não é inteiro.";
    }else{
        $msg .= "<br> o valor digitado é inteiro.";
    }
    if($msg !== ''){
        return $msg;
    }

    return "Você digitou, $valor, por favor digite um valor inteiro que esteja entre 0 e 9.";
}