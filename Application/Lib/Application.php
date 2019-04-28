<?php 
class Application
{
    private $_controller;
    private $_action;
    private $_parm1;
    private $_parm2;
    private $parms  = [];
    private $_url;
    public function  __construct()
    {

        if(isset($_GET["url"]))
        {
            $this->Url_Processing($_GET["url"]);
            $controller = new $this->_controller();
            if(count($this->_url) >= 2)
            {
                $method = $this->_action;
                switch (count($this->parms))
                {
                    case 1:
                        $controller->$method($this->parms[0]);
                        break;
                    case 2:
                        $controller->$method($this->parms[0],$this->parms[1]);
                        break;
                    case 3:
                        $controller->$method($this->parms[0],$this->parms[1],$this->parms[2]);
                        break;
                    default:
                        
                        $controller->$method();   
                        break;
    
                }
    
            }
        }
        
    }
    private function Url_Processing($url)
    {
       $url = trim($url,"/");
       $url =  explode("/",$url);
       $this->_url = $url;
       $this->_controller = $url[0];
       if(count($url)>1)
       {
           $this->_action = $url[1];
       
            if(count($url)>2)
            {

                $this->_parm1 = $url[2];
                if(count($url) > 3)
                {
                $this->_parm2 = $url[3];
                }
                for ($i=2; $i<count($url) ; $i = $i+1) { 
                    # code...
                    $index = 0;
                    $this->parms[$index] = $url[$i];
                }

                
            }
        }

    }
}
?>