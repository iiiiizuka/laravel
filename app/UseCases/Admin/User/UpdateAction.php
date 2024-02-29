<?php

namespace App\UseCases\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateAction
{
    /**
     * ユーザ更新処理
     *
     * @param Request $request リクエストデータ
     * @param int     $user_id ユーザID
     *
     * @return void
     */
    public function __invoke(Request $request, int $user_id): void
    {
        $user = User::findOrFail($user_id);
        $user->save($request->all());
    }
}
