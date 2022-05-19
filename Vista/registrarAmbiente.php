<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Ambiente</title>
</head>
<body>
    <form action="../Controlador/ControlaAmbiente.php" method="POST">
        <label>IdAmbiente:</label>
        <input type="text" name="idAmbiente" reqired>
        <br>
        <label>Descripcion:</label>
        <input type="text" name="Descripcion" reqired>
        <br>
        <label>Cantidad de Computadores:</label>
        <input type="number" name="NumeroComputadores" id="idAmbiente" required>
        <br>
        
        <button type="submit" name="registrar">Registrar</button>
    </form>
</body>
</html>