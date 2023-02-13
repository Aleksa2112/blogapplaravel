@extends('layout.default')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>
              <a href="/editpost/{{ $post->id }}">{{ $post->title }}</a>
            </td>
            <td>{{ $post->body }}</td>
            <td>
                <a href="/deletepost/{{ $post->id }}">Delete</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
{{ $posts }}
@endsection