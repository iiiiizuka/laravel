<?php

namespace App\UseCases\Admin\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class DestroyAction
{
    public function __invoke(int $post_id): void
    {
        DB::transaction(function () use ($post_id) {
            Post::destroy($post_id);
        });
    }
}
