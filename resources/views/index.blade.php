@extends('layout')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <th class="text-white bg-dark">ID</th>
                    <th class="text-white bg-dark">fullname</th>
                    <th class="text-white bg-dark">Title</th>
                    <th class="text-white bg-dark">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td class="text-white bg-dark">{{ $post->id }}</td>
                    <td class="text-white bg-info">{{ $post->fullname}}</td>
                    <td class="text-white  bg-secondary">{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show Post</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
