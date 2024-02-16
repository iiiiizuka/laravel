<?php

namespace App\UseCases\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditAction
{
    public function __invoke(): User
    {
        return Auth::user();
    }
}
