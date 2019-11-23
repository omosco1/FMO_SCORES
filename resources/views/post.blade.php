@extends('layout')

@section('content')

<div class="container mb-5 mt-5 ">
    <div class="row justify-content-center">
            <h1 class="text-info text-center">FANS ZONE</h1>
        <div class="col-md-12">
            <div class="card bg-info">
                <div class="card-header text-white">Create a Conversation</div>
                <div class="card-body bg-dark">
                    <form method="post" action="{{ route('post.store') }}">
                        <div class="form-group w-75">
                            <label class="label text-white">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group w-75">
                            <label class="label text-white">Fullname: </label>
                            <input type="text" name="fullname" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label text-white">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=" col-12">
    <div style="color:white;font-size:18px; text-align:right; width:65%;">powered by <a href="#" rel="noopener" target="_blank" style="color:red;">Fofx Academy </a>&nbsp;
        <a class="text-info" ><marquee width="35%" height="22px" direction="left" scrollamount="2"> Designed by FMO SCORES:<strong><i>Your Number One Online and Real-time Footbal Scores, Updates and News Centre...</i>
        </marquee></strong></a>
    </div></div>

@endsection
