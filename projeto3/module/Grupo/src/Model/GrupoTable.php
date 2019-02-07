<?php

namespace Grupo\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class Grupotable;
{   
    private $tableGateway;
    
    public function __construct(TableGatewayInterface $tableGateway) {
       $this->tableGateway = tableGateway;
        
    }
    
    public function fetchAll()
    {
   
        return $this-> tableGateway -> select()
    
    }
    
    public function getGrupo($grucod)
    {
        $grucod = (int) $grucod;
        $rowset = $this-> tableGateway-> select(['grucod' =>$grucod]);
        $row = $rowset->current();
        if(! $row) {
            throw new RuntimeException(sprintf
                'Não foi possivel encontrar o Grupo com o codigo %d',
                $grucod));
                    }
                    
            return $row;
    }
            public function saveGrupo(Grupo $grupo)
            {
                
                $data = [
                    'grunom'= $grupo-> grunom,
                ];
                $grucod =(int) $grupo ->grucod;
                
                if($grucod ===0){
                   $this->tableGateway -> insert($data); 
                   return ;
                }
                
                try {
                    $this->getGrupo($grucod);
                } catch (RuntimeException $e) {
                    throw new RuntimeException(sprintf(
                        'Não foi possivel alterar o Grupo  %d; pois não existe',
                        $grucod
                        ));
                }
               
                    
                    $this->tableGateway ->update ($data,['grucod'=> $grucod]);
                   
            }        
}