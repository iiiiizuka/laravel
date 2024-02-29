<?php

namespace App\UseCases\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;

class StoreAction
{
    /**
     * ユーザ登録処理
     *
     * @param Request $request
     *
     * @return User
     */
    public function __invoke(Request $request): User
    {
        $user = User::create($request->all());

        return $user;
    }
}
