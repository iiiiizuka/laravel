<?php

namespace App\UseCases\User\Post;

use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class IndexAction
{
    public function __invoke(): Collection
    {
        return Post::user(Auth::id())->get();
    }
}
