<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreemployeRequest;
use App\Models\employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{

    public function index(employe $employe){
        try {
            $data = $employe->simplePaginate(5);
            return view('employeView',['data'=>$data]);
        } catch (\Throwable $th) {
            $data = NULL;
            return view('employeView',['data'=>NULL]);
        }

    }

    public function store(StoreemployeRequest $request , employe $employe){
        try {
            DB::beginTransaction();
            $data = [
                'e_name'=>$request->e_name,
                'e_mail'=>$request->e_mail,
                'e_password'=>$request->e_password
            ];
            $employe->create($data);
            DB::commit();
            $data = $employe->get()->toArray();
            return json_encode(['data'=>$data,'message'=>'GOT DATA','error'=>NULL,'status'=>200]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $data = NULL;
            return json_encode(['data'=>Null,'error'=>$th->getMessage(),'status'=>500]);
        };

    }

}
