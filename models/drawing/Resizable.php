<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 11:11 م
 */

namespace models\drawing;


class Resizable implements ISize
{

    public function canResize()
    {
        echo "Shape Can Resize". "\n";
        return true;
    }
}