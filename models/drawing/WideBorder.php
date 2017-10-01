<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 11:21 م
 */

namespace models\drawing;


class WideBorder implements IBorder
{

    public function getBorder()
    {
        return "Wide Border: 5". "\n";
    }
}