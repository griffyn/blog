<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\IndexRequest;
use App\Http\Requests\Role\StoreRequest;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(IndexRequest $request, Role $role)
    {
        $roles = $role->get();
        return response()->json([
            'success' => true,
            'data' => $roles
        ], 200);
    }

    public function create(StoreRequest $request, Role $role)
    {

    }
}
