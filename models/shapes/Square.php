<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 09:21 م
 */

namespace models\shapes;


class Square extends Shape
{
    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function draw()
    {
        $content = parent::draw();
        $content .= "Draw Square!". "\n";
        return $content;
    }
}