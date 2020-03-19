<?php
/**
 * Created by Weslley Ribeiro.
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Date 18/03/2020 21:22
 */

//array vazio
$vazio = [];
$vazio2 = array();

//$coisas = [1, 1.1, ['alguma coisa'], 'lira', 'panelaço'];

//chave : valor
$usuario = [
            'nome' => 'lira',
            'idade' => 18,
            'cpf' => 666678906789,
            'comida' => 'pizza',
            'senha_banco' => 34567643234567643
           ];
array_push($usuario, '123456');

echo var_dump($usuario);
