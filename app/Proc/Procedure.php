<?php

namespace App\Proc;

class Procedure 
{
    public static function remise($prix, $remise)
    {
        return ($prix * $remise) / 100;
    }
}