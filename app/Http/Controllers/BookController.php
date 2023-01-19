<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function BookView(){
        $data['allData'] = Book::all();
    	return view('book.book_view',$data);

    }

    public function BookAdd(){
    	return view('book.book_add');
    }

    public function BookStore(Request $request){

        $data = new Book();
        $data->author = $request->author;
        $data->title = $request->title;
        $data->pages = $request->pages;
        $data->price = $request->price;
        
        $data->save();

        $notification = array(
            'message' => 'Book Inserted Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('book.view')->with($notification);

    }

    public function BookEdit($id){
        $editData = Book::find($id);
        return view('book.book_edit',compact('editData'));
    }

    public function BookUpdate(Request $request,$id){

        $data = Book::find($id);
           
        $data->author = $request->author;
        $data->title = $request->title;
        $data->pages = $request->pages;
        $data->price = $request->price;
           $data->save();
   
           $notification = array(
               'message' => 'Book Updated Successfully',
               'alert-type' => 'success'
           );
   
           return redirect()->route('book.view')->with($notification);
       }


       public function BookDelete($id){
        $user = Book::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Book Deleted Successfully',
            'alert-type' => 'info'
        );

   return redirect()->route('book.view')->with($notification);

    }

    /* book user view*/
    public function BookUserView(){
        $data['allData'] = Book::all();
    	return view('user.book_view',$data);

    }

}
