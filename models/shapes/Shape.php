<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 30/09/2017
 * Time: 09:19 م
 */

namespace models\shapes;


use models\drawing\CustomBorder;
use models\drawing\FullColor;
use models\drawing\GradientColor;
use models\drawing\IDrawable;
use models\drawing\NonResizable;
use models\drawing\Resizable;
use models\drawing\ThinBorder;
use models\drawing\WideBorder;

abstract class Shape implements IDrawable
{
    protected $color;
    protected $gradient_color;
    protected $size;
    protected $border;
    protected $colorType;
    protected $borderType;

    public function draw()
    {
        $this->Color();
        $this->Size();
        $this->Border();
    }

    public function Color()
    {
        $color = null;
        switch ($this->colorType) {
            case 'gradient':
                $color = new GradientColor();
                break;
            case 'full':
                $color = new FullColor();
                break;
        }

        $color->setColor(['color' => $this->color, 'gradient_color' => $this->gradient_color]);
    }

    public function Size()
    {
        $size = null;
        switch ($this->size) {
            case 0:
                $size = new NonResizable();
                break;
            default:
                $size = new Resizable();
                break;
        }

        $size->canResize();
    }

    public function Border()
    {
        $border = null;
        switch ($this->borderType) {
            case 'thin':
                $border = new ThinBorder();
                break;
            case 'wide':
                $border = new WideBorder();
                break;
            case 'custom':
                if ($this->border != 1 && $this->border != 5)
                    $border = new CustomBorder($this->border);
                elseif($this->border == 1)
                    $border = new ThinBorder();
                else
                    $border = new WideBorder();
                break;
        }

        $border->getBorder();
    }

    public function __construct($params)
    {
        foreach (get_object_vars($this) as $attribute => $value) {
            if (isset($params[$attribute]))
                $this->$attribute = $params[$attribute];
        }
    }
}