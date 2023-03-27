<?php
require_once __DIR__ . "./Category.php";
// creo le classi
class Product {
  // variabili d'istanza
  public $name;
  public $image;
  protected $price;
  public $category;
  public $packaging_material;

  public function __construct(
    String $_name,
    String $_image,
    Float $_price,
    String $_category,
    String $_packaging_material,
  )
  {
    $this->name = $_name;
    $this->image = $_image;
    $this->price = $_price;
    $this->category = $_category;
    $this->packaging_material = $_packaging_material;

  }
    public function setName($name){
if(!is_string($name) || $name === "")return false;
$this->name = $name;
return $this;
}
public function getName(){
  return $this->name;
}
  
  } 



















?>