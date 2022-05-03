<?php 
namespace App\Models;

use App\Core\AbstractModel;

class Produit extends AbstractModel {
  
    private string $reference;
    private string $libelle;

    public function categorie(){

    }


    public  function save():array{
        return [];
    }
    public  function update():array{
        return [];
     }
     

    /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    
}