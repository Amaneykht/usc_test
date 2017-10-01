<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 11:14 م
 */

namespace models\drawing;


class FullColor implements IColor
{
    public function setColor($params)
    {
        if (isset($params['color']))
            return "Fill With Color: " . $params['color']. "\n";
    }
}