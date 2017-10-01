<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 11:21 م
 */

namespace models\drawing;


class CustomBorder implements IBorder
{
    private $_borderValue;

    public function __construct($borderValue)
    {
        $this->_borderValue = $borderValue;
    }

    public function getBorder()
    {
        echo "Thin Border: " . $this->_borderValue. "\n";
        return $this->_borderValue;
    }
}