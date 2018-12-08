<?php

namespace App\Transformer;


abstract class Transformer
{
    public function transformCollection($lessons)
    {
        return array_map([$this,'transform'], $lessons);
    }

    public abstract function transform($lesson);
}