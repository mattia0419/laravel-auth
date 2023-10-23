@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post) }}">Show</a>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="6"><i>Non ci sono risultati</i></td>
            </tr>
            @endforelse
        </tbody>
      </table>

    {{ $posts->links('pagination::bootstrap-5') }}
</div>
    
@endsection