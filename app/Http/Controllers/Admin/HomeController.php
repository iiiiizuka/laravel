<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UseCases\Admin\Home\IndexAction;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * ホーム画面
     */
    public function index(IndexAction $index_action): View
    {
        return view('admin.index',
            $index_action()
        );
    }
}
