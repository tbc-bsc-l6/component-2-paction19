<?php

namespace App\Http\Controllers;
use App\Models\Game;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function GameView(){
        $data['allData'] = Game::all();
    	return view('game.game_view',$data);

    }

    public function GameAdd(){
    	return view('game.game_add');
    }

    public function GameStore(Request $request){

        $data = new Game();
        $data->developer = $request->developer;
        $data->title = $request->title;
        $data->pegi = $request->pegi;
        $data->price = $request->price;
        
        $data->save();

        $notification = array(
            'message' => 'Game Inserted Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('game.view')->with($notification);

    }

    public function GameEdit($id){
        $editData = Game::find($id);
        return view('game.game_edit',compact('editData'));
    }

    public function GameUpdate(Request $request,$id){

        $data = Game::find($id);
           
        $data->developer = $request->developer;
        $data->title = $request->title;
        $data->pegi = $request->pegi;
        $data->price = $request->price;
           $data->save();
   
           $notification = array(
               'message' => 'Game Updated Successfully',
               'alert-type' => 'success'
           );
   
           return redirect()->route('game.view')->with($notification);
       }


       public function GameDelete($id){
        $user = Game::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Game Deleted Successfully',
            'alert-type' => 'info'
        );

   return redirect()->route('game.view')->with($notification);

    }
/* game user view*/
    public function GameUserView(){
        $data['allData'] = Game::all();
    	return view('user.game_view',$data);

    }
}
