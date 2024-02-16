<?php

namespace App\UseCases\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class UpdateAction
{
    public function __invoke(Request $request): User
    {
        $user = Auth::user();

        return $user->save($request->all());
    }
}
