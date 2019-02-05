<?php 

namespace hello;

class pessoa 
{
    private $mensagem;
    
    public function  falar($mensagem){
        $this-> mensagem =$mensagem;
    }
    
    public function exibirMensagem(){
        echo  $this-> mensagem;
    }
    
}
