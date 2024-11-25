<?php 
    class Producto{
        private $productoId;
        private $productoName;
        private $productoDescripcion;
        private $productoImagen;
        private $productoPrecio;
        private $productoStock;
        private $productoCategoriaId;
        private $productoMarcaId;
        private $productoUserId;
        private $productoCreatedAt;

        public function getProductoId() {
            return $this->productoId;
        }
    
        public function getProductoName() {
            return $this->productoName;
        }
    
        public function getProductoDescripcion() {
            return $this->productoDescripcion;
        }
    
        public function getProductoImagen() {
            return $this->productoImagen;
        }
    
        public function getProductoPrecio() {
            return $this->productoPrecio;
        }
    
        public function getProductoStock() {
            return $this->productoStock;
        }
    
        public function getProductoCategoriaId() {
            return $this->productoCategoriaId;
        }
    
        public function getProductoMarcaId() {
            return $this->productoMarcaId;
        }
    
        public function getProductoUserId() {
            return $this->productoUserId;
        }
    
        public function getProductoCreatedAt() {
            return $this->productoCreatedAt;
        }

        public static function traerProductos(): array {
            $conexion = (new Conexion())->getConexion();
            $query = "SELECT 
                    p.product_id,
                    p.name, 
                    p.description, 
                    p.imagen, 
                    p.price, 
                    p.stock, 
                    b.brand_name, 
                    c.category_name, 
                    u.username 
                FROM 
                    product AS p
                JOIN 
                    brand AS b ON p.brand_id = b.brand_id
                JOIN 
                    category AS c ON p.category_id = c.category_id
                JOIN 
                    usuario AS u ON p.user_id = u.user_id";

            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
            $PDOStatement->execute();

            $lista = $PDOStatement->fetchAll();

            return $lista;
        }

        public static function ProductoId(int $id): array{
            $conexion = (new Conexion())->getConexion();
            $query = "SELECT 
                    p.product_id,
                    p.name, 
                    p.description, 
                    p.imagen, 
                    p.price, 
                    p.stock, 
                    b.brand_name, 
                    c.category_name, 
                    u.username 
                FROM 
                    product AS p
                JOIN 
                    brand AS b ON p.brand_id = b.brand_id
                JOIN 
                    category AS c ON p.category_id = c.category_id
                JOIN 
                    usuario AS u ON p.user_id = u.user_id
                WHERE 
                    p.product_id = :id";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
            $PDOStatement->execute(["id" => $id]);

            $lista = $PDOStatement->fetch();

            return !empty($lista) ? $lista : [];
        }

        public static function productoUser(int $userId): array{
            $conexion = (new Conexion())->getConexion();
            $query = "SELECT 
                    p.product_id,
                    p.name, 
                    p.description, 
                    p.imagen, 
                    p.price, 
                    p.stock, 
                    b.brand_name, 
                    c.category_name, 
                    u.username 
                FROM 
                    product AS p
                JOIN 
                    brand AS b ON p.brand_id = b.brand_id
                JOIN 
                    category AS c ON p.category_id = c.category_id
                JOIN 
                    usuario AS u ON p.user_id = u.user_id
                WHERE 
                    u.user_id = :id";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
            $PDOStatement->execute(["id" => $userId]);

            $lista = $PDOStatement->fetchAll();

            return !empty($lista) ? $lista : [];
        }

        public static function productoRandom(): array{
            $conexion = (new Conexion())->getConexion();
            $query = "SELECT 
                    p.product_id,
                    p.name, 
                    p.description, 
                    p.imagen, 
                    p.price, 
                    p.stock, 
                    b.brand_name, 
                    c.category_name, 
                    u.username 
                FROM 
                    product AS p
                JOIN 
                    brand AS b ON p.brand_id = b.brand_id
                JOIN 
                    category AS c ON p.category_id = c.category_id
                JOIN 
                    usuario AS u ON p.user_id = u.user_id
                ORDER BY RAND() LIMIT 1";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
            $PDOStatement->execute();

            $lista = $PDOStatement->fetch();

            return !empty($lista) ? $lista : null;
        }

        public static function cantidadProductos(): int{
            $conexion = (new Conexion())->getConexion();
            $query = "SELECT COUNT(*) AS totalProductos FROM product;";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
            $PDOStatement->execute();

            $lista = $PDOStatement->fetch();
            return $lista["totalProductos"];
        }

        public static function editarProducto(
                $productoId,
                $productoName, 
                $productoDescripcion, 
                $productoImagen, 
                $productoPrecio, 
                $productoStock, 
                $productoCategoriaId, 
                $productoMarcaId
            ) {
            $conexion = (new Conexion())->getConexion();
            $query = "UPDATE 
                product
                SET 
                    name = :name, 
                    description = :descripcion, 
                    imagen = :imagen, 
                    price = :precio, 
                    stock = :stock,
                    category_id = :marca,
                    brand_id = :categoria
                WHERE 
                    product_id = :id;";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->execute([
                "id" => $productoId,
                "name" => $productoName,
                "descripcion" => $productoDescripcion,
                "imagen" => $productoImagen,
                "precio" => $productoPrecio,
                "stock" => $productoStock,
                "categoria" => $productoCategoriaId,
                "marca" => $productoMarcaId
            ]);
            if ($PDOStatement->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public static function agregarProducto(
            $productoName, 
            $productoDescripcion, 
            $productoImagen, 
            $productoPrecio, 
            $productoStock, 
            $productoCategoriaId, 
            $productoMarcaId,
            $productoUserId
        ) {
            // Conexión a la base de datos
            $conexion = (new Conexion())->getConexion();

            // Consulta para insertar un nuevo producto
            $query = "INSERT INTO 
                product (name, description, imagen, price, stock, category_id, brand_id, user_id) 
                VALUES (:name, :descripcion, :imagen, :precio, :stock, :categoria, :marca, :user_id);";

            // Preparar la consulta
            $PDOStatement = $conexion->prepare($query);

            // Ejecutar la consulta con los parámetros
            $PDOStatement->execute([
                "name" => $productoName,
                "descripcion" => $productoDescripcion,
                "imagen" => $productoImagen,
                "precio" => $productoPrecio,
                "stock" => $productoStock,
                "marca" => $productoMarcaId,
                "categoria" => $productoCategoriaId,
                "user_id" => $productoUserId,
            ]);

            // Verificar si se insertó algún registro
            if ($PDOStatement->rowCount() > 0) {
                return true; // El producto se agregó correctamente
            } else {
                return false; // Hubo un error al agregar el producto
            }
        }

        public static function eliminarProducto($id){
            $conexion = (new Conexion())->getConexion();
            $query = "DELETE FROM product WHERE product_id = :id";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->execute([
                    "id"  => $id
                ]);
        }
    }
?>
