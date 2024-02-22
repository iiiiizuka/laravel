<?php

namespace App\UseCases\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateAction
{
    public function __invoke(int $tag_id, Request $request): void
    {
        $tag = Tag::findOrFail($tag_id);
        $tag->create($request->all());
    }
}
