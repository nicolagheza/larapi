<?php

namespace Modules\User\Http\Controllers;

use Foundation\Abstracts\Controller\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\User\Entities\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return \response()->json();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create()
    {
        return \response()->json();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        return \response()->json();
    }

    /**
     * Show the specified resource.
     *
     * @return JsonResponse
     */
    public function show()
    {
        $this->authorize('access', get_authenticated_user());

        return \response()->json(\Auth::user()->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function update(Request $request)
    {
        return \response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return JsonResponse
     */
    public function destroy()
    {
        return \response()->json();
    }
}
