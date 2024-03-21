<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Http\Requests\StorememberRequest;
use App\Http\Requests\UpdatememberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function chackMember(Request $request , member $member){
        try {
            $request->validate([
                'faltNumber'=>'required',
                'password'=>'required',
            ]);
            $pass = Hash::make($request->password);
            $data = [
                'faltNumber' => $request->faltNumber
            ];
            DB::beginTransaction();
            $chack = $member->where($data)->exists();
            if (isset($chack) || $chack == true){
                $answer = $member->where($data)->toArray();
                $error = 'Passwrd Does Not Exists';
            }else{
                $answer = NULL;
                $error = "User Does Not Exists";
            };
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $data = NULL;
            return json_encode(['data'=>NULL , 'error'=>$th->getMessage(),'status'=>500]);
        };

        if ($answer != NULL && Hash::check($request->password,$answer['password'])) {
            return json_encode(['data'=>$answer,'error'=>NULL,'status'=>200]);
        }else{
            return json_encode(['data'=>NULL , 'error'=>$error,'status'=>500]);
        };
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
    public function store(StorememberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatememberRequest $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
