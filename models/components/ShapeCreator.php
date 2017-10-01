<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\components;


use models\shapes\Circle;
use models\shapes\Square;

/**
 *
 * This is the class that is responsible of creating the shapes based on the specified type
 *
 * Class ShapeCreator
 * @package models\components
 */
class ShapeCreator
{
    /**
     * This method takes the information about the shape as a parameter
     * and create the required shape based on this information
     *
     * @param $params
     * @return Circle|Square|null
     */
    public function create($params)
    {
        $shape = null;
        $shape_params = isset($params['params']) ? $params['params'] : null;

        if (isset($params['type'])) {
            switch ($params['type']) {
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