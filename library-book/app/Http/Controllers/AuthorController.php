<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
   
    public function index()
    {
      
        $author=Author::all();
        
        return view('Author.list',compact('author'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
     
        return view('Author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author=Author::create(
            [
                'name'=>$request->name,
                'email'=>$request->email
            ]
            );
            return redirect()->route('author.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $author=Author::findOrFail($id);
       return view('Author.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
     public function edit(string $id)
    {
        $author=Author::findOrFail($id);
        return view('Author.edit',['author'=>$author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author=Author::findOrFail($id);
        $author->update(
            [
                'name'=>$request->name,
                'email'=>$request->email
            ]
            );
            return redirect()->route('author.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author=Author::findOrFail($id);
        $author->book()->delete();
        $author->delete();
        return redirect()->route('author.list');
    }
}


