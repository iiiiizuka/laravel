<?php

namespace App\Http\Controllers\User;

use App\UseCases\User\Profile\EditAction;
use App\UseCases\User\Profile\UpdateAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct(
        private EditAction $edit_action,
        private UpdateAction $update_action,
    ) { }

    public function edit(): View
    {
        // return view('profile.edit', [
        //     'user' => Auth::user(),
        // ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $this->update_action($request);

        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}
