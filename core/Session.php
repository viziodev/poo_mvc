<?php 
namespace App\Core;
use App\Models\User;
   class Session{
     private User $user;

     public function __construct()
     {
         if(session_status()==PHP_SESSION_NONE){
             session_start();
         }
     }

     public  function set(string $key,$value){
           $_SESSION[$key]=$value;
           
     }
     public  function get(string $key){
         if(isset($_SESSION[$key])){
            return $_SESSION[$key];
         }
         return null;
           
     }

     /**
      * Get the value of user
      */ 
     public function getUser()
     {
          return $this->user;
     }

     /**
      * Set the value of user
      *
      * @return  self
      */ 
     public function setUser($user)
     {
          $this->user = $user;

          return $this;
     }
   }