<?php
require_once('conexion.php');

class CrudAmbiente{

    public function __construct(){

    }

    public function listarAmbiente(){
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Definir el la sentencia sql
        //sql: Struct Query Language: Lenguaje Estructurado de Consulta
        $sql = $baseDatos->query('SELECT * FROM ambiente ORDER BY idAmbiente ASC');
        //Ejecutar la consulta
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return($sql->fetchAll()); //retornar todos los registros de la consulta.
    }

    public function registrarAmbiente($ambiente){
        $mensaje = "";
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Preparar la sentencia sql
        $sql = $baseDatos->prepare('INSERT INTO ambiente(idAmbiente, Descripcion, NumeroComputadores) VALUES (:idAmbiente, :Descripcion, :NumeroComputadores)');
        $sql->bindValue('idAmbiente', $ambiente->getidAmbiente());
        $sql->bindValue('Descripcion', $ambiente->getdescripcion());
        $sql->bindValue('NumeroComputadores', $ambiente->getnumeroComputadores());
        try{
            $sql->execute(); //Ejecutar el sql
            $mensaje =  "Registro Exitoso <br> <a href='../Vista/listarAmbiente.php'>Ver ambientes</a>
            <br>
            <a href='../Vista/listarNovedades.php'>Volver a Novedades</a>";
        }
        catch(Excepcion $e){
            $mensaje = $e->getMessage(); //Obtener el mensaje de error.
        }
        Conexion::desconectar($baseDatos); //Cierra la conexión.
        return $mensaje;
    }
    
    public function buscarAmbiente($ambiente){
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Definir el la sentencia sql
        //sql: Struct Query Language: Lenguaje Estructurado de Consulta
        $sql = $baseDatos->query("SELECT * FROM ambiente 
               WHERE idAmbiente=".$ambiente->getidAmbiente());
        //Ejecutar la consulta
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return $sql->fetch();
        //return($sql->fetch()); //retornar todos los registros de la consulta.
    }

}

//$prueba = new CrudNovedad();
//var_dump($prueba->listarCrud());
?>