
<!DOCTYPE html>
<html>
  <head>
    <title>Ejemplo formulario HTML</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h4>Datos capturados</h4>
    Nombre: 
    <?php echo $_REQUEST["nombre"];?><br/>

    Apellido:
    <?php echo $_REQUEST["apellidos"];?><br/>

    Genero:
    <?php echo $_REQUEST["sexo"];?><br/>

    Email: 
    <?php echo $_REQUEST["email"];?><br/>

    Teléfono: 
    <?php echo $_REQUEST["telefono"];?><br/>

    Conocimiento: 
    <?php echo $_REQUEST["puntaje"];?><br/>

    Mascota: 
    <?php echo $_REQUEST["mascota"];?><br/>

    Asunto: 
    <?php echo $_REQUEST["assunto"];?><br/>

    Cantidad: 
    <?php echo $_REQUEST["cantidad"];?><br/>

    Horas y Días: 
    Días disponibles para información:
    <?php echo $_REQUEST["fecha1"];?><br/>
    Horarios disponibles:
    <?php echo $_REQUEST["fecha2"];?><br/>
    Día de entrega y hora:
    <?php echo $_REQUEST["fecha3"];?><br/>
    Mes y año:
    <?php echo $_REQUEST["fecha4"];?><br/>

    Mensaje: 
    <?php echo $_REQUEST["introducir_mensaje"];?><br/>

<br>
    <a href="index.html">Regresar</a>
  </body>
</html>

