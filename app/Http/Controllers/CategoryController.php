<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::select('id', 'name', 'parent_id')->paginate(5);
        return view('admin.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.categories.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {   
        
     

        // $category=
        Category::create([
            
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]); 
        // $category->products()->sync($request->input('product_id'));
        return back()->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.categories.update', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
       
        $category->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);
        // $category->products()->sync($request->input('product_id'));
        return redirect()->route('categories.index')->with('updated','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id',$id)->delete();
       return back()->with('success','Data deleted successfully');
    }
}
