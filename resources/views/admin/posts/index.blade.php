@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
@endsection

@section('content')
<div class="container">
    <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-success my-3">Crea proggetto</a>
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
                        <a href="{{ route('admin.posts.show', $post) }}"><i class="fa-regular fa-eye"></i></a>
                        <a href="{{ route('admin.posts.edit', $post) }}"><i class="fa-solid fa-pencil"></i></a>
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