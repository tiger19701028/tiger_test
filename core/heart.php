<?php
namespace core;


class heart 
{
    public static $classMap = array();
    public $data;
    static public function run() 
    {
        $route = new \core\lib\route();
        $className = $route->ctrl;
        $action = $route->action;
        
        $file = APP.'/ctrl/'.$className.'Ctrl.php';
        $class_name = 'app\ctrl\\'.$className.'Ctrl';
        if(is_file($file)) {
            include $file;
            $ctl = new $class_name();
            $ctl->$action();
        } else {
            throw new \Exception('error!!!');
        }
    }
    
    static public function load($class) 
    {
        if(isset($classMap[$class])){
            return ture;
        }else{
            $class = str_replace('\\','/',$class);
            $files = BASE.'/'.$class.'.php';
            
            if(is_file($files )){
                include $files ;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }
    
    public function assign($name,$value)
    {
        $this->data[$name] = $value; 
    }
    
    public function display($file)
    {
        $url = APP.'\views\\'.$file;
        if(is_file($url)) {
            extract($this->data);
            include $url;
        }
        
        
    }
    
    
    
    
    
}