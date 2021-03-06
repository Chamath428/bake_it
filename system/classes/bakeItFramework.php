<?php

class bakeItFramework
{

   public function view($viewName, $data = []){

      if(file_exists("../application/views/" . $viewName . ".php")){ 
         
         require_once "../application/views/$viewName.php";
 
      } else {
         echo "<div style='margin:0;padding: 10px;background-color:silver;'>$viewName.php file not found </div>";
      }
 
    }

    public function viewWithMessage($viewName, $data = [],$message=[]){

      if(file_exists("../application/views/" . $viewName . ".php")){ 
         
         require_once "../application/views/$viewName.php";
 
      } else {
         echo "<div style='margin:0;padding: 10px;background-color:silver;'>$viewName.php file not found </div>";
      }
 
    }

 
    public function model($modelName){
 
       if(file_exists("../application/models/" . $modelName . ".php")){
 
         require_once "../application/models/$modelName.php";
         return new $modelName;
 
       } else {
         echo "<div style='margin:0;padding: 10px;background-color:silver;'> $modelName.php file not found </div>";
       }
 
    }
 
 
   //session management methods

   //Set session
  public function setSession($sessionName, $sessionValue){


      if(!empty($sessionName) && !empty($sessionValue)){
         $_SESSION[$sessionName] = $sessionValue;
      }

  }

  // Get session
  public function getSession($sessionName){

    if(!empty($sessionName)){
       return $_SESSION[$sessionName];
    }

  }

  // Unset session
  public function unsetSession($sessionName){

     if(!empty($sessionName)){
        
        unset($_SESSION[$sessionName]);

     }

  }

  // Destroy sessions
  public function destroy(){

     session_destroy();

  }

  //redirection method
  public function redirect($path){

   header("location:" . BASEURL . "/".$path);

   }

}

?>