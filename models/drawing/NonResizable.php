<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 11:11 م
 */

namespace models\drawing;


class NonResizable implements ISize
{

    public function canResize()
    {
        return "Shape Can't Resize". "\n";
    }
}