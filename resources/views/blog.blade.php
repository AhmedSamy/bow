@foreach($posts as $post)
    <article>
        <h2>
            <a href="{{ route('blog.post', [$post->id, $post->slug]) }}">
                {{ $post->title }}
            </a>
        </h2>

        {!! $post->excerpt or $post->body !!}
    </article>
@endforeach

{!! $posts->links() !!}