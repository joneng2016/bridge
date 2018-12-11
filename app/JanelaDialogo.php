<?php

namespace App;

class JanelaDialogo extends JanelaAbstrata{
    public function desenhar()
    {
        $this->janela->desenharJanela("Janela de Diálogo");
        $this->janela->desenharBotao("Botao Sim");
        $this->janela->desenharBotao("Botao Nao");
        $this->janela->desenharBotao("Botao Cancelar");
    }
}   
