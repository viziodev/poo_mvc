<?php 

use App\Core\Router;
use App\Controllers\SecuriteController;
 
      $router=new Router();
    $router->register('/',function(){
        redirect("login");
    });
     $router->register('/login',[SecuriteController::class,'login']);
    try {
        $router->resolve();
    } catch (\App\Exception\RouteNotFoundException $ex) {
        echo $ex->message;
    }
