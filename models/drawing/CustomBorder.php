<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;

/**
 * Normally we have built-in options for border, This class defines the non built in borders
 * So we need to define the border value
 *
 * Class CustomBorder
 * @package models\drawing
 */
class CustomBorder implements IBorder
{
    private $_borderValue;

    public function __construct($borderValue)
    {
        $this->_borderValue = $borderValue;
    }

    public function getBorder()
    {
        return "Thin Border: " . $this->_borderValue. "\n";
    }
}