<?php

namespace App\Helper;

class RouteHelper
{
    public function redirect($url){
        echo "<script>window.location=window.location.origin+'" . $url .  "';</script>";
        return $this;
    }

    public function with($session, $message){
        echo "<script>sessionStorage.setItem('" . $session . "', '" . $message . "');</script>";
        return $this;
    }
}