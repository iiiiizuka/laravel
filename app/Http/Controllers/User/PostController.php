<?php

namespace App\Http\Controllers\User;

use App\UseCases\User\Post\DestroyAction;
use App\UseCases\User\Post\IndexAction;
use App\UseCases\User\Post\StoreAction;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(
        private IndexAction $index_action,
        private StoreAction $store_action,
        private DestroyAction $destroy_action,
    ) { }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->store_action($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->destroy_action($id);
    }
}
