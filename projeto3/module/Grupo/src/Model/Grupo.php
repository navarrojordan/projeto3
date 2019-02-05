<?php

namespace Grupo\Model;

class Grupo{
    public $grucod;
    public $grunom;
    
    public function  exchangeArray(array $data)
    {
        $this->grucod =(!empty($data['grucod'])) ? $data['grucod']:0;
        $this->grunom =(!empty($data['grunom'])) ? $data['grunom']:0;
    }
    
}