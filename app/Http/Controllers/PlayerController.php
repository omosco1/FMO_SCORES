<?php

namespace App\Http\Controllers;

use App\Club;
use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
  public function index(){
    // $players=[
    //     'Salah',
    //     'Aguero',
    //     'Mane',
    //     'Rapheal Augustine'
    // ];
    //  $fitplayers =PLayer::fit()->get();
    //  $notfitplayers =PLayer::unfit()->get();

    $players = Player::all();

    // $players = Player::all();
    // dd($players);

  return view('players.index',compact('players'));
  }

  public function create()
    {
        $clubs = Club::all();

        return view ('players.create', compact('clubs'));
    }



  public function store()
  {
      $data = request()->validate([
        'jerseynumber'=> 'required',
        'name'=> ['required', 'min:2','string', 'max:255', 'unique:users', 'alpha_dash'],
        'surname'=> ['required', 'min:2','string', 'max:255', 'alpha_dash'],
        'age'=> 'required',
        'height'=> 'required',
        'Nationality'=> ['required', 'min:2','string', 'max:255',  'alpha_dash'],
        'Goals'=> 'required',
        'fitness'=> 'required',
        'club_id'=> 'required',
      ]);
    //   dd($data);
     Player::create($data);


    //  $player =new Player();
    //  $player->jerseynumber =request('jerseynumber');
    //  $player->name =request('name');
    //  $player->surname =request('surname');
    //  $player->age =request('age');
    //  $player->height =request('height');
    //  $player->Nationality =request('Nationality');
    //  $player->Goals =request('Goals');
    //  $player->fitness =request('fitness');
    //  $player->save();
     return redirect('players');
  }

  public function show($player )
  {
        $player =Player::find($player);
        return view('players.show',compact('player'));
  }
}
