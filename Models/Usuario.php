<?php
    class Usuario extends Conectar{
        public function insertUsuario($nombre_usu,$apellido_usu,$correo_usu){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "INSERT INTO svc_usuario (nombre_usu,apellido_usu,correo_usu) VALUES (?,?,?)";
            $stmt = $conectar->prepare($sql);
            $stmt->bindValue(1, $nombre_usu);
            $stmt->bindValue(2, $apellido_usu);
            $stmt->bindValue(3, $correo_usu);
            $stmt->execute();
        }
    }


?>