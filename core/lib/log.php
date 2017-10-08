<?php
namespace core\lib;

class log 
{
    static public function writelog($message,$file)
    {
        $mes = \core\lib\conf::get('log');
        if($mes['DEST']=='file') {
            $dirs = 'log\\'.date('YmdH');
            if(!is_dir($dirs)) {
                mkdir($dirs,'0777',true);
            }
            return file_put_contents($dirs.'\\'.$file.'.log',date('Y-m-d H:s:i').json_encode($message).PHP_EOL,FILE_APPEND);
        }
    }
}