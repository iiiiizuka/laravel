<?php

namespace App\Http\Controllers\Admin;

use App\UseCases\Admin\Home\IndexAction;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private IndexAction $index_action,
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
}
