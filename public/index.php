<?php

require_once "../vendor/autoload.php";
 
use App\JanelaDialogo;
use App\JanelaWindows;

$janela = new JanelaDialogo(new JanelaWindows());
$janela->desenhar();
