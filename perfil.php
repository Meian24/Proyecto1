<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BOARD GAME MEETING POINT</title>
    <link rel="stylesheet" href="estilosWeb.css">
    <link rel="icon" href="imagenes/logo.jpg" type="image/jpg" sizes="192x192" />
</head>
<body>

    <div id="header">
        <img class="logo" src="imagenes/logo.jpg" alt="logo BGMP">
        <h1>BOARD GAME MEETING POINT</h1>  
    </div>

    <h1>BIENVENIDO!!!</h1>

    <h2>ESTE ES TU PERFIL</h2>

    <div>
        <h2 id="frm">Registra tus juegos</h2>
    
        <form method="post" action="guarda_juegos.php">
            
            <label>Titulo</label>
            <input type="text" name="titulo" placeholder="Titulo...">

            <label>Propietario</label>
            <input type="text" name="propietario" placeholder="Propietario...">

            <label>Número de jugadores</label>
            <input type="text" name="njugadores" placeholder="Número de jugadores...">

            <label>Duración</label>
            <input type="text" name="tiempo" placeholder="Duración...">

            <label>Edad mínima</label>
            <input type="text" name="edad" placeholder="Edad mínima...">

            <label>Dificultad</label>
            <input type="text" name="dificultad" placeholder="Dificultad...">

            <input type="hidden" name="accion" value="registro">

            <input type="submit" class="boton" value="Registrar">
            
        </form>
    </div> 
   
</body>
</html>
