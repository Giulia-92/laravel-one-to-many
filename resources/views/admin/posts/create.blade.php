@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title"  value="{{old('title')}}" placeholder="inserisci titolo">
      
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{old('content')}}</textarea>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" {{old('published') ? 'checked' : ''}} id="published"  name="published">
      <label class="form-check-label" for="published">Pubblicato</label>
    </div>
    <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="category_id" id="category" class="form-control">
      <option value="">Select category</option>
      @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}
      </option>
      @endforeach
    </select>
    </div>
    <div class="mb-3">
      <div class="form-group">
        <h5>Tags</h5>
        @foreach ($tags as $tag)
        <div class="form-check-inline">
          <input type="checkbox" class="form-check-input" {{in_array($tag->id,old("tags",[])) ? 'checked' : ''}} id="{{$tags->slug}}"  name="tags[]" value="{{$tag->id}}">
            <label class="form-check-label" for="{{$tags->slug}}">{{$tag->name}}</label>
          @endforeach
      <label for="category" class="form-label">Category</label>
      <select name="category_id" id="category" class="form-control">
        <option value="">Select category</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}
        </option>
      </div>
        @endforeach
      </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection