<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UseCases\Admin\Tag\DestroyAction;
use App\UseCases\Admin\Tag\IndexAction;
use App\UseCases\Admin\Tag\StoreAction;
use App\UseCases\Admin\Tag\UpdateAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * ホーム画面
     */
    public function index(IndexAction $index_action): View
    {
        return view('admin.tag.index', [
            $index_action(),
        ]);
    }

    /**
     * 登録画面
     */
    public function store(StoreAction $store_action, Request $request): RedirectResponse
    {
        $store_action($request);

        return redirect()->route('admin.tag.index');
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

        return redirect()->route('admin.tag.index');
    }

    /**
     * 削除処理
     */
    public function destroy(DestroyAction $destroy_action, int $user_id): RedirectResponse
    {
        $destroy_action($user_id);

        return redirect()->route('admin.tag.index');
    }
}
