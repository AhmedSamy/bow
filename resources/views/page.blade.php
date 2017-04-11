@extends('bow::layouts.frontend')

@section('title', $page->title)

@section('content')
    @if($page->view)
        {!! $page->view->render() !!}
    @else
        <div class="container">

          <div class="starter-template">
            <h1>{{ $page->title }}</h1>
            {!! $page->body !!}
          </div>

        </div><!-- /.container -->
    @endif
@endsection

