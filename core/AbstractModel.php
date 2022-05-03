<?php 
namespace App\Core;

 abstract class AbstractModel implements  IModel{
      protected string $id;
      
    public   static  function all():array{
       
          $db=self::database();
          $sql="select * from ".self::table();
          return $db->excuteQuery($sql);
    }
    public   static  function find(int $id):array{
          $db=self::database();
          $sql="select * from ".self::table() ." where id=?";
          return $db->excuteQuery($sql,[$id],true);
    }
    public   static  function where(string $sql,array $data,bool $single=false):array{
             return self::database()->excuteQuery($sql,$data,$single);
    }
    public   static  function orderBy(string $field, string $order="asc"):array{
    
        $db=self::database();
        $sql="select * from ".self::table()." order by  $field  $order";
        return $db->excuteQuery($sql);
    }

    public   function remove():int{
          $db=self::database();
           $sql="delete from ".self::table() ." where id=?";
          return $db->excuteUpdate($sql,[$this->getId()]);
    }

    public static function table():string {
       return strtolower(str_replace("App\Models\\","",get_called_class()));
    }
    public static function database(DataBase $db=null):DataBase {
        return $db==null? new DataBase:$db;
     }

 
    

      /**
       * Get the value of id
       */ 
      public function getId()
      {
            return $this->id;
      }

      /**
       * Set the value of id
       *
       * @return  self
       */ 
      public function setId($id)
      {
            $this->id = $id;

            return $this;
      }
}