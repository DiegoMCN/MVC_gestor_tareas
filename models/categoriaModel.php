<?php 

class CategoriaModel extends AppModel{
    public function __construct(){
        parent::__construct();
    }
    /**
     * Listar categorias
     *
     * @return lista
     */
    
    private static $nombre = "categorias";
    public function listarTodo(){
        $categoria=$this->_db->query("SELECT * FROM categorias");
        return $categoria->fetchall();
    }
    public function getCategorias(){
        $categorias=$this->_db->query("SELECT * FROM categorias");

        foreach (range(0, $categorias->columnCount()-1) as $column_index) {
            $meta[] = $categorias->getColumnMeta($column_index);
        }

        $resultado = $categorias->fetchAll(PDO::FETCH_NUM);

        for ($i=0; $i < count($resultado); $i++) { 
            $j = 0;
            foreach ($meta as $value) {
                $rows[$i][$value["table"]][$value["name"]]=
                $resultado[$i][$j];
                $j++;
            }
        }

        return $rows;
    }
    public function guardar_categoria($datos=array()){
        $consulta = $this->_db->prepare(
            "INSERT INTO categorias(nombre)VALUES(:nombre)"
        );
        $consulta->bindParam(":nombre", $datos["nombre"]);

        if ($consulta->execute()) {
            return true;
        }else{
            return false;
        }
    }
    public function buscarPorId($id){
        $categorias=$this->_db->prepare(
            "SELECT * FROM tareas WHERE id=:id"
        );
        $categorias->bindParam(":id", $id);
        $categorias->execute();
        $registro=$categorias->fetch();
        if ($registro) {
            return $registro;
        } else {
            return false;
        }
    }

    public function actualizar_categoria($datos=array()){
        $consulta=$this->_db->prepare(
            "UPDATE categorias SET nombre=:nombre WHERE id=:id"
        );
        $consulta->bindParam(":id", $datos["id"]);
        $consulta->bindParam(":nombre", $datos["nombre"]);

        if ($consulta->execute()) {
            return true;
        }else{
            return false;
        }
    }

    public function eliminarPorId($id){
        $consulta = $this->_db->prepare(
            "DELETE FROM categorias WHERE id=:id"
        );
        $consulta->bindParam(":id", $id);
        if ($consulta->execute()) {
            return true;
        } else {
            return false;
        }
    }


}