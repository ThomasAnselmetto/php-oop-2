<?php
// vado ad includere il file products

  require_once __DIR__ . "/product.php";
  // stabilisco che food sara' un "estensione" di products  

  class Food extends Product{
    public $tipology;
    public $weight_in_kg;
  

  public function __construct(
    String $_name,
    String $_image,
    Int $_price,
    String $_category,
    String $_packaging_material,
    String $_tipology,
    Int $_weight_in_kg,

    )
    {
      parent::__construct($_name,$_image,$_price,$_category,$_packaging_material);
     $this->tipology = $_tipology;
     $this->weight_in_kg = $_weight_in_kg;
    }
  }
  $pappa_x = new Food("strepitous","http...",2.40,"gatti","bustina di plastica","umido",0.07);
    
  var_dump($pappa_x);
   
  ?>