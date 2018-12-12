<?php

namespace App;

class JanelaAviso extends JanelaAbstrata{
    public function desenhar()
    {
        $this->janela->desenharJanela("Janela de Aviso");
        $this->janela->desenharBotao("OK");
    }
}   
