<?php

namespace App\UseCases\Admin\User;

use App\Models\User;

class EditAction
{
    /**
     * ユーザ更新処理
     *
     * @param int $user_id ユーザID
     *
     * @return array
     */
    public function __invoke(int $user_id): array
    {
        return [
            'user' => User::findOrFail($user_id)
        ];
    }
}
