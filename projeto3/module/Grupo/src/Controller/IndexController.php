<?php

namespace Grupo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function principalAction()
    {
        return new ViewModel();
    }
    
    public function postAction()
    {
        return new ViewModel();
    }
    
  
    
    public function comentarioAction()
    {
        return new ViewModel();
    }
    
}
