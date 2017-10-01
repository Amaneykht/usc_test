<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 11:13 م
 */

namespace models\drawing;


class GradientColor implements IColor
{

    public function setColor($params)
    {
        if (isset($params['color']) && isset($params['gradient_color']))
            return "Fill With Color: " . $params['color'] . " And Gradient: " . $params['gradient_color'] . "\n";
    }
}