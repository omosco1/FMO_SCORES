@extends('layout')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <h1 class="text-info">All Trending Sports Conversations</h1>
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


<div class=" col-12">
    <div style="color:white;font-size:18px; text-align:right; width:60%;">powered by <a href="#" rel="noopener" target="_blank" style="color:red;">Fofx Academy </a>&nbsp;
        <a class="text-info" ><marquee width="40%" height="22px" direction="left" scrollamount="2"> Designed by FMO SCORES:<strong><i>Your Number One Online and Real-time Footbal Scores, Updates and News Centre...</i>
        </marquee></strong></a>
    </div></div>
@endsection
