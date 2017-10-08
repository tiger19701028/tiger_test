<?php
namespace core\lib;

class route {
    
    public $path;
    public $ctrl;
    public $action;
    public function __construct()
    {
        $urlstr = $_SERVER['REQUEST_URI'];
        if(isset($urlstr) && $urlstr!='/') {
            $arr = $this->path = explode('/',trim($urlstr,'/'));
            $this->ctrl = $arr[1];
            $this->action = $arr[2];
        }
        
    }
    
}