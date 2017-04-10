@extends('bow::layouts.frontend')

@section('title', $page->title)

@section('heading', 'Welcome')

@section('content')
    @if($page->view)
        {!! $page->view->render() !!}
    @else
    {!! $page->body !!}
    @endif
@endsection

