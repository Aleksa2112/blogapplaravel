<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
@extends('layout.default')

@section('content')

<form class="container mb-5" action="{{ url('updatepost/' . $post->id) }}" method="POST">
    @csrf
    <div class="mb-3">
      <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title" placeholder="Title" required>
    </div>
    <div class="mb-3">
      <textarea class="form-control" id="body" name="body" placeholder="Body" required>{{ $post->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update post</button>
</form>

  @include('components.error-handler')
@include('components.session-handler')


@endsection