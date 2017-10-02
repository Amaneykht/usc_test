<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models;
use models\drawing\IDrawable;

/**
 * This class is responsible of drawing, it takes any drawble object and draw it.
 * Using this structure we can add other implementation other than shapes, we can add Images, Text ..etc
 * we can use the creator for each components
 *
 * Class Drawing
 * @package models
 */
class Drawing
{
    /**
     * @var IDrawable
     */
    private $_drawable;

    public function __construct($drawable)
    {
        $this->_drawable = $drawable;
    }

    public function draw() {

        return $this->_drawable->draw();
    }
}