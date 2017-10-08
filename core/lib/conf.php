<?php
namespace core\lib;

class conf {
    static public function get($filename)
    {
        $file = CORE.'\config\\'.$filename.'.php';
        if(is_file($file)) {
            $par_arr = include $file;
            return $par_arr;
        } else {
            throw new \Exception('error-----');
        }
    }
}