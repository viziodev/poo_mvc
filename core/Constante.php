<?php 

    define("WEB_URL","http://localhost:8001/");
    define("ROOT_URL",str_replace("public","",$_SERVER["DOCUMENT_ROOT"]));

    function redirect(string $uri):void{
        header("location:".WEB_URL."".$uri);
    }
     function view(string $fileName):void {
        require_once(ROOT_URL."views/".$fileName.".html.php");
     }
      function dd($var):void{
          echo "<pre>";
            var_dump($var);
          echo "</pre>";
          die();
     }
