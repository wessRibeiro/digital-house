<?php
/**
 * Created by Weslley Ribeiro.
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Date 27/03/2020 21:09
 */

include ('FuncoesSemClasse.php');
escreverNaTela4();

include('FuncoesComClasse.php');

$objFuncao = new FuncoesComClasse();

$objFuncao->escreverNaTela1();

echo ('<br> onde estou: '.__FILE__);