<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
 
</form>