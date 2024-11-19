<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
      
        $book=Book::all();
        $author=Author::all();
        $category=Category::all();
        return view('Book.list',['book'=>$book,'author'=>$author,'category'=>$category]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors=Author::all();
        $category=Category::all();
        return view('Book.create',['authors' => $authors,'category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       /* $book=Book::create(
            [
                'title'=>$request->title,
                'description'=>$request->description,
                'author_id'=>$request->author_id
            ]
            );*/
         //   dd($request->all());
         $book = new Book();
         $book->title = $request->title;
         $book->description = $request->description;
         $book->author_id = $request->author_id;
         $book->save();
      
         $book->category()->sync($request->categories_ids); 
       
         return redirect()->route('book.list');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $book=Book::findOrFail($id);
       return view('Book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
     public function edit(string $id)
    {
        $book=Book::findOrFail($id);
        $authors=Author::all();
        return view('Book.edit',['book'=>$book,'authors'=>$authors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book=Book::findOrFail($id);
        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id 
        ]);
        $book->category()->sync($request->categories_ids); 
            return redirect()->route('book.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book=Book::findOrFail($id);
     
        $book->delete();
        return redirect()->route('book.list');
    }
    public function restore(string $id){
        $book=Book::withTrashed()->where('id',$id)->first();
        $book->restore();     
        return redirect()->route('book.list');
    }
}
