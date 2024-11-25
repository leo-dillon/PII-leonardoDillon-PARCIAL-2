<?php 
class Usuarios{
    private $userName;
    private $password;
    private $email;
    private $user_id;

    public function getUserName(): string {
        return $this->userName;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getUserId(): int {
        return $this->user_id;
    }

    public static function traerUsuario($email, $password){
        $conexion = Conexion::getConexion();
        $datosUsuario = [];
        $query = "SELECT username, password, email, user_id FROM usuario WHERE email = :email";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->bindParam(':email', $email);
        $PDOStatement->execute();

        $result = $PDOStatement->fetch(PDO::FETCH_ASSOC);
        
        if ($result && ($password == $result['password'])) {
            Funciones::mostrar("AAAAAAAAAAAAAAA");
            $datosUsuario["username"] = $result["username"];
            $datosUsuario["user_id"] = $result["user_id"];
            return $datosUsuario;
        }

        return null;
    }
}

?>