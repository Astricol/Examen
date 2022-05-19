<?php
require_once('../Modelo/Ambiente.php');
require_once('../Modelo/CrudAmbiente.php');

class controlaAmbiente{
    
    public function __construct(){

    }

    public function listarAmbiente(){
        //Crear un objeto de la clase Ambiente
        $crudAmbiente = new CrudAmbiente();
        return $crudAmbiente->listarAmbiente();
    }

    public function registrarAmbiente( $descripcion, $numeroComputadores){
        //Crear un objeto de la clase Ambiente
        $crudAmbiente = new crudAmbiente();
        $ambiente = new Ambiente();
        $ambiente->setnumeroComputadores($numeroComputadores);
        $ambiente->setdescripcion($descripcion);
        $mensaje = $crudAmbiente->registrarAmbiente($ambiente);
        echo $mensaje;
        
    }

    public function buscarAmbiente($idAmbiente){
        //Crear un objeto de la clase Reporte
        $crudAmbiente = new CrudAmbiente();
        $ambiente = new Ambiente();
        $ambiente->setidAmbiente($idAmbiente);
        //Buscar los datos de la categoria en la BD
        //var_dump($Categoria);
        $datosAmbiente = $crudAmbiente->buscarAmbiente($ambiente);
        $ambiente->setdescripcion($datosAmbiente['descripcion']);
        $ambiente->setnumeroComputadores($datosAmbiente['numeroComputadores']);
        //var_dump($Categoria);
        return $ambiente;
    }

    

    public function desplegarVista($pagina){
        header("Location:../Vista/".$pagina);
    }
}

$controlaAmbiente = new controlaAmbiente();
if (isset($_POST['registrar'])){ //Si la variable existe 
    //Recibir variables del formulario
    $idAmbiente = $_POST['idAmbiente'];
    $descripcion = $_POST['Descripcion'];
    $numeroComputadores = $_POST['NumeroComputadores'];
    
    $controlaAmbiente->registrarAmbiente( $descripcion, $numeroComputadores);
}

elseif(isset($_REQUEST['vista'])){
    $controlaAmbiente->desplegarVista($_REQUEST['vista']);
}

?>