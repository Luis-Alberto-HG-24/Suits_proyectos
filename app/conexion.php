<?php

    class Conectar{

        private $servidor = "localhost";
        private $usuario = "root";
        private $bd = "pagina1";
        private $password = "";

        public function conexion(){
            $conexion = mysqli_connect(
                                        $this -> servidor,
                                        $this -> usuario,
                                        $this -> password,
                                        $this -> bd);
            return $conexion;
        }
    }

    $obj = new Conectar();

    if ($obj -> conexion()){
        echo "conectado con exito <p></p>";
    }else{
        echo ":c";
    }
?> 