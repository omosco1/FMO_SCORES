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

@section('content')

        <div class="row mt-4">
            <div class="col-12">
            <h3 class="text-white text-left ml-5">Players List</h3>
            <a href="players/create"><p align="left"><button class="text-center rounded btn btn-outline-primary mt-5 ml-5 mr-1 p-2" type="submit" >+ Add NEW</button></p></a>
                </div>
            </div>

          @foreach($players as $player)

          <div class="row mt-4">
   <div class="card bg-dark text-light col-6 mr-5 mt-2 ml-5">
        <div class="card-body width-50%">


            <div class="col-12">
                {{$player->id}}
            </div>

                <div class="col-12">
     <a href ="/players/{{$player->id}}">
        {{$player->surname}}  {{$player->name}}</a>
     </div>

            <div class="col-12">
                            CLUB: {{$player->club->name}}
                        </div>

        <div class="col-12"><p class="text-success">
                    {{$player->fitness}}</p>
                </div>
        </div>
        </div>
        </div>
          @endforeach


<br/>
@endsection
 {{-- <form action ="players" method= "POST" class="pb-5">

<div class=" mb-4 pl-2 mt-4 form-group" >
        <label for="name">Name:</label>
        <input type="text"  value="{{old('name') }} " name="name" id="name" class="mb-2 w-50 h-25% pl-4 rounded-pill form-control" >
        <div class="text-right  w-75">{{$errors->first('name')}}</div>
    </div>
    <div class=" mb-4 pl-2 form-group" >
        <label for="surname">Surname:</label>
        <input type="text"  value="{{old('surname') }}" name="surname" id="surname" class="mb-2 w-50 h-25% pl-4 rounded-pill form-control" >
        <div class="text-right  w-75">
            {{$errors->first('surname')}}</div>
    </div>

    <div class=" mb-4 pl-2 form-group" >
        <label for="Nationality">Nationality:</label>
        <input type="text"  value="{{old('Nationality') }} " name="Nationality" id="Nationality" class="mb-2 w-50 h-25% pl-4 rounded-pill form-control" >
        <div class="text-center  w-50">{{$errors->first('Nationality')}}</div>
    </div>

    <div class=" mb-4 pl-2 form-group  " >
        <label for="Goals">Goals:</label>
        <input type="number" min="1"  value="{{old('Goals') }} " name="Goals" id="Goals" class="mb-2  w-25 h-25% pl-4 rounded-pill form-control" >
        <div class="text-center  w-50">{{$errors->first('Goals')}}</div>
    </div>

    <div class=" mb-4 pl-2 form-group" >
        <label class="g" for="height">Height:</label>
        <input type="number" min="1" max="12" value="{{old('height') }} " name="height" id="height" class="mb-2 w-25 h-25% pl-4 rounded-pill form-control" >
        <div class="text-center  w-50">{{$errors->first('height')}}</div>
    </div>

    <style>
            .g::after {
              content: " -feet";
            }
            </style>


    <div class=" mb-4 pl-2 form-group">
    <label for="age">Age:</label>
    <input type="number" min="5" name="age" id="age" class="mb-2 pl-4  w-25 h-50% rounded-pill form-control" value="{{old('age') }}">
    <div class="text-center  w-50">{{$errors->first('age')}}</div>
    </div>

    <div class=" mb-4 pl-2 mt-4 form-group" >
            <label for="jerseynumber">JerseyNumber:</label>
            <input type="number" min="1" max="99" value="{{old('jerseynumber') }} " name="jerseynumber" id="jerseynumber" class="mb-2 w-25 h-25% pl-4 rounded-pill form-control" >
            <div class="text-center  w-50">{{$errors->first('jerseynumber')}}</div>
        </div>


        <div class=" mb-5 pl-2 mt-4 form-group" >
            <div><label for="fitness">STATUS<label></div>
    <select name="fitness" id="fitness" class="form-control mb-2 w-25 h-25% pl-4 ">
                <option value=""disabled>Player Availability</option>
                <option value="1">FIT</option>
                <option value="0">NOT FIT</option>
            </select>
        </div>

        <div class=" mb-5 pl-2 mt-4 form-group" >
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
   </form> --}}







