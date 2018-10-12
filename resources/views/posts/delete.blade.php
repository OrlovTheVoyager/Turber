<form action="/posts/{{ $post->id }}" method="post">
    {{ csrf_field() }}
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Delete">
</form>