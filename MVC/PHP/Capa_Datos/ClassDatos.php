--manejar las entidades y los procesos.

<?php 
session_start();

class ClassDatos {

    function __construct(ClassEntidad $entidad) 
    { 

        $precio = $entidad -> precio;
        $total = $entidad -> total;
        $nombre = $entidad -> nombre;
        $cantidad = $entidad -> cantidad;

        if ($precio >= 2000) {
            $itbis = $total * 0.10; 
            $total_todo = $total + $itbis;
        } else {
            $itbis = 'No aplica';
            $total_todo = $total;
        }        
    
        $_SESSION['productos'][] = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad,
            'total' => $total,  
            'itbis' => $itbis,
            'total_todo' => $total_todo
        ];
    }
};

?>  
