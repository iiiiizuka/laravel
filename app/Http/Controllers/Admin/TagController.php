<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tags\StoreRequest;
use App\Http\Requests\Tags\UpdateRequest;
use App\UseCases\Admin\Tag\DestroyAction;
use App\UseCases\Admin\Tag\IndexAction;
use App\UseCases\Admin\Tag\StoreAction;
use App\UseCases\Admin\Tag\UpdateAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * 一覧画面
     */
    public function index(IndexAction $index_action): View
    {
        return view('admin.tag.index', [
            $index_action(),
        ]);
    }

    /**
     * 登録処理
     */
    public function store(StoreAction $store_action, StoreRequest $request): RedirectResponse
    {
        $store_action($request);

        return redirect()->route('admin.tag.index');
    }

    /**
     * 更新処理
     */
    public function update(
        UpdateAction $update_action,
        int $tag_id,
        UpdateRequest $request,
    ): RedirectResponse {
        $update_action($tag_id, $request);

        return redirect()->route('admin.tag.index');
    }

    /**
     * 削除処理
     */
    public function destroy(DestroyAction $destroy_action, int $tag_id): RedirectResponse
    {
        $destroy_action($tag_id);

        return redirect()->route('admin.tag.index');
    }
}
