@if (Auth::user()->hasThisPost($post->id))
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
    <form action="/posts/{{ $post->id }}" method="post">
        {{ csrf_field() }}
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>    
@endif
