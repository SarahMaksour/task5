<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <title>PHP File CRUD </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<style>
body{
  font:1.2em normal Arial,sans-serif;
  color:#34495E;
}

h1{
  text-align:center;
  text-transform:uppercase;
  letter-spacing:-2px;
  font-size:2.5em;
  margin:20px 0;
}

.container{
  width:90%;
  margin:auto;
}

table{
  border-collapse:collapse;
  width:100%;
}

.blue{
  border:2px solid #1ABC9C;
}

.blue thead{
  background:#1ABC9C;
}

.purple{
  border:2px solid #9B59B6;
}

.purple thead{
  background:#9B59B6;
}

thead{
  color:white;
}

th,td{
  text-align:center;
  padding:5px 0;
}

tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}

.fixed{
  top:0;
  position:fixed;
  width:auto;
  display:none;
  border:none;
}

.scrollMore{
  margin-top:600px;
}

.up{
  cursor:pointer;
}
</style>
<script>;(function($) {
   $.fn.fixMe = function() {
      return this.each(function() {
         var $this = $(this),
            $t_fixed;
         function init() {
            $this.wrap('<div class="container" />');
            $t_fixed = $this.clone();
            $t_fixed.find("tbody").remove().end().addClass("fixed").insertBefore($this);
            resizeFixed();
         }
         function resizeFixed() {
            $t_fixed.find("th").each(function(index) {
               $(this).css("width",$this.find("th").eq(index).outerWidth()+"px");
            });
         }
         function scrollFixed() {
            var offset = $(this).scrollTop(),
            tableOffsetTop = $this.offset().top,
            tableOffsetBottom = tableOffsetTop + $this.height() - $this.find("thead").height();
            if(offset < tableOffsetTop || offset > tableOffsetBottom)
               $t_fixed.hide();
            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && $t_fixed.is(":hidden"))
               $t_fixed.show();
         }
         $(window).resize(resizeFixed);
         $(window).scroll(scrollFixed);
         init();
      });
   };
})(jQuery);

$(document).ready(function(){
   $("table").fixMe();
   $(".up").click(function() {
      $('html, body').animate({
      scrollTop: 0
   }, 2000);
 });
});</script>
</head>

<body>

            <table class="container">
            <table class="purple">
            <div class="col-12"><a href="{{route('book.list')}}">Back</a><br><br>
                <a href="{{route('author.create')}}">create new author</a> 
            </div>
                    <thead>
                        <th>author id</th>
                    <th>author name</th>
                        <th>Action</th>
                    </thead>
                
                       @foreach ($author as $author)
                           
                     
            <tr>
            
                
                <td>{{$author->id}}</td>
                <td>{{$author->name}}</td>
                <td>{{$author->email}}</td>
                <td>
                <a href="{{ route('author.show', $author->id) }}" class="btn btn-outline-dark">View</a>
                <a href="{{ route('author.edit', $author->id) }}" class="btn btn-sm btn-outline-secondary">Update</a>
                <form action="{{ route('author.delete', $author->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
              
            </td>
                </td>
            </tr>
       @endforeach
        </tbody>