<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addproductView');
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
    public function store(Request $request , product $product)
    {
        try {
            $request->validate([
                'name'=>'required',
                'discription'=>'required',
                'image'=>'required|file|mimes:jpeg,jpg,png,git|max:10000',
            ]);

            $imgName = time().'.'.$request->image->extension();
            $request->image->move(public_path('product'), $imgName);
            DB::beginTransaction();
            $data = [
                'name'=>$request->name,
                'discription'=>$request->discription,
                'image'=>$imgName,
            ];
            $product->create($data);
            DB::commit();
            return("  <div> <ul> <li><a href='/showproduct'>Show Product</a></li>
            <li><a href='/'>Home</a></li>
            </ul> </div> ");
        } catch (\Exception $th) {
            DB::rollBack();
            $data = NULL;
            return response()->json(["data"=>NULL, "error"=>$th->getMessage(),"status"=>500]);
        };

    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        try {
            $data = $product->get()->toArray();

        } catch (\Exception $th) {
            $data = ['data'=>NULL,'error'=>'SERVER_ERROR','status'=>500];
        };
        return view('showproductView',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, product $product)
    {
        //
    }
}
