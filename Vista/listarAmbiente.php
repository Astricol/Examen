<?php
require_once('../Controlador/ControlaAmbiente.php');
$controlaAmbiente = new controlaAmbiente();
$listarAmbiente = $controlaAmbiente->listarAmbiente();
//var_dump($listarCategoria);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <title>Mostrar Ambiente</title>
</head>

<body>
    <a href="../Vista/listarNovedad.php">Volver a Novedades</a>
    <table  id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>idAmbiente</th>
                <th>Descripcion</th>
                <th>Cantidad Computadores</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listarAmbiente as $ambiente){
                    echo "<tr>";
                    echo "<td>".$ambiente['idAmbiente']."</td>";
                    echo "<td>".$ambiente['Descripcion']."</td>";
                    echo "<td>".$ambiente['NumeroComputadores']."</td>";
                    echo "<td>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

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
