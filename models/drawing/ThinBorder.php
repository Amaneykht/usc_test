<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;

/**
 * This class defines one of the built-in border value: Thin
 *
 * Class ThinBorder
 * @package models\drawing
 */
class ThinBorder implements IBorder
{

    public function getBorder()
    {
        return "Thin Border: 1". "\n";
    }
}