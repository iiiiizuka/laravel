<?php

namespace App\UseCases\User\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class IndexAction
{
    public function __invoke()
    {
        return Post::user(Auth::id())->get();
    }
}
