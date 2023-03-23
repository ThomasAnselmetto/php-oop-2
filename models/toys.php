<?php
// vado ad includere il file products

  require_once __DIR__ . "/product.php";
  // stabilisco che food sara' un "estensione" di products  

  class Toys extends Product{
    public $animal_size;
    public $ingestible;
  

  public function __construct(
    String $_name,
    String $_image,
    Int $_price,
    String $_category,
    String $_packaging_material,
    String $_animal_size,
    Bool $_ingestible,
    

    )
    {
      parent::__construct($_name,$_image,$_price,$_category,$_packaging_material);
      $this->animal_size = $_animal_size;
      $this->ingestible = $_ingestible;
    }
  }
  $topo_gomma = new Toys("Rubber_mouse","http...",1.50,"gatti","Plastica","Small",false);
    
  var_dump($topo_gomma);
   
  ?>