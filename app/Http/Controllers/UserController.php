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
            'name' => 'string',
            'photoUrl' => 'string'
        ]);

        $validate_data['created_at'] = Carbon::now('Asia/Jakarta');
        $validate_data['updated_at'] = Carbon::now('Asia/Jakarta');



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
        $data = UserChat::find($id);

        if(!$data) {
            return response() -> json([
                'message' => 'User Not Found'
            ], 404);
        }
        return response() -> json([
            'message' => 'User is Found!!',
            'data' => $data
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate_data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'name' => 'string',
            'photoUrl' => 'string'
        ]);

        $data = UserChat::find($id);

        if(!$data) {
            return response() -> json([
                'message' => 'User Not Found'
            ], 404);
        }

        $validate_data['updated_at'] = Carbon::now('Asia/Jakarta');

        $data->update($validate_data);

        return response() -> json([
            'message' => 'User Updated Succesfully',
            'data' => $data
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = UserChat::find($id);

        if(!$data) {
            return response() -> json([
                'message' => 'User not Found'
            ], 404);
        }

        $data->delete();

        return response() -> json([
            'message' => "User Deleted Succesfully"
        ], 200);
    }
}
