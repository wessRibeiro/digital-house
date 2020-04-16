<?php
/**
 * Created by Weslley Ribeiro.
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Date 15/04/2020 21:45
 */

function criarCookie($nome, $valor){
    if($nome != ''){
        setcookie($nome, $valor);
    }else{
        echo 'digite o nome';
    }
}

function lerCookie(){

}

function deletarCookie(){

}

function alterarCookie(){

}

function criarSession($nome, $valor){
    $_SESSION[$nome] = $valor;
}

function lerSession($nome){
    echo "O valor de $nome é: $_SESSION[$nome]";
}

function deletarSession(){

}

function alterarSession(){

}



