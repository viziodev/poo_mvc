<?php 
namespace App\Core;
class Request{

    public function getUri(){
        $url =explode("/",$_SERVER['REQUEST_URI']);
        unset($url[0]);
        return  array_values($url); 
    }

    public function isPost():bool{
       return $_SERVER['REQUEST_METHOD']=="POST";
    }

    public function isGet():bool{
        return $_SERVER['REQUEST_METHOD']=="GET";
    }

    public function query():array{
        if($this->isGet()){
            $uri=$this->getUri();
            unset($uri[0]);
            return array_values( $uri);
        }
    }

    public function request(){
       return $this->isPost() ? $_POST:null;
    }
   
}