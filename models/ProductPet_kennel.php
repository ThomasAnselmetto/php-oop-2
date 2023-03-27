<?php
// vado ad includere il file products

  require_once __DIR__ . "/product.php";
  // stabilisco che food sara' un "estensione" di products  

  class PetKennel extends Product{
    public $material;
    public $pillow;
  

  public function __construct(
    String $_name,
    String $_image,
    Int $_price,
    String $_category,
    String $_packaging_material,
    String $_material,
    Bool $_pillow,
    

    )
    {
      parent::__construct($_name,$_image,$_price,$_category,$_packaging_material);
      $this->material = $_material;
      $this->pillow = $_pillow;
    }
  }
  $kennel = new PetKennel("Super-Kennel","http...",34.99,"cani","Cartone","Plastica",true);
    
  var_dump($kennel);
   
  ?>