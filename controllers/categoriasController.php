<?php 
class categoriasController extends AppController{
    public function __contruct(){
        parent::__construct();
    }
    public function index(){
        $categorias = $this->loadModel('categoria');
        $this->_view->categoria = $categorias->getCategorias();
        $this->_view->titulo = "Listado de Categorias";
        $this->_view->renderizar('index');
    }
    public function agregar(){
        if ($_POST) {
            $categorias = $this->loadModel("categoria");
            if($categorias->guardar_categoria($_POST)){
                $this->_messages->success(
                    'Categoria guardada correctamente', 
                    $this->redirect(array("controller"=>"categorias"))
                );
            }
        }
        $categorias=$this->loadModel("categoria");
        $this->_view->categoria=$categorias->guardar_categoria();
        $this->_view->titulo = "Agregar Categorias";
        $this->_view->renderizar('agregar');
    }

    public function editar($id=null){
        if ($_POST) {
            $categorias=$this->loadModel("categoria");
            if ($categorias->actualizar_categoria($_POST)) {
                $this->_messages->success(
                    'Categoria editada correctamente',
                    $this->redirect(array("controller"=>"categorias"))
                );
            }else {
                $this->_messages->success(
                    'Categoria no se edito correctamente',
                    $this->redirect(array(
                        "controller"=>"categorias"))
                );
            }
            $this->redirect(array("controller"=>"categorias"));
        }
        $categorias=$this->loadModel("categoria");
        $this->_view->categoria=$categorias->buscarPorId($id);

        $this->_view->titulo="Editar categoria";
        $this->_view->renderizar("editar");
    }

    public function eliminar($id){
        $categorias = $this->loadModel("categoria");
        $registro = $categorias->buscarPorId($id);

        if (!empty($registro)) {
            $categorias->eliminarPorId($id);
            $this->_messages->success(
                'Categoria eliminada correctamente', 
                $this->redirect(array("controller"=>"categorias")
                )
            );
        }
    }
}
?>