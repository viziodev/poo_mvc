<?php 
namespace App\Core;
class DataBase{
    private \PDO|null $pdo=null;
    public function __construct()
    {
        
    }
    public function openConnexion():void{
            $this->pdo = new   \PDO('mysql:dbname=bd_php_2022;host=localhost:8889','root','root'); 
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_OBJ);
    }

    public function excuteQuery(string $sql,array $data=[],bool $single=false):array|object|bool{
       $this->openConnexion();
           $query= $this->pdo->prepare($sql);
           $query->execute($data);
          if(!$single){
            $results= $query->fetchAll(); 
          }else{
            $results= $query->fetch();
          }
       $this->closeConnexion();
          return $results;
    }

    public function excuteUpdate(string $sql,array $data):int{
           $this->openConnexion();
             $query= $this->pdo->prepare($sql);
             $query->execute($data);
            if(str_starts_with(strtolower($sql),"insert")){
                $result=$this->pdo->lastInsertId() ;
            }else{
                $result=$query->rowCount() ;
            }
        $this->closeConnexion();
         return $result;
         
    }
    public function closeConnexion():void{
        $this->pdo=null;
    }
}