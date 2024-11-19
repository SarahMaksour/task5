<!-- front end  -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>نموذج المقالة</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    input, textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<div class="container">
    <h2>edit  book</h2>
    <form action="{{ route('book.update', $book->id) }}" method="POST">
        @method('PUT')
        @csrf
    
        <label for="title">Book Title</label><br>
        <input type="text" id="title" name="title" value="{{ $book->title }}"><br>
    
        <label for="description">Book Description</label><br>
        <input type="text" id="description" name="description" value="{{ $book->description }}"><br>
    
        <label for="author_id">Select Author</label><br>
        <select class="form-select" name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}" @if($author->id == $book->author_id) selected @endif>{{ $author->name }}</option>
            @endforeach
        </select>
    
        <button type="submit">Save</button>
        <a href="{{ route('book.list')}}">Back</a>
    </form>
    
</div>
</body>
</html>
