<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','description','author_id','book_id','category_id'
    ];
    public function author(){

        return $this->belongsTo(Author::class);
    }
    public function category(){
        return $this->belongsToMany(Category::class,'category_book','book_id','category_id');
    }
}
