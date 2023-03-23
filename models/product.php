<?php

// creo le classi
class Product {
  // variabili d'istanza
  public $name;
  public $image;
  public $price;
  public $category;
  public $packaging_material;

  public function __construct(
    String $_name,
    String $_image,
    Int $_price,
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
  
  } 



















?>