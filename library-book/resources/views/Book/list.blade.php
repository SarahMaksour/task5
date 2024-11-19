<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
        "width=device-width, initial-scale=1.0"> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
        } 

        header { 
            background-color: #ffffff; 
            color: #000000; 
            text-align: center; 
        } 

        nav { 
            background-color: #242424; 
            padding: 10px; 
        } 

        nav a { 
            color: #fff; 
            text-decoration: none; 
            padding: 10px; 
            margin-right: 10px; 
            display: inline-block; 
        } 

        .container { 
            display: flex; 
            justify-content: space-between; 
            max-width: 95%; 
            margin: 0 auto; 
            padding: 20px; 
        } 

        article p { 
            text-align: justify; 
        } 

        main { 
            flex: 2; 
        } 

        article { 
            margin-bottom: 20px; 
            padding: 10px 20px; 
            border: 1px solid rgb(145, 145, 145); 
            margin-right: 10px; 
        } 

        aside { 
            flex: 1; 
            background-color: #c9c9c9; 
            padding: 10px; 
        } 

        footer { 
            background-color: #242424; 
            color: #fff; 
            text-align: center; 
            position: fixed; 
            bottom: 0; 
            width: 100%; 
        } 
    </style> 
    <title>Blogging Website Layout</title> 
</head>
<body>
    
    <header> 
        <h1>simple library</h1> 
        <p>made by me</p> 
    </header> 
    <a href="{{route('book.create')}}">create new book</a> 
    <nav> 
        <a href="/">Home</a> 
   
        <a href="/books">books</a> 
        <a href="/author">authors</a> 
        <a href="/categories">categories</a> 
           </nav> 

    <div class="container"> 
        <main> 
           @foreach($book as $book)
            <article> 
            <h2>    book title:<br></h2> 
            {{$book->title}}
                <p class="post-meta"> 
                   <h2> book description:<br>   </h2>     
                {{$book->description}}
                <h2> book author:<br>   </h2>     
                {{$book->author->name}}
            </p> 
            @if (!$book->deleted_at)
                 
            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-outline-secondary">Update</a>
            <form action="{{ route('book.delete', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
            @endif
            @if ($book->deleted_at)
             
            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-outline-secondary">Update</a>
            <form action="{{ route('book.restore', $book->id) }}" method="POST">
                @csrf
            
                <button type="submit">restore</button>
            </form>
            @endif
               
    
        <a href="{{ route('book.show', $book->id) }}">view</a> 
   
            </article> 
      @endforeach

       
        </main> 
       
       
    </div> 
  
    <footer> 
        <p>© 2023 Your Blog Name. All rights reserved.</p> 
    </footer> 

   </body>
</html>