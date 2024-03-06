<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UseCases\Admin\Tag\CreateAction;
use App\UseCases\Admin\Tag\DestroyAction;
use App\UseCases\Admin\Tag\IndexAction;
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
     * 登録処理
     */
    public function create(CreateAction $create_action, Request $request): RedirectResponse
    {
        $create_action($request);

        return redirect()->route('admin.tag.index');
    }

    /**
     * 更新処理
     */
    public function update(
        UpdateAction $update_action,
        int $tag_id,
        Request $request,
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
