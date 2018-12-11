<?php

namespace App;

abstract class JanelaAbstrata{
    protected $janela;
    public function __construct(JanelaImplementada $janela)
    {
        $this->janela = $janela;
    }
    public function desenharJanela($titulo)
    {
        $janela->desenharJanela($titulo);
    }
    public function desenharBotao($titulo)
    {
        $janela->desenharBotao($titulo);
    }
    abstract protected function desenhar();
}   
