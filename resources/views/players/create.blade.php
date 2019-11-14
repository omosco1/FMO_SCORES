{{-- <ol>
    <li>Salah</li>
    <li>Mane</li>
    <li>Aguero</li>
    <li>Pogba</li>
</ol> --}}

{{-- <ul>
    <li><a href="/">Home</a></li>
    <li><a href="players">Players</a></li>
    <li><a href="clubs">CLUB</a></li>
    <li><a href="games">Games</a></li>
</ul> --}}
@extends('layout')

@section('title','ADD NEW PLAYER')

@section('content')

<h3 class="ml-5 text-primary">Create a New Player</h3>

 <form action ="/players" method= "POST" class="pb-5">

<div class=" mb-4 pl-2 mt-4 form-group text-white" >
        <label for="name ">Name:</label>
        <input type="text"  value="{{old('name') }} " name="name" id="name" class="mb-2 w-50 h-25% pl-4 rounded-pill form-control" >
        <div class="text-right  w-50 text-warning">{{$errors->first('name')}}</div>
    </div>
    <div class=" mb-4 pl-2 form-group text-white" >
        <label for="surname">Surname:</label>
        <input type="text"  value="{{old('surname') }}" name="surname" id="surname" class="mb-2 w-50 h-25% pl-4 rounded-pill form-control" >
        <div class="text-right  w-50 text-warning">
            {{$errors->first('surname')}}</div>
    </div>

    <div class=" mb-4 pl-2 form-group text-white" >
        <label for="Nationality">Nationality:</label>
        <input type="text"  value="{{old('Nationality') }} " name="Nationality" id="Nationality" class="mb-2 w-50 h-25% pl-4 rounded-pill form-control" >
        <div class="text-right  w-50 text-warning">{{$errors->first('Nationality')}}</div>
    </div>

    <div class=" mb-4 pl-2 form-group text-white" >
        <label for="Goals">Goals:</label>
        <input type="number" min="1"  value="{{old('Goals') }} " name="Goals" id="Goals" class="mb-2  w-25 h-25% pl-4 rounded-pill form-control" >
        <div class="text-right  w-25 text-warning">{{$errors->first('Goals')}}</div>
    </div>

    <div class=" mb-4 pl-2 form-group text-white" >
        <label class="g" for="height">Height:</label>
        <input type="number" min="1" max="12" value="{{old('height') }} " name="height" id="height" class="mb-2 w-25 h-25% pl-4 rounded-pill form-control" >
        <div class="text-right  w-25 text-warning">{{$errors->first('height')}}</div>
    </div>

    <style>
            .g::after {
              content: "  in feet";
            }
            </style>


    <div class=" mb-4 pl-2 form-group text-white">
    <label for="age">Age:</label>
    <input type="number" min="5" name="age" id="age" class="mb-2 pl-4  w-25 h-50% rounded-pill form-control" value="{{old('age') }}">
    <div class="text-right  w-25 text-warning">{{$errors->first('age')}}</div>
    </div>

    <div class=" mb-4 pl-2 mt-4 form-group text-white" >
            <label for="jerseynumber">JerseyNumber:</label>
            <input type="number" min="1" max="99" value="{{old('jerseynumber') }} " name="jerseynumber" id="jerseynumber" class="mb-2 w-25 h-25% pl-4 rounded-pill form-control" >
            <div class="text-right  w-25 text-warning">{{$errors->first('jerseynumber')}}</div>
        </div>


        <div class=" mb-5 pl-2 mt-4 form-group text-white" >
            <div><label for="fitness">STATUS<label></div>
    <select name="fitness" id="fitness" class="form-control mb-2 w-25 h-25% pl-4 ">
                <option value=""disabled>Player Availability</option>
                <option value="1">FIT</option>
                <option value="0">NOT FIT</option>
            </select>
        </div>

        <div class=" mb-5 pl-2 mt-4 form-group text-white" >
            <div><label for="club_id">CLUB<label></div>
            <select name="club_id" id="club_id" class="form-control mb-2 w-25 h-25% pl-4 ">

                @foreach ($clubs as $club)

            <option value="{{$club->id}}">{{$club->name}}</option>

                @endforeach
            </select>
        </div>


        <p align="left">
            <button class="text-center rounded btn btn-outline-primary mt-5 ml-2 mr-1 p-2" type="submit" >+ADD NEW PLAYER</button>
            @csrf
   </form>



@endsection




