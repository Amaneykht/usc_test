<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 11:20 م
 */

namespace models\drawing;


class ThinBorder implements IBorder
{

    public function getBorder()
    {
        echo "Thin Border: 1". "\n";
        return 1;
    }
}