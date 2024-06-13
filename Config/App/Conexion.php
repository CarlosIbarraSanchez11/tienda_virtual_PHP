<?php

class Conexion {
    private $conect;
    
    public function __construct() {
        $pdo = "mysql:host=" . HOST . ";dbname=" . DB . ";" . CHARSET;
        try {
            $this->conect = new PDO($pdo, USER, PASS);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Confirmación de conexión exitosa (opcional)
            echo "Conexión exitosa";
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
    }

    public function conect() {
        return $this->conect;
    }
}
?>