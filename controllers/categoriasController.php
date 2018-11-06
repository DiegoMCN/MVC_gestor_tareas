<?php 
class categoriasController extends AppController{
    public function __contruct(){
        parent::__construct();
    }
    public function index(){
        $categorias = this->loadModel('categorias')
    }
}
?>