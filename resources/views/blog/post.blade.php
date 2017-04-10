<article>
    <h2>{{ $post->title }}</h2>
    <p>
        {{-- Posted by {{ $post->author->name }} on {{ $post->published_at }} --}}
    </p>

    {!! $post->body !!}
</article>