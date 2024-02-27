<?php

namespace App\UseCases\Admin\User;

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
