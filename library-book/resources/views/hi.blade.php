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

    <nav> 
        <a href="/">Home</a> 
   
        <a href="/books">books</a> 
        <a href="/author">authors</a> 
        <a href="/categories">categories</a> 
           </nav> 

    <div class="container"> 
        <main> 
        <h1>hi,this is my litle library</h1>
       
        </main> 
       
       
    </div> 
    
    <footer> 
        <p>© 2023 Your Blog Name. All rights reserved.</p> 
    </footer> 

   </body>
</html>