<?php

namespace App\UseCases\Admin\Tag;

use App\Models\Tag;

class DestroyAction
{
    public function __invoke(int $tag_id): void
    {
        Tag::destroy($tag_id);
    }
}
