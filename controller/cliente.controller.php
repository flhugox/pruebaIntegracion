<?php
require_once 'model/cliente.php';

class clienteController{
    
    private $model;
    
    public function __construct(){
        $this->model = new cliente();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';
       
    }
    
    public function Crud(){
        $cliente = new cliente();
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';
        
    }
    
  
}