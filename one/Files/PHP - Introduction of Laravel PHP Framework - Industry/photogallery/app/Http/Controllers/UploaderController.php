<?php

namespace App\Http\Controllers;

use App\Models\uploader;
use App\Http\Requests\StoreuploaderRequest;
use App\Http\Requests\UpdateuploaderRequest;
use Illuminate\Support\Facades\DB;

class UploaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreuploaderRequest $request,uploader $uploader)
    {

        try {
            DB::beginTransaction();
            $data = [
                "name"=>$request->name,
                "email"=>$request->email,
            ];
            $uploader::create($data);
            DB::commit();
        } catch (\Exception $th) {
            DB::rollBack();
            $data = NULL;
            return response()->json(["data"=>NULL, "error"=>$th->getMessage(),"status"=>500]);
        };
        try {
            $user = $uploader->where("email","=",$request->email)->get();
        } catch (\Exception $th) {
            $user = NULL;
            return response()->json(["data"=>NULL, "error"=>$th->getMessage(),"status"=>500]);
        };
        return response()->json(["data"=>$user, "error"=>"success","status"=>200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(uploader $uploader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(uploader $uploader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateuploaderRequest $request, uploader $uploader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(uploader $uploader)
    {
        //
    }
}
