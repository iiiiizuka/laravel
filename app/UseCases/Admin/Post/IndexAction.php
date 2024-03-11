<?php

namespace App\UseCases\Admin\Post;

use App\Models\Post;

class IndexAction
{
    public function __invoke(): array
    {
        return [
            'posts' => Post::all()
        ];
    }
}
