<div class="container">
@foreach($posts as $post)
  <div class="starter-template">
    <h1><a href="{{ route('blog.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h1>
    {!! $post->excerpt or $post->body !!}
  </div>
  @endforeach

</div><!-- /.container -->

{!! $posts->links() !!}