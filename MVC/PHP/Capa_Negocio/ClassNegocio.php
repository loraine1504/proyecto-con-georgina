--para conectar ambas capas (entidad y datos)
<?php 
    include_once('MVC/PHP/Capa_Entidad/ClassEntidad.php');
    include_once('MVC/PHP/Capa_Datos/ClassDatos.php');
    include_once('MVC/PHP/index.php');

    $entidad = new ClassEntidad($datos);
    $datos = new ClassDatos($entidad);
?>