<?php 
namespace App\Exception;
class SessionKeyNotExist extends \Exception{
        public $message ="Cette cle n'existe pas dans la session";
}