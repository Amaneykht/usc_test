<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models;

/**
 * Class Drawing
 * @package models
 */
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