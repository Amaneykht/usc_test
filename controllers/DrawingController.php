<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace controllers;


/**
 * This is the controller that is responsible of drawing
 * Class DrawingController
 * @package controllers
 */
class DrawingController extends Controller
{
    public function actionBasic()
    {
        $shapes = [
            ['type' => 'circle', 'params' => ['color' => '#ddddd', 'colorType' => 'full', 'size' => 0, 'borderType' => 'thin']],
            ['type' => 'circle', 'params' => ['color' => '#ddddd', 'colorType' => 'gradient', 'size' => 3, 'borderType' => 'wide']],
            ['type' => 'square', 'params' => ['color' => '#gfeee', 'colorType' => 'gradient', 'size' => 5, 'borderType' => 'wide']]
        ];

        $graphic_editor = new \models\GraphicEditor();
        $content = $graphic_editor->draw($shapes);

        $this->render('basic', [
            'content' => $content
        ]);
    }
}