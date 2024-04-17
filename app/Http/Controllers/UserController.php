<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = User::all();

        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
        ]);
    }

    public function raw($id)
    {
        $data = DB::select("SELECT * FROM users LEFT JOIN posts ON users.id = posts.user_id WHERE users.id = ?", [$id]);

        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function showWithoutParent($id)
    {
        $data = User::find($id)->posts;

        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
        ]);
    }

    public function show(string $id)
    {
        $data = User::with('posts')->find($id);

        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
