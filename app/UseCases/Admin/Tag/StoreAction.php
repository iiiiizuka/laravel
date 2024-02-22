<?php

namespace App\UseCases\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;

class StoreAction
{
    public function __invoke(Request $request): void
    {
        Tag::create($request->all());
    }
}
