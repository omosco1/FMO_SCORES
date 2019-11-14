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

@section('title','DETAILS for'.$player->name)

@section('content')

<h3 class="ml-5">Profile Page for {{$player->name}}</h3>

<div class="row mt-4">
        <div class="col-12">
    <p><strong>NAME:</strong> {{$player->name}}</p>
    <p><strong>CLUB:</strong> {{$player->club->name}}</p>
    <p><strong>FITNESS:</strong> {{$player->fitness}}</p>
            </div>
        </div>
@endsection


