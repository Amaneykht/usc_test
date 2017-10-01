<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;

/**
 * This class defines that the whole shapes will be filled with the specified color
 *
 * Class FullColor
 * @package models\drawing
 */
class FullColor implements IColor
{
    public function setColor($params)
    {
        if (isset($params['color']))
            return "Fill With Color: " . $params['color']. "\n";
    }
}