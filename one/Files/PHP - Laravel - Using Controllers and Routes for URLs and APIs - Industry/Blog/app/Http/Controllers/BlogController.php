<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreblogRequest;
use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $blog = Blog::all();
        return view ('blog.index')->with('blog', $blog);
    }

    public function create(): View
    {
        return view('blog.create');
    }

    public function store(StoreblogRequest $request): RedirectResponse
    {
        $input = [
            'name'=>$request->name,
            'details'=>$request->details
        ];
        Blog::create($input);
        return redirect('blog')->with('flash_message', 'blog Addedd!');
    }
    public function show(string $id): View
    {
        $blog = Blog::find($id);
        return view('blog.show')->with('blog', $blog);
    }
    public function edit(string $id): View
    {
        $blog = Blog::find($id);
        return view('blog.edit')->with('blog', $blog);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $blog = Blog::find($id);
        $input = $request->all();
        $blog->update($input);
        return redirect('blog')->with('flash_message', 'blog Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Blog::destroy($id);
        return redirect('blog')->with('flash_message', 'blog deleted!');
    }
}
