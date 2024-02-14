<?php

namespace App\UseCases\User\Post;

use App\Models\Post;

class DestroyAction
{
    public function __invoke(int $post_id): void
    {
        Post::destroy($post_id);
    }
}
