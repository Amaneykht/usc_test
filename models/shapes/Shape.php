<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
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
        $content = "";
        $content .= $this->Color();
        $content .= $this->Size();
        $content .= $this->Border();
        return $content;
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

        return $color->setColor(['color' => $this->color, 'gradient_color' => $this->gradient_color]);
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

        return $size->canResize();
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
                elseif ($this->border == 1)
                    $border = new ThinBorder();
                else
                    $border = new WideBorder();
                break;
        }

        return $border->getBorder();
    }

    public function __construct($params)
    {
        foreach (get_object_vars($this) as $attribute => $value) {
            if (isset($params[$attribute]))
                $this->$attribute = $params[$attribute];
        }
    }
}