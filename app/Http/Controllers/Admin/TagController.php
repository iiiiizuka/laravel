<?php

namespace App\Http\Controllers\Admin;

use App\UseCases\Admin\Tag\IndexAction;
use App\UseCases\Admin\Tag\StoreAction;
use App\UseCases\Admin\Tag\UpdateAction;
use App\UseCases\Admin\Tag\DestroyAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    public function __construct(
        private IndexAction $index_action,
        private StoreAction $store_action,
        private UpdateAction $update_action,
        private DestroyAction $destroy_action,
    ) { }

    /**
     * ホーム画面
     */
    public function index(): View
    {
        return view('admin.tag.index', [
            $this->index_action(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->store_action($request);

        return redirect()->route('admin.tag.index');
    }

    public function update(Request $request, int $user_id): RedirectResponse
    {
        $this->update_action($request);

        return redirect()->route('admin.tag.index');
    }

    public function destroy(int $user_id): RedirectResponse
    {
        $this->destroy_action($user_id);

        return redirect()->route('admin.tag.index');
    }
}
