<?php
namespace App\Controllers;

use App\Core\Request;
use App\Core\Session;
use App\Core\AbstractController;

class SecuriteController extends AbstractController{
    
    
    public function login(){
          
         //  $this->layout="connexion";
           $this->view("securite/liste.cours",["data"=>3]);
    }
    public function test(){
        echo "test";
    }
}