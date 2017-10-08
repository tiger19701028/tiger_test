<?php
namespace app\ctrl;

class indexCtrl extends \core\heart
{
    public function __construct()
    {
        #dump('welcome to yo');
    }
    
    public function index()
    {
        #dump('dodoodododo');
        
        $message = array('xxx'=>'ddddddddddd');
        $a =  \core\lib\conf::get('route');
        \core\lib\log::writelog($message,'qwn');
        
        $data = "welocme to me";
        $this->assign('data',$data);
        $this->display('index.html');
    }
}