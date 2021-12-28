<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Post</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <input type="text" name="nombre">Nombre
        <input type="radio" name="equipo" value="Sporting">Sporting
        <select name="select">
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            
          </select>
        <input type="submit" value="enviar">
    </form>
</body>
</html>