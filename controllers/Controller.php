<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 01/10/2017
 * Time: 09:20 م
 */

namespace controllers;


class Controller
{
    public function render($_file_, $_params_ = [])
    {
        ob_start();
        ob_implicit_flush(false);
        extract($_params_, EXTR_OVERWRITE);
        require("views\\" . $_file_ . ".php");
    }
}