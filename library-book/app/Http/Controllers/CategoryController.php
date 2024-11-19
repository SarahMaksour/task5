<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $categories=Category::withTrashed()->get();
      return view('categories.list',['categories' => $categories]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category=Category::create(
            [
                'name'=>$request->name,
            ]
            );
            return redirect()->route('categories.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=Category::findOrFail($id);
        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::findOrFail($id);
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category=Category::findOrFail($id);
        $category->update(
            [
                'name'=>$request->name
            
            ]
            );
            return redirect()->route('categories.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.list');
    }
    public function restore(string $id){
        $category=Category::withTrashed()->where('id',$id)->first();
        $category->restore();     
        return redirect()->route('categories.list');
    }}