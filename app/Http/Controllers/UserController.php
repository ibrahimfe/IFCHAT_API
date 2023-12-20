<?php

namespace App\Http\Controllers;

use App\Models\UserChat;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = UserChat::orderBy('id', 'asc')->get();

        return response() -> json([
            'message' => 'List of All Users',
            'data' => $user,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'name' => 'string'
        ]);

        $validate_Data['created_at'] = Carbon::now('Asia/Jakarta');
        $validate_Data['updated_at'] = Carbon::now('Asia/Jakarta');



        $data = UserChat::create($validate_data);

        return response() -> json([
            'message' => 'Succesfully Created New User',
            'data' => $data,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
