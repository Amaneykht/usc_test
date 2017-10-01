<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace controllers;


class Controller
{
    /**
     * This method should view the content of the file name specified in $file variable
     * @param $file string name of the file to be displayed
     * @param array $params
     */
    public function render($file, $params = [])
    {
        ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require("views\\" . $file . ".php");
    }
}