<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
    <style> 
    body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

article {
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

h1 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
}

.post-meta {
    color: #666;
    font-size: 14px;
    margin-bottom: 10px;
}

p {
    color: #555;
    font-size: 16px;
    line-height: 1.6;
}

    </style> 
    <title>عرض المقالة</title> 
</head> 

<body> 
    <div class="container"> 
  

        <article> 
            <h1>author id: {{$author->id}}</h1> 
            <p class="post-meta"> 
          <h4>  author name:</h4> {{$author->name}}
          <h4>  author email:</h4> {{$author->email}}
                </p> 
        </article> 

        <a href="{{route('author.list')}}" class="back-button">Back</a>
    </div> 
</body> 

</html>