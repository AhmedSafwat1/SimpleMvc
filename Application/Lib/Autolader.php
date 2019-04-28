<?php
class Autolader
{
    public static function autoloadContoller($controllerName)
    {
            if (file_exists(CONTOLLER_PATH.$controllerName.".php"))
            {
                  require_once CONTOLLER_PATH.$controllerName.".php";
            }
          
    }
    public static function autoloadModels($ModelName)
    {
            if(file_exists(MODELS_PATH.$ModelName.".php"))
            {
                require_once MODELS_PATH.$ModelName.".php";
            }
            
    }
    public static function autoloadlib($libName)
    {
        if(file_exists(LIB_PATH.$libName.".php"))
        {
            
            require_once LIB_PATH.$libName.".php";
        }

    }
    
}
?>