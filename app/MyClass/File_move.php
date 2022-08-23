<?php
namespace App\MyClass;

class File_move{
    public static function move($file,$destinationPath)
    {
        return $file->move($destinationPath,$file->getClientOriginalName());
    }
}
