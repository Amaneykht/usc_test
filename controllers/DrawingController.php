<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 01/10/2017
 * Time: 06:47 م
 */

namespace controllers;


class DrawingController
{
    public function actionIndex() {

        $shapes = [
            ['type' => 'circle', 'params' => ['color' => '#ddddd', 'colorType' => 'full', 'size' => 0, 'borderType' => 'thin']],
            ['type' => 'circle', 'params' => ['color' => '#ddddd', 'colorType' => 'gradient', 'size' => 3, 'borderType' => 'wide']],
            ['type' => 'square', 'params' => ['color' => '#gfeee', 'colorType' => 'gradient', 'size' => 5, 'borderType' => 'wide']]
        ];

        $graphic_editor = new \models\GraphicEditor();
        $graphic_editor->draw($shapes);
    }

}