<?php

namespace App\UseCases\Admin\Tag;

use App\Models\Tag;

class IndexAction
{
    public function __invoke(): array
    {
        return [
            'tags' => Tag::all()
        ];
    }
}
