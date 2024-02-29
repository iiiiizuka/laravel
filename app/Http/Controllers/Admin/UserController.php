<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UseCases\Admin\User\CreateAction;
use App\UseCases\Admin\User\DestroyAction;
use App\UseCases\Admin\User\EditAction;
use App\UseCases\Admin\User\IndexAction;
use App\UseCases\Admin\User\ShowAction;
use App\UseCases\Admin\User\StoreAction;
use App\UseCases\Admin\User\UpdateAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * ホーム画面
     */
    public function index(IndexAction $index_action): View
    {
        return view('admin.user.index', [
            $index_action(),
        ]);
    }

    /**
     * 登録画面
     */
    public function create(CreateAction $create_action): View
    {
        return view('admin.user.create', [
            $create_action(),
        ]);
    }

    /**
     * 登録処理
     */
    public function store(StoreAction $store_action, Request $request): RedirectResponse
    {
        $store_action($request);

        return redirect()->route('admin.user.index');
    }

    /**
     * 詳細画面
     */
    public function show(ShowAction $show_action, int $user_id): View
    {
        return view(
            'admin.user.show',
            $show_action($user_id),
        );
    }

    /**
     * 編集画面
     */
    public function edit(EditAction $edit_action, int $user_id): View
    {
        return view(
            'admin.user.edit',
            $edit_action($user_id),
        );
    }

    /**
     * 更新処理
     */
    public function update(
        UpdateAction $update_action,
        Request $request,
        int $user_id
    ): RedirectResponse {
        $update_action($request);

        return redirect()->route('admin.user.show', [$user_id]);
    }

    /**
     * 削除処理
     */
    public function destroy(DestroyAction $destroy_action, int $user_id): RedirectResponse
    {
        $destroy_action($user_id);

        return redirect()->route('admin.user.index');
    }
}
