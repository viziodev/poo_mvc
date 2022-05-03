<?php 
namespace App\Core;
interface IModel{
   public   static  function all():array;
   public   static  function find(int $id):array;
   public   static  function where(string $sql,array $data,bool $single=false):array;
   public   static  function orderBy(string $field, string $order="asc"):array;
   public static function database(DataBase $db=null):DataBase;
   public static function table():string;

   public  function save():array;
   public  function update():array;
   public   function remove():int;
   
}