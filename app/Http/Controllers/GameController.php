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

    // public function viewGames(Request $request) {
    //     $game=Game::all();
    //     return view('dashboard.teacher.manage-games')->with('viewGames',$game);
    // }

    public function viewActivities(Request $request) {
        $data=Game::all();
        return view('dashboard.student.manage-games')->with('game',$data);
    }    


    public function editGames($id){
        $data = DB::table('games')->where('id',$id)->first();
        return view('dashboard.teacher.edit-games', compact('data'));
    }


    public function updateGame(Request $request){

        DB::table('games')->where('id', $request->id)->update([
            'gametype'=>$request->gameType,
            'game'=>$request->game,
            'answerA'=>$request->answerA,
            'answerB'=>$request->answerB,
            'answerC'=>$request->answerC,
            'answerD'=>$request->answerD,
            'correctAnswer'=>$request->correctAnswer,

        ]);
        return redirect()->to('/teacher/manage-games')->with('message', 'The task was successfully updated.');
    }

    public function deleteGame($id){
        DB::table('games')->where('id',$id)->delete();
        return back()->with('deleteGame')->with('message', 'The game was successfully deleted.');
    }

    public function viewGames(Request $request) {
        // $data=Game::all()->inRandomOrder()    
        //                 ->limit(5) 
        //                 ->get();
        // return view("dashboard.student.view-games",compact('game'));


        $game = DB::table('games')
        ->select('games.id',
                'games.gametype',
                'games.game', 
                'games.answerA', 
                'games.answerB',
                'games.answerC',
                'games.answerD')
        ->inRandomOrder()    
        ->limit(5) 
        ->get();

        return view("dashboard.student.view-games",compact('game'));

    } 

    public function addanswer(Request $request){

        $q_id = $request->q_id;
        $game_type = $request->game_type;
        $auth_id = $request->auth_id;
        $q_answer = $request->q_answer;


        for($i=0; $i<count($q_id);$i++){

            $datasave = [
                'question_id'=>$q_id[$i],
                'game_type'=>$game_type[$i],
                'student_id'=>$auth_id[$i],
                'student_answer'=>$q_answer[$i],
            ];

            DB::table('student_answers')->insert($datasave);

            $ans = DB::table('games')
            ->select('games.correctAnswer')
            ->where('id', '=', $q_id[$i]) 
            ->where('correctAnswer', '=', $q_answer[$i])    
            ->first();

            if(!$ans){
                DB::table('student_answers')
                ->where('question_id', $q_id[$i])
                ->where('student_id', $auth_id[$i])
                ->update([
                    'mark' => 0,
                ]);
            } else {
                DB::table('student_answers')
                ->where('question_id', $q_id[$i])
                ->where('student_id', $auth_id[$i])
                ->update([
                    'mark' => 1,
                ]);
            }

        }
        return redirect()->to('/student/my-result'); 
    }

}

