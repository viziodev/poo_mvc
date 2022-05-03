<?php 
namespace App\Exception;
class RouteNotFoundException extends \Exception{
        public $message ="Cette route n'existe pas";
}