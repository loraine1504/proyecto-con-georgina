--aqui esta lo que va a ver el usuario final.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Proyecto</title>
</head>
<body>
    <!--Importar lo que necesito de ambos archivos para funcionar. Utilizar todo lo que sea necesario para estructurar de manera correcta la pagina.
        Implementar lo de laravel.
        Validar siempre que pueda, todo lo que pueda.
        funciones. POO.
        Modelo vista controlador. MVC.-->
        
    <!--Contenedor de todos los elementos-->
    <div class="ctr-general">
        <!--Formulario-->
        <div class="form-ctr">
            <h1>Formulario</h1>
            <form action="index.php" method="post">
                <label for=""> Nombre
                    <br>
                    <input type="text" name="nombre" required >
                </label>
                <br> <br>
                <label for=""> Precio
                    <br>
                    <input type="number" name="precio" min="0" max="100000" required>
                </label>
                <br> <br>
                <label for=""> Cantidad
                    <br>
                    <input type="number" name="cantidad" min="0" max="10" required>
                </label>
                <br> <br>
                <button>Enviar</button>
            </form>
        </div>

        <!--Buscador-->
        <div class="search-ctr">
            <label for=""> Buscar
                <input type="search" name="buscador" id="">
            </label>
        </div>

        <!--Tabla-->
        <div class="table-ctr">
            <h1>Tabla de productos</h1>
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>ITBIS</th>
                    <th>Total_Todo</th>
                </tr>

                <?php
        session_start();
        require('MVC/PHP/Capa_Entidad/ClassEntidad.php');

                    if (isset($_SESSION['productos'])) {
                        foreach ($_SESSION['productos'] as $productos) {
                            echo '<tr>';
                            echo '<td>'. $productos['nombre'] .'</td>';
                            echo '<td>'. $productos['precio'] .'</td>   ';
                            echo '<td>'. $productos['cantidad'] .'
                            </td>';  
                            echo '<td>'. $productos['total'] .'</td>';
                            echo '<td>'. $productos['itbis'] .'</td>'; 
                            echo '<td>'. $productos['total_todo'] .'</td>'; 
                            echo '</tr>'; 
                    } 
                    } else 
                        {
                            print_r('Error.');
                        }
                ?>
                
            </table>
            <button>Importar PDF</button>
        </div>
</div>
</body>
</html>