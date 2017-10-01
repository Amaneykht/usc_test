<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;

/**
 * This class defines one of the built-in border value: Wide
 *
 * Class WideBorder
 * @package models\drawing
 */
class WideBorder implements IBorder
{

    public function getBorder()
    {
        return "Wide Border: 5". "\n";
    }
}