<div class="row">
    <div class="col-md-12" style="background-size: 100%; height: 320px"></div>
</div>

<div class="row">
    @foreach($posts as $post)
        <div class="col-md-4">
            <h2>
                <a href="{{ route('blog.post', [$post->id, $post->slug]) }}">
                    {{ $post->title }}
                </a>
            </h2>

            {!! $post->excerpt or $post->body !!}
        </div>
    @endforeach
</div>