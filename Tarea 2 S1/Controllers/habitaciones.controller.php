<?php

error_reporting(0);
require_once('../Models/habitaciones.model.php');

$habitaciones = new Clase_Habitaciones();

switch ($_GET['op']) {

    case 'listar':
        $datos = array();
        $datos = $habitaciones->listar_habitaciones();
        while($fila = mysqli_fetch_assoc($datos)){
            $data[] = $fila;
        }
        echo json_encode($data);
        break;

    case 'uno':
        $id_habitacion = $_POST['id_habitacion'];
        $datos = array();
        $datos = $habitaciones->uno($id_habitacion);
        $uno = mysqli_fetch_assoc($datos);
        echo json_encode($uno);
        break;
    
    case 'insertar':
        $tipo = $_POST['tipo'];
        $capacidad = $_POST['capacidad'];
        $precio = $_POST['precio'];
        $datos = array();
        $datos = $habitaciones->insertar($tipo, $capacidad, $precio);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $id_habitacion = $_POST['id_habitacion'];
        $tipo = $_POST['tipo'];
        $capacidad = $_POST['capacidad'];
        $precio = $_POST['precio'];
        $datos = array();
        $datos = $habitaciones->actualizar($id_habitacion, $tipo, $capacidad, $precio);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $id_habitacion = $_POST['id_habitacion'];
        $datos = array();
        $datos = $habitaciones->eliminar($id_habitacion);
        $uno = mysqli_fetch_assoc($datos);
        echo json_encode($uno);
        break;
    
}



?>