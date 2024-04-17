<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Post::all();

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
        //
        $data = Post::find($id)->user;

        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
        ]);
    }

    public function show($id)
    {
        //
        $data = Post::with('user')->find($id);

        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
