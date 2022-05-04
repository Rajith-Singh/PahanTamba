<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function storeGame(Request $request) {

        $game = new Game;

        $game->gametype=$request->gameType;
        $game->game=$request->game;
        $game->answerA=$request->answerA;
        $game->answerB=$request->answerB;
        $game->answerC=$request->answerC;
        $game->answerD=$request->answerD;
        $game->correctAnswer=$request->correctAnswer;

        $game->save();

        return back()->with('msg', 'The game was successfully added.');
        //dd($request->all());
    }

}