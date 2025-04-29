<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('user_id', Auth::id())->get();
        return view('private.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('private.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,NULL,id,user_id,' . Auth::id(),
        ]);

        Category::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('private.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id . ',id,user_id,' . Auth::id(),
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}

?>
