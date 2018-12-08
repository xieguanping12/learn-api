<?php

namespace App\Transformer;


class LessonTransformer extends Transformer
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