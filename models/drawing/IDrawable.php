<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 */

namespace models\drawing;


interface IDrawable
{
    public function Color(); //: IColor in php7;

    public function Border(); //: IBorder in php7;

    public function Size(); //: ISize in php7;

    public function draw();
}