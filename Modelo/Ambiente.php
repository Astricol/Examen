<?php

class Ambiente{
    //Definir los atributos
    private $idAmbiente;
    private $descripcion;
    private $numeroComputadores;

    //Definir el constructor
    
    public function __construct(){ //Constructor vacio

    }
    
    /*
    public function __construct($idCategoria,$idAmbiente){ //constructor lleno
        $this->idCategoria = $idCategoria;
        $this->idAmbiente = $idAmbiente;
    }
    */

    //Definir los métodos de set y get.
    public function setidAmbiente($idAmbiente){
        $this->idAmbiente = $idAmbiente;
    }
    public function getidAmbiente(){
        return $this->idAmbiente;
    }



    public function setdescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function getdescripcion(){
        return $this->descripcion;
    }



    public function setnumeroComputadores($numeroComputadores){
        $this->numeroComputadores = $numeroComputadores;
    }
    public function getnumeroComputadores(){
        return $this->numeroComputadores;
    }



    







}
?>

