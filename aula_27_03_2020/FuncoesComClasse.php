<?php
/**
 * Created by Weslley Ribeiro.
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Date 27/03/2020 19:41
 */

/*
 * public
 * private
 * protected
*/

//uma classe que tem alguma coisa"$coteudo" é uma classe que faz alguma coisa escreverNaTela1
class FuncoesComClasse {

    //variavel de escopo global/propriedade da classe
    public $conteudo = '<br> hello world!';
    //C:\wamp64\www\digital-house\aula_27_03_2020\funcoes.php\class Funcoes\$conteudo

    public function escreverNaTela1()
    {
        echo ('onde estou 1: '.__FILE__);
        //local
        //C:\wamp64\www\digital-house\aula_27_03_2020\funcoes.php\class Funcoes\fuction escreverNaTela\$conteudo
        $conteudo = '<br> hello world outro valor!';

        //$this = eu mesmo/ aqui / este
        echo $conteudo;
    }


    public function escreverNaTela2(){
        echo $this->conteudo;
    }

}

//include a partir deste momento o que estiver no outro arquivo via estar neste tbm
/*
include('funcoes.php');
include('funcoes.php');
include('funcoes.php');
include('funcoes.php');
*/
/*
include_once('funcoes.php');
*/

/*
require inclua este arquivo, e ele é importante, se não achar pare o php/ obrigatorio
include tenta incluir este arquivo pra mim, mas, se não consguir, tudo bem

require_​once
include_​once
*/
/*
//isso funciona, vou requisitar 2 vezes
require('funcoes.php');
require('funcoes.php');

//once = apenas uma vez/ so preciso dele uma vez, se vc requisitar novamente, está errado
require_​once('funcoes.php');
require_​once('funcoes.php');
*/