<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UseCases\Admin\Post\DestroyAction;
use App\UseCases\Admin\Post\IndexAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * 一覧画面
     */
    public function index(IndexAction $index_action): View
    {
        return view('admin.post.index', [
            $index_action(),
        ]);
    }

    /**
     * 削除処理
     */
    public function destroy(DestroyAction $destroy_action, int $post_id): RedirectResponse
    {
        $destroy_action($post_id);

        return redirect()->route('admin.post.index');
    }
}
