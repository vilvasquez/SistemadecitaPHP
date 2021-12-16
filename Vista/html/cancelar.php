<!DOCTYPE html>
<html>

<head>
    <title>Consultar Citas</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1></h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a> </li>
            <li><a href="index.php?accion=asignar">Asignar</a> </li>
            <li><a href="index.php?accion=consultar">Consultar Cita</a> </li>
            <li><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
        </ul>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Consultar Citas</title>
            <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
        </head>

        <body>
            <div id="contenedor">
              
                <div id="contenido">
                    <h2>Cancelar Cita</h2>
                    <p> Recuerda Cancelar Tu Cita con 24 Horas de Anterioridad</p>
                
                    <form action="index.php?accion=consultarCita" method="post" id="frmconsultar">
                        <table>
                            <tr>
                                <td>Documento del Paciente</td>
                                <td><input type="text" name="consultarDocumento" id="consultarDocumento"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="consultarConsultar" value="Consultar" id="consultarConsultar"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div id="paciente2"></div>
                                </td>
                            </tr>
                        </table>
                    </form>

                </div>


            </div>
    </div>
</body>

</html>

</div>
</div>
</body>

</html>