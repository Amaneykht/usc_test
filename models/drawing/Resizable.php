<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;

/**
 * This class defines the shapes that can be resized
 *
 * Class Resizable
 * @package models\drawing
 */
class Resizable implements ISize
{

    public function canResize()
    {
        return "Shape Can Resize". "\n";
    }
}