@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    @if($post->category)
    <h2>{{$post->category->name}}</h2>
    @endif
    <small>{{$post->created_at}}</small>
    <p>{{$post->content}}</p>
    <h5>pubblicato:{{$post->published ? 'Published' : 'Unpublished'}}</h5>
</div>
@endsection