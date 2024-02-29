<?php

namespace App\UseCases\Admin\User;

use App\Models\User;

class DestroyAction
{
    /**
     * ユーザ削除処理
     *
     * @param int $user_id ユーザID
     *
     * @return void
     */
    public function __invoke(int $user_id): void
    {
        User::destroy($user_id);
    }
}
