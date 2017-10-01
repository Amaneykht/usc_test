<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;

/**
 * This class defines that the shapes will be filled using gradient with the specified color and gradient color
 *
 * Class GradientColor
 * @package models\drawing
 */
class GradientColor implements IColor
{

    public function setColor($params)
    {
        if (isset($params['color']) && isset($params['gradient_color']))
            return "Fill With Color: " . $params['color'] . " And Gradient: " . $params['gradient_color'] . "\n";
    }
}