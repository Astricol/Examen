<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Novedad</title>
</head>
<body>
    <form action="../Controlador/ControlaNovedad.php" method="POST">
        <label>IdAmbiente:</label>
        <select name="idAmbiente" id="idAmbiente" required>

	        <option>1</option>
	        <option>2</option>

        </select>
        <br>
        <label>IdTipoNovedad:</label>
        <select name="idTipoNovedad" id="idAmbiente" required>

            <option>1</option>
            <option>2</option>

        </select>
        <br>
        <label>Descripcion:</label>
        <textarea name="descripcion" rows="10" cols="50"></textarea>
        <br>
        
        <button type="submit" name="registrar">Registrar</button>
    </form>
</body>
</html>