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
    <ul>
        <h4>Categorie collegate</h4>
        @foreach ($post->tags as $item)
            <li>{{$item->name}}</li>
        @endforeach
    </ul>
</div>
@endsection