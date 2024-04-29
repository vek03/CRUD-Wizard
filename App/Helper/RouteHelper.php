<?php

namespace App\Helper;

class RouteHelper
{
    public function redirect($url){
        header("Location: " . $url);
        exit();
    }
}