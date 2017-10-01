<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 01/10/2017
 * Time: 01:01 م
 */

namespace models;


class Drawing
{
    private $_drawable;

    public function __construct($drawable)
    {
        $this->_drawable = $drawable;
    }

    public function draw() {

        return $this->_drawable->draw();
    }
}