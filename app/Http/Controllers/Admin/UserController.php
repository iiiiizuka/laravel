<?php

namespace App\Http\Controllers\Admin;

use App\UseCases\Admin\User\CreateAction;
use App\UseCases\Admin\User\EditAction;
use App\UseCases\Admin\User\IndexAction;
use App\UseCases\Admin\User\ShowAction;
use App\UseCases\Admin\User\StoreAction;
use App\UseCases\Admin\User\UpdateAction;
use App\UseCases\Admin\User\DestroyAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct(
        private IndexAction $index_action,
        private CreateAction $create_action,
        private StoreAction $store_action,
        private ShowAction $show_action,
        private EditAction $edit_action,
        private UpdateAction $update_action,
        private DestroyAction $destroy_action,
    ) { }

    /**
     * ホーム画面
     */
    public function index(): View
    {
        return view('admin.home.index', [
            $this->index_action(),
        ]);
    }

    public function create(): View
    {
        return view('admin.home.create', [
            $this->create_action(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->store_action($request);

        return redirect()->route('admin.user.index');
    }

    public function show(int $user_id): View
    {
        return view(
            'admin.user.show',
            $this->show_action($user_id),
        );
    }

    public function edit(int $user_id): View
    {
        return view(
            'admin.user.edit',
            $this->edit_action($user_id),
        );
    }

    public function update(Request $request, int $user_id): RedirectResponse
    {
        $this->update_action($request);

        return redirect()->route('admin.user.show', [$user_id]);
    }

    public function destroy(int $user_id): RedirectResponse
    {
        $this->destroy_action($user_id);

        return redirect()->route('admin.user.index');
    }
}
