<?php
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;

class ErreurController extends AbstractController{
    
    public function __construct()
    {
     
    }
    public function _404(){
        echo 'ccc';
        $this->view("404");
         
    }
}