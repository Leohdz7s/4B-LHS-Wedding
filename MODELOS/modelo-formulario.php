<?php
require_once "conexion.php";
class formulariosModelo
{

    static public function mdlRegistro($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(`nombre`, `email`, `password`) 
        VALUES (:nombre, :email, :password)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt = null;
    }

    static public function mdlLogin($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("SELECT `id` FROM $tabla WHERE email = :email AND password = :password");

        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetch();

        $stmt = null;
    }
}