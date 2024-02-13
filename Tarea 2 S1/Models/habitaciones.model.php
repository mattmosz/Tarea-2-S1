<?php

require_once('conexion.php');

class Clase_Habitaciones{

    public function listar_habitaciones(){

        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM habitaciones";
        $resultado = mysqli_query($con, $cadena);
        return $resultado;

    }

    public function uno($id_habitacion){

        try{
            $con = new Clase_Conectar();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM habitaciones WHERE id_habitacion = '$id_habitacion'";
            $resultado = mysqli_query($con, $cadena);
            return $resultado;
        }catch(Throwable $th){
            return $th->getMessage();

        }finally{
            $con->close();
        }
    }

    public function insertar($id_habitacion, $tipo, $capacidad, $precio){

        try{
            $con = new Clase_Conectar();
            $con = $con->ProcedimientoConectar();
            $cadena = "INSERT INTO habitaciones VALUES('$id_habitacion', '$tipo', '$capacidad', '$precio')";
            $resultado = mysqli_query($con, $cadena);
            return $resultado;
        }catch(Throwable $th){
            return $th->getMessage();

        }finally{
            $con->close();
        }
    }

    public function eliminar($id_habitacion){

        try{
            $con = new Clase_Conectar();
            $con = $con->ProcedimientoConectar();
            $cadena = "DELETE FROM habitaciones WHERE id_habitacion = '$id_habitacion'";
            $resultado = mysqli_query($con, $cadena);
            return $resultado;
        }catch(Throwable $th){
            return $th->getMessage();

        }finally{
            $con->close();
        }
    }

    public function actualizar($id_habitacion, $tipo, $capacidad, $precio){

        try{
            $con = new Clase_Conectar();
            $con = $con->ProcedimientoConectar();
            $cadena = "UPDATE habitaciones SET tipo = '$tipo', capacidad = '$capacidad', precio_noche = '$precio' WHERE id_habitacion = '$id_habitacion'";
            $resultado = mysqli_query($con, $cadena);
            return $resultado;
        }catch(Throwable $th){
            return $th->getMessage();
        }finally{
            $con->close();
        }

    }
}
?>