<?php
//Incluir el controlador a emplear
require_once('../Controlador/ControlaNovedad.php');
//Recibir valor del id a busca
$idReporte = base64_decode($_REQUEST['idReporte']);
$idReporte = base64_decode($idReporte);
//base64_decode: Desencripta
//Buscar la novedad en la bd y guardarlo en un objeto
$novedad = $controlaNovedad->buscarNovedad($idReporte);
//var_dump($novedad);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Novedad</title>
</head>
<body>
    <h1 align='center'>Editar Novedad</h1>
    <form action="../Controlador/ControlaNovedad.php" method="POST">
        <label>Id:</label>
        <input type="text" name="idReporte" id="idReporte" value="<?php echo $novedad->getidReporte() ?>" readonly/>
        <br/>
        <label>IdAmbiente:</label>
        <select name="idAmbiente" id="idAmbiente" value="<?php echo $novedad->getidAmbiente() ?>"required>

	        <option>1</option>
	        <option>2</option>

        </select>
        <br>
        <label>IdTipoNovedad:</label>
        <select name="idTipoNovedad" id="idAmbiente" value="<?php echo $novedad->getidTipoNovedad() ?>"required>

            <option>1</option>
            <option>2</option>

        </select>
        <br>
        <label>Descripcion:</label>
        <br>
        <textarea name="descripcion" rows="10" cols="50" value="<?php echo $novedad->getdescripcion() ?>"></textarea>
        <br>

        <button type="submit" name="actualizar">Actualizar</button>
    </form>
</body>
</html>