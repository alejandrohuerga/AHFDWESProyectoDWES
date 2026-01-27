<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="/Proyecto webs alumnos/media/logoSauces.png">
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>Alejandro De la Huerga</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;

        }

        header{
            width: 100%;
            height: 15vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: lightblue;
        }

        header h1{
            margin-bottom: 10px;
        }

        main{
            width: 100%;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #asignaturas{
            height: 55vh;
            width: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        ul{
            list-style: none;
        }

        li{
            width: 100%;
            height: 65px;
            text-align: center;
            background: lightblue;
            margin: 7px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 20px;
            
            font-size: 0.9rem;


        }


        footer{
            width: 100%;
            height: 15vh;
            background: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1><a href="../index.html">Alejandro De la Huerga </a></h1>
        <h2>DESARROLLO WEB ENTORNO SERVIDOR</h2>
    </header>
    <main>
        <div id="asignaturas">
            <ul>
                <li>
                    <p>TEMA 1: DESARROLLO WEB ENTORNO SERVIDOR</p>
                    <a href="doc/DocumentacionTema1.pdf" target="_blank">ESTUDIO TEÓRICO DESARROLLO WEB EN ENTORNO SERVIDOR</a>
                    <a href="doc/EstudioTeoricoWordpress.pdf" target="_blank">ESTUDIO TEÓRICO WORDPRESS</a>
                </li>
                <li id="tema2">
                    <p>TEMA 2:  INSTALACIÓN, CONFIGURACIÓN Y DOCUMENTACIÓN DE ENTORNOS</p>
                    <a href="https://github.com/alejandrohuerga/AHFDAWProyectoDAW.git" target="_blank">DOCUMENTACIÓN DEL ENTORNO DE DESARROLLO Y DEL ENTORNO DE EXPLOTACIÓN</a>
                    <a href="https://github.com/alejandrohuerga/AHFDWESEstudioClases.git" target="_blank">ESTUDIO CLASES Y FUNCIONES PHP</a>
                    <p>DOCUMENTACIÓN ENTORNO DE EXPLOTACIÓN WORDPRESS</p>
                </li>
                <li>
                    <a href="../AHFDWESProyectoTema3/indexProyectoTema3.php">Tema 3: CARACTERISTICAS DEL LENGUAJE PHP</a>
                </li>
                <li>
                    <a href="../AHFDWESProyectoTema4/indexProyectoTema4.php">Tema 4: TÉCNICAS DE ACCESO A DATOS EN PHP </a>
                </li>
                <li id="tema5">
                    <p>TEMA 5 : DESARROLLO DE APLICACIONES WEB </p>
                    <a href="../AHFDWESProyectoTema5/indexProyectoTema5.php">EJERCICIOS</a>
                    <a href="../AHFDWESLoginLogoffTema5/indexLoginLogoffTema5.php">LOGIN LOGOFF TEMA 5</a>
                </li>
                <li>
                    <p>TEMA 6: APLICACIONES WEB MULTICAPA</p>
                    <a href="../AHFDWESLoginLogoff/indexLoginLogoff.php">lOGIN LOGOFF</a>
                </li>
                <li>TEMA 7: PROGRAMACIÓN DE SERVICIOS WEB</li>
                <li id="tema5">
                    <p>TEMA 8: DESARROLLO DE APLICACIONES WEB HÍBRIDAS </p>
                    <p><a href="../AHFDWESAplicacionFinal/index.php">APLICACION FINAL</a></p>
                    <p>APLICACIÓN WORDPRESS</p>
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <p><a href="../index.html">&copy; 2024 Alejandro De la Huerga. Todos los derechos reservados.</a></p>
    </footer>
</body>
</html>
