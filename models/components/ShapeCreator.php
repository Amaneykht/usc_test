<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 01/10/2017
 * Time: 12:55 م
 */

namespace models\components;


use models\shapes\Circle;
use models\shapes\Square;

class ShapeCreator
{
    public function create($params) {

        $shape = null;
        $shape_params = isset($params['params']) ? $params['params'] : null;

        if(isset($params['type'])) {
            switch($params['type']) {
                case 'circle' :
                    $shape = new Circle($shape_params);
                    break;

                case 'square' :
                    $shape = new Square($shape_params);
                    break;
            }
        }

        return $shape;
    }
}