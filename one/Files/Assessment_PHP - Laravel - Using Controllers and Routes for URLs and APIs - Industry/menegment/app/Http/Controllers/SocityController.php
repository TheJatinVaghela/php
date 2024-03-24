<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresocityRequest;
use App\Models\socity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

// use Illuminate\Support\Facades\View;

class SocityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $member = socity::all();
        return view ('socity.index')->with('member', $member);
    }

    public function create(): View
    {
        return view('socity.create');
    }

    public function store(StoresocityRequest $request): RedirectResponse
    {
        $input = [
            'name'=>$request->name,
            'address'=>$request->address,
            'mobile'  => $request->mobile
        ];
        socity::create($input);
        return redirect('member')->with('flash_message', 'member Addedd!');
    }
    public function show(string $id): View
    {
        $member = socity::find($id);
        return view('socity.show')->with('member', $member);
    }
    public function edit(string $id): View
    {
        $member = socity::find($id);
        return view('socity.edit')->with('member', $member);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $member = socity::find($id);
        $input = $request->all();
        $member->update($input);
        return redirect('member')->with('flash_message', 'member Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        socity::destroy($id);
        return redirect('member')->with('flash_message', 'member deleted!');
    }
}
