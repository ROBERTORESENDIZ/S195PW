<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTADA</title>
    @vite(['resources/js/app.js'])
    <style>
        .t{
            margin-top: 20px;
        }
        .contPrincipal{
            margin-bottom: 150px;
        }
        .contSecundario{
            margin-left: 4%;
            
        }
    </style>
</head>
<body>

    <div class="container-fluid font-monospace">
        <!-- div para seccionar la pagina con ayuda de rows y cols -->
        <div class="contGeneral row">

            <!-- div de información principales -->
            <div class="contPrincipal text-center col-8 "> 
                <h3 class="t"><b>"UNIVERSIDAD POLITÉCNICA DE QUERÉTARO"</b></h3>
                <h3><b>ING. EN SISTEMAS COMPUTACIONALES</h3></b>
                <h3><b>PROGRAMACIÓN WEB</b></h3>
            </div>

            <!-- div de logotipo -->
            <div class="img col-4">
                <img class="img-fluid" src="{{ asset('img/logo.jpg') }}" alt="Logo UPQ">
            </div>

            <!-- div de información secundaria -->
            <div class="contSecundario col-6">
                <h4> <b>Profesor:</b> Iván Isay Guerra López</h4>
                <h4 class="t"><b>Alumno:</b>Resendiz Munguia Jesus Roberto</h4>
                <h4>S195</h4>
            </div>

            
        </div>
    </div>
</body>
</html>