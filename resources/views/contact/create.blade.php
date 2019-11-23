@extends('layout')

@section('content')




<div class="container col-lg-6 col-md-6 col-sm-12 mt-5 mb-5">
    <div class="row justify-content-center">

            <h1 class="text-info">Contact Us</h1>
        <div class="col-md-12">
                <div class="card bg-info">
                <div class="card-header text-white">Leave a Message</div>
                <div class="card-body bg-dark">
        <form action="/contact" method="POST">

    <div class="form-group text-white">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control" required/>
    <div>{{$errors->first('name')}}</div>
            </div>

            <div class="form-group text-white">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control" required/>
                <div>{{$errors->first('email')}}</div>
                        </div>

            <div class="form-group text-white">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="true">{{old('message')}}</textarea>
                <div>{{$errors->first('message')}}</div>
                </div>

                <div class="form-group">
                        <input type="submit" class="btn btn-success" />
                    </div>

                    @if ($message = Session::get('success'))

                    <div class="alert alert-success alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>

                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems sending your message.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    @csrf
                </form>

        </form>

    </div>
</div>
</div>








</div>
</div>
</div>


@endsection
