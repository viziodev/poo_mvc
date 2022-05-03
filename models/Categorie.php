<?php 
namespace App\Models;

use App\Core\AbstractModel;

class Categorie extends AbstractModel{
    
    
    private string $libelle;

    public function produits(){

    }

    public  function save():array{
        return [];
    }
    public  function update():array{
        return [];
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