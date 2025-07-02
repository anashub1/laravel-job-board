<?php

namespace App\Models;

class Job 
{
    public static function all(){
        return [
            ['title' => 'Software Enginner','salary' => '1000$'],
            ['title' => 'Graphic Deisgner','salary' => '2000$']
        ];
        
    }
}
