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
    <h2>create author</h2>
    <form action="{{route('author.store')}}" method="post">
        @csrf
    
        <label for="title">author name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="content">author email:</label><br>
        <textarea id="email" name="email" rows="6"></textarea><br>
    
        <button type="submit">save</button>
        <a href="{{ route('author.list') }}">back</a> 
       
    </form>
</div>
</body>
</html>
