--para crear las variables que luego se van a majenar dentro de la capa daros.

<?php
  class ClassEntidad {
    
    public $nombre;
    public $precio;
    public $cantidad;
    public $total;

    function __construct($Datos)
    {
        //Declaracion de las variables.
        $this->nombre = $_POST['nombre'] ?? 'Desconocido';
        $this->precio = $_POST['precio'] ?? 0;
        $this->cantidad = $_POST['cantidad'] ?? 0 ;        
        $this->total = $this->precio * $this->cantidad ?? 0;
    }
  }
?>