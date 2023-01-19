<?php

namespace App\Http\Controllers;
use App\Models\Cd;

use Illuminate\Http\Request;

class CdController extends Controller
{
    public function CdView(){
        $data['allData'] = Cd::all();
    	return view('cd.cd_view',$data);

    }

    public function CdAdd(){
    	return view('cd.cd_add');
    }

    public function CdStore(Request $request){

        $data = new Cd();
        $data->artist = $request->artist;
        $data->title = $request->title;
        $data->duration = $request->duration;
        $data->price = $request->price;
        
        $data->save();

        $notification = array(
            'message' => 'Cd Inserted Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('cd.view')->with($notification);

    }

    public function CdEdit($id){
        $editData = Cd::find($id);
        return view('cd.cd_edit',compact('editData'));
    }

    public function CdUpdate(Request $request,$id){

        $data = Cd::find($id);
        $data->artist = $request->artist;
        $data->title = $request->title;
        $data->duration = $request->duration;
        $data->price = $request->price;
           $data->save();
   
           $notification = array(
               'message' => 'Cd Updated Successfully',
               'alert-type' => 'success'
           );
   
           return redirect()->route('cd.view')->with($notification);
       }

       public function CdDelete($id){
        $user = Cd::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Cd Deleted Successfully',
            'alert-type' => 'info'
        );

   return redirect()->route('cd.view')->with($notification);

    }

    public function CdUserView(){
        $data['allData'] = Cd::all();
    	return view('user.cd_view',$data);

    }

    public function CdUserDashboard(){
        return view('user.body.index');
    }
}
