<?php
    session_start();
    include 'funcoes.php';
    criarSession('idUsuario','123456');
    lerSession('idUsuario');
    //echo var_dump($_SESSION);

