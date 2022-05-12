<?php

class Conectar{
    protected $bdhost;
    protected function Conexion(){
        try{
            $conectar = $this->bdhost = new PDO('mysql:host=localhost;dbname=soapsvc', 'root', '');
            return $conectar;
        }catch (Exception $e){
            print "¡Error!: ". $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->bdhost->query("SET NAMES 'utf8'");
    }
}


?>