<?php


namespace App\Classes;


class K3
{
    public  $code;

    public function __construct($code)
    {
        $this->code = explode(',', $code);
    }

}
