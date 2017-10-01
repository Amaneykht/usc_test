<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 10:06 م
 */

namespace models\drawing;


interface IDrawable
{
    public function Color(); //: IColor in php7;

    public function Border(); //: IBorder in php7;

    public function Size(); //: ISize in php7;

    public function draw();
}