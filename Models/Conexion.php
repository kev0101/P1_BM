<?php

class Conexion{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'BancoMercantil');
    }

    public function getCuentas(){
        $query = $this->con->query('SELECT * FROM cuentab'); 

        $retorno = [];

        $i = 0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

    public function getTarjetas(){
        $query = $this->con->query('SELECT * FROM tarjetas'); 

        $retorno = [];

        $i = 0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

    public function getTransacciones(){
        $query = $this->con->query('SELECT * FROM transacciones'); 

        $retorno = [];

        $i = 0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

}

?>

<!--SELECT * FROM cuentab-->