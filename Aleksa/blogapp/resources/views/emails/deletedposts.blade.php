@extends('layout.default')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $posts }}
@endsection