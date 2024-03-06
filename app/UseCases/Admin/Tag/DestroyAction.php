<?php

namespace App\UseCases\Admin\Tag;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class DestroyAction
{
    public function __invoke(int $tag_id): void
    {
        DB::transaction(function () use ($tag_id) {
            Tag::destroy($tag_id);
        });
    }
}
