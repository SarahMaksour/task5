<form action="{{ route('author.destroy', $author->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>

</form>