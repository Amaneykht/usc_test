<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;

/**
 * This class defines the shapes that can't be resized
 *
 * Class NonResizable
 * @package models\drawing
 */
class NonResizable implements ISize
{

    public function canResize()
    {
        return "Shape Can't Resize". "\n";
    }
}