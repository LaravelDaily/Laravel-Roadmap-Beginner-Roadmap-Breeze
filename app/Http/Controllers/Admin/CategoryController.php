<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditCategoryRequest;
use App\Http\Requests\Admin\CreateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(EditCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        if ($category->posts()->count()) {
            return back()->withErrors(['error' => 'Cannot delete, category has posts.']);
        }

        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
