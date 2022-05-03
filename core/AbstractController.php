<?php 
namespace App\Core;
use App\Models\User;
use App\Core\Request;
use App\Core\Session;

abstract class AbstractController{
    protected  string $layout="base";
    protected Session $session;
    protected Request $request;
    protected User $user;
    public function __construct(Request $request,Session $session)
    {
         $this->request= $request;  
         $this->session= $session; 
    }

    public function folderViews():string{
        return strtolower(str_replace("Controller","",str_replace("App\Controllers\\","",get_class($this))));
    }
    public function view(string $pathFile,array $data=[]):void {
        $data['session']=$this->session;
        $data['request']=$this->request;
      
        ob_start();
             extract($data);
            require_once(ROOT_URL."views/".$pathFile.".html.php");
              $content_for_views= ob_get_clean();
            require_once(ROOT_URL."views/layout/".$this->layout.".html.php");
    }
    public function redirect(string $uri):void{
        header("location:".WEB_URL."".$uri);
    }
}