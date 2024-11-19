<form action="{{ route('book.destroy', $book->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
 
</form>
