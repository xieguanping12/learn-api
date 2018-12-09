<?php

namespace App\Api\Transformers;


use League\Fractal\TransformerAbstract;

class LessonTransformer extends TransformerAbstract
{
    public function transform($lesson)
    {
        return [
            'title'   => $lesson['title'],
            'body'    => $lesson['body'],
            'is_free' => (boolean) $lesson['free'],
        ];
    }
}