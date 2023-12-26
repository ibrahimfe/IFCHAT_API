<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Messages::orderBy('id', 'asc')->get();

        return response()->json([
            'message' => 'List Of All Messages',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required',
            'photoUrl' => 'string',
            'text' => 'required'
        ]);
        $validate_data['created_at'] = Carbon::now('Asia/Jakarta');
        $validate_data['updated_at'] = Carbon::now('Asia/Jakarta');

        try {
            $data = Messages::create($validate_data);

            return response()->json([
                'message' => 'New Message Created Successfully',
                'data' => $data
            ], 201);
        } catch (\Exception $e) {

            return response()->json([
                'error' => 'Failed to create a new message'
            ], 500);
        }
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
