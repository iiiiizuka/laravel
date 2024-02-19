<?php

namespace App\UseCases\Admin\Home;

use App\Models\User;

class IndexAction
{
    public function __invoke(): array
    {
        return [
            'users' => User::all()
        ];
    }
}
