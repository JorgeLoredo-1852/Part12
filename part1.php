<?php

class Producto{
  private $id, $nombre, $descripcion, $precio, $existencias, $imagen;

  public function __construct($id, $nombre, $descripcion, $precio, $existencias, $imagen)
  {
    
    if(gettype($id) == "integer"){
      $this->id = $id;
    }
    if(gettype($nombre) == "string"){
      $this->nombre = $nombre;
    }
    if(gettype($descripcion) == "string"){
      $this->descripcion = $descripcion;
    }
    if(gettype($precio) == "double"){
      $this->precio = $precio;
    }
    if(gettype($existencias) == "integer"){
      $this->existencias = $existencias;
    }
    if(gettype($imagen) == "string"){
      if (filter_var($imagen, FILTER_VALIDATE_URL)) {
        $this->imagen = $imagen;
      }
    }
  }

  public function setId($id){
    if(gettype($id) == "integer"){
      $this->id = $id;
    }
  }

  public function setNombre($nombre){
    if(gettype($nombre) == "string"){
      $this->nombre = $nombre;
    }
  }

  public function setDescripcion($descripcion){
    if(gettype($descripcion) == "string"){
      $this->descripcion = $descripcion;
    }
  }

  public function setPrecio($precio){
    if(gettype($precio) == "double"){
      $this->precio = $precio;
    }
  }

  public function setExistencias($existencias){
    if(gettype($existencias) == "integer"){
      $this->existencias = $existencias;
    }
  }

  public function setImagen($imagen){
    if(gettype($imagen) == "string"){
      if (filter_var($imagen, FILTER_VALIDATE_URL)) {
        $this->imagen = $imagen;
      }
    }
  }

  public function getId(){
    return $this->id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getDescripcion(){
    return $this->descripcion;
  }
  public function getPrecio(){
    return $this->precio;
  }
  public function getExistencias(){
    return $this->existencias;
  }
  public function getImagen(){
    return $this->imagen;
  }
}

$producto = new Producto(1, 'iPhone X', 'El mejor smartphone de Apple', 999.99, 10,
'https://example.com/images/iphone-x.jpg');
echo $producto->getNombre(); // iPhone X
echo "\n";
$producto->setPrecio(899.99);
echo $producto->getPrecio(); // 899.99


?>
