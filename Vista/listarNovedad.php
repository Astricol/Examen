<?php
require_once('../Controlador/ControlaNovedad.php');
$controlaNovedad = new controlaNovedad();
$listarNovedad = $controlaNovedad->listarNovedad();
//var_dump($listarCategoria);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <title>Mostrar Novedad</title>
</head>
<body>
    <a href="../Vista/registrarNovedad.php">Registrar Novedad</a>
    <br>
    <a href="../Vista/registrarAmbiente.php">Registrar Ambiente</a>
    <table  id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>idAmbiente</th>
                <th>idTipoNovedad</th>
                <th>descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listarNovedad as $novedad){
                    echo "<tr>";
                    echo "<td>".$novedad['idReporte']."</td>";
                    echo "<td>".$novedad['idAmbiente']."</td>";
                    echo "<td>".$novedad['idTipoNovedad']."</td>";
                    echo "<td>".$novedad['descripcion']."</td>";
                    echo "<td>
                    <form method='POST' action='../Controlador/controlaNovedad.php'>
                    <input type='hidden' name='idReporte' value=".$novedad['idReporte']." />
                    <button type='submit' name='editar'>Editar</button>
                    </form>
                    <a href='#' onclick='validarEliminacion($novedad[idReporte])' >Eliminar</a>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
<script>
    function validarEliminacion(idReporte){
        let eliminar = "";
        if(confirm('¿Está seguro de eliminar la Novedad?')){
            document.location.href = "../Controlador/controlaNovedad.php?idReporte="+idReporte+"&eliminar";
        }
    }



</script>
<script src="../assets/js/jquery-3.5.1.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    } );
</script>
</body>
</html>
