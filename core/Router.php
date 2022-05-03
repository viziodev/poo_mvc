<?php
namespace App\Core;

use App\Core\Session;
use App\Exception\RouteNotFoundException;

class Router{
    private Request $request;
    private Session $session;
    public function __construct()
    {
        $this->request=new Request;
        $this->session=new Session;
    }
   /*  public  function  resolve(){
       $uri= $this->request->getUri();
       
      
           if(empty($uri[0])){
                //Racine => Page de connexion
                redirect("securite/login");
           }else{
                
             $controllerName="App\\Controllers\\".ucfirst($uri[0])."Controller";
               if(class_exists($controllerName)){
                  
                   if(isset($uri[1])  ){
                       $ctrl=new $controllerName($this->request);
                       if(method_exists($ctrl,$uri[1])){
                           $ctrl->{$uri[1]}();
                       }else{
                           //L'action  n'existe pas dans le controller
                           redirect("erreur/_404");
                       } 
                   }else{
                         //L'action du controller n'est pas defini
                         redirect("erreur/_404");
                              
                   }
               }else{
                   //Le nom du controller n'existe pas
                            redirect("erreur/_404");
               }
           } 
       
    }*/
    private  $routes=[];
    public  function resolve(){
      
        $uri=$this->request->getUri();
        $action="/".$uri[0];
        if(isset($this->routes[$action])){
           $route= $this->routes[$action];
            if(is_callable( $route)){
                $route();
            }
            if(is_array($route)){
                
                [$ctrClass,$action]=$route;
                if(class_exists($ctrClass) && method_exists($ctrClass,$action)){
                    $ctrl=new  $ctrClass($this->request,$this->session) ;
                    call_user_func_array([$ctrl,$action],[$this->request,$this->session]);
                    
            }else{
                    throw new RouteNotFoundException();
                }
        }          
        }else{
            throw new RouteNotFoundException();
        } 
     
    }
 
    public  function register(string $path,callable|array $action){  
        
            $this->routes[$path]=$action;
          
    }

}