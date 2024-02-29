<?php

namespace App\UseCases\Admin\User;

use App\Models\User;

class IndexAction
{
    /**
     * ユーザ一覧取得処理
     *
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'users' => User::all()
        ];
    }
}
