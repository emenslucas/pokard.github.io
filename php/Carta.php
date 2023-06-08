<?php
class Carta {
    public $imagen;
    public $precio;
    
    public function __construct($imagen, $precio) {
        $this->imagen = $imagen;
        $this->precio = $precio;
    }
}
?>