<?php
     class metodos{


        public function mostrarDatos($sql){
            $c = new Conectar();
            $conexion = $c -> conexion();

            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_all($result,MYSQLI_ASSOC);

        }

        public function insertarDatos($datos){
            $c = new Conectar();
            $conexion = $c -> conexion();

            $sql = "INSERT into t_visitas (ip)
                                values ('$datos[0]')";

            return $result = mysqli_query($conexion,$sql);
        }
    }    
?>