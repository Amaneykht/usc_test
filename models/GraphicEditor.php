<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models;

use models\components\ShapeCreator;

class GraphicEditor
{
    public function draw($input) {
        $content = "";
        foreach($input as $component) {
            $creator = new ShapeCreator();
            $drawable = $creator->create($component);
            $drawing = new Drawing($drawable);

            $content .= $drawing->draw();
        }

        return $content;
    }
}