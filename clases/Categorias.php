<?php 
class Categoria{
    private $categoriaId;
    private $categoriaNombre;
    
    public function getCategoriaId() {
        return $this->categoriaId;
    }

    public function getCategoriaNombre() {
        return $this->categoriaNombre;
    }

    public static function traerCategorias(): array{
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT 
                c.category_name,
                c.category_id
            FROM 
                category AS c;";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
        $PDOStatement->execute();

        $lista = $PDOStatement->fetchAll();

        return !empty($lista) ? $lista : null;
    }
}
?>