<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Blog de videojuegos</title>
</head>
<body>
    <!-- CABECERA -->
    <header id = "cabecera">
        <div id = "logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!-- MENU -->
        <nav id = "menu">
            <ul>
                <li>
                    <a href="index.php">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        Categoria 1
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        Categoria 2                    
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        Categoria 3
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        Categoria 4
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        Sobre mi
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        Contactos
                    </a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <div id = "contenedor">
        <!-- BARRA LATERAL -->
        <aside id="sidebar" >
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email"/>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Entrar"/>
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos"/>

                    <label for="email">Email</label>
                    <input type="email" name="email"/>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Registrar"/>
                </form>
            </div>
        </aside>
        <!-- CAJA PRINCIPAL -->
        <div id="principal">
            <h1>Últimas entradas</h1>
            <article class="entrada">
                <a href="">
                <h2>Título de mi entrada</h2>
                <p>
                    Comentarios

                    Si el tipo de datos de expression es un tipo de datos de alias, 
                    el tipo de valor devuelto es también del tipo de datos de alias. 
                    No obstante, si se asciende el tipo de datos base del tipo de datos de alias, por ejemplo, 
                    de tinyint a int, el valor devuelto adquirirá el tipo de datos ascendido, no el tipo de datos de alias.

                    AVG () calcula la media de un conjunto de valores dividiendo la suma de estos valores por el recuento de valores no NULL. 
                    Si la suma supera el valor máximo para el tipo de datos del valor devuelto, AVG() devolverá un error.

                    AVG es una función determinista cuando se utiliza con las cláusulas OVER y ORDER BY. 
                    Es no determinista si se especifica con las cláusulas OVER y ORDER BY. Para obtener más información, 
                    consulte Deterministic and Nondeterministic Functions.
                    Ejemplos
                    A. Usar las funciones SUM y AVG para los cálculos

                    En este ejemplo se calcula el promedio de horas de vacaciones y 
                    la suma de horas de baja por enfermedad que han utilizado los vicepresidentes de Adventure Works Cycles. 
                    Cada una de estas funciones de agregado produce un valor único de resumen para todas las filas recuperadas. 
                    En el ejemplo se usa la base de datos AdventureWorks2012.
                </p>
                </a>    
            </article>
            <article class="entrada">
            <a href="">
                <h2>Título de mi entrada</h2>
                <p>
                    Comentarios

                    Si el tipo de datos de expression es un tipo de datos de alias, 
                    el tipo de valor devuelto es también del tipo de datos de alias. 
                    No obstante, si se asciende el tipo de datos base del tipo de datos de alias, por ejemplo, 
                    de tinyint a int, el valor devuelto adquirirá el tipo de datos ascendido, no el tipo de datos de alias.

                    AVG () calcula la media de un conjunto de valores dividiendo la suma de estos valores por el recuento de valores no NULL. 
                    Si la suma supera el valor máximo para el tipo de datos del valor devuelto, AVG() devolverá un error.

                    AVG es una función determinista cuando se utiliza con las cláusulas OVER y ORDER BY. 
                    Es no determinista si se especifica con las cláusulas OVER y ORDER BY. Para obtener más información, 
                    consulte Deterministic and Nondeterministic Functions.
                    Ejemplos
                    A. Usar las funciones SUM y AVG para los cálculos

                    En este ejemplo se calcula el promedio de horas de vacaciones y 
                    la suma de horas de baja por enfermedad que han utilizado los vicepresidentes de Adventure Works Cycles. 
                    Cada una de estas funciones de agregado produce un valor único de resumen para todas las filas recuperadas. 
                    En el ejemplo se usa la base de datos AdventureWorks2012.
                </p>
                </a> 
            </article>
            <article class="entrada">
            <a href="">
                <h2>Título de mi entrada</h2>
                <p>
                    Comentarios

                    Si el tipo de datos de expression es un tipo de datos de alias, 
                    el tipo de valor devuelto es también del tipo de datos de alias. 
                    No obstante, si se asciende el tipo de datos base del tipo de datos de alias, por ejemplo, 
                    de tinyint a int, el valor devuelto adquirirá el tipo de datos ascendido, no el tipo de datos de alias.

                    AVG () calcula la media de un conjunto de valores dividiendo la suma de estos valores por el recuento de valores no NULL. 
                    Si la suma supera el valor máximo para el tipo de datos del valor devuelto, AVG() devolverá un error.

                    AVG es una función determinista cuando se utiliza con las cláusulas OVER y ORDER BY. 
                    Es no determinista si se especifica con las cláusulas OVER y ORDER BY. Para obtener más información, 
                    consulte Deterministic and Nondeterministic Functions.
                    Ejemplos
                    A. Usar las funciones SUM y AVG para los cálculos

                    En este ejemplo se calcula el promedio de horas de vacaciones y 
                    la suma de horas de baja por enfermedad que han utilizado los vicepresidentes de Adventure Works Cycles. 
                    Cada una de estas funciones de agregado produce un valor único de resumen para todas las filas recuperadas. 
                    En el ejemplo se usa la base de datos AdventureWorks2012.
                </p>
                </a> 
            </article>
            <article class="entrada">
            <a href="">
                <h2>Título de mi entrada</h2>
                <p>
                    Comentarios

                    Si el tipo de datos de expression es un tipo de datos de alias, 
                    el tipo de valor devuelto es también del tipo de datos de alias. 
                    No obstante, si se asciende el tipo de datos base del tipo de datos de alias, por ejemplo, 
                    de tinyint a int, el valor devuelto adquirirá el tipo de datos ascendido, no el tipo de datos de alias.

                    AVG () calcula la media de un conjunto de valores dividiendo la suma de estos valores por el recuento de valores no NULL. 
                    Si la suma supera el valor máximo para el tipo de datos del valor devuelto, AVG() devolverá un error.

                    AVG es una función determinista cuando se utiliza con las cláusulas OVER y ORDER BY. 
                    Es no determinista si se especifica con las cláusulas OVER y ORDER BY. Para obtener más información, 
                    consulte Deterministic and Nondeterministic Functions.
                    Ejemplos
                    A. Usar las funciones SUM y AVG para los cálculos

                    En este ejemplo se calcula el promedio de horas de vacaciones y 
                    la suma de horas de baja por enfermedad que han utilizado los vicepresidentes de Adventure Works Cycles. 
                    Cada una de estas funciones de agregado produce un valor único de resumen para todas las filas recuperadas. 
                    En el ejemplo se usa la base de datos AdventureWorks2012.
                </p>
                </a> 
            </article>
            <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>
        </div><!-- Fin principal-->
        
        <div class="clearfix"></div>
    </div>
    
    <!-- PIE DE PÁGINA -->
    <footer id="pie">
        <p>
            Desarrollado por Lázaro Belloch &copy 2020
        </p>
    </footer>
</body>
</html>