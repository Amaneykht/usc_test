<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
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