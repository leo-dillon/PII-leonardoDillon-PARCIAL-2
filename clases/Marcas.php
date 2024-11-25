<?php 
class Marcas {
    private $marcasId;
    private $marcasNombre;
    
    public function getMarcasId() {
        return $this->marcasId;
    }

    public function getMarcasNombre() {
        return $this->marcasNombre;
    }

    public static function traerMarcas(): array{
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT 
                b.brand_name,
                b.brand_id
            FROM 
                brand AS b;";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
        $PDOStatement->execute();

        $lista = $PDOStatement->fetchAll();

        return !empty($lista) ? $lista : null;
    }
}
?>