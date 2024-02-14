<?php

namespace App\UseCases\User\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class StoreAction
{
    public function __invoke(Request $request): Post
    {
        return Post::create($request->all() + ['user_id' => Auth::id()]);
    }
}
