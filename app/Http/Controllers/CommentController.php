<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\blog;
use App\comment;

class CommentController extends Controller
{
     public function create(){
          $data=blog::all(); 
        return view('comment',compact('data'));  
      }
    public function store(Request $request,$id){ 
         $this->validate($request, [
        'comment'    => 'required',
         ]);
    $comment = new comment;
    $comment->post_id = $id;
    $comment->name = $request->name;
    $comment->comment = $request->comment;
    $comment->updated_at = date("Y-m-d H:i:s");
    $comment->created_at = date("Y-m-d H:i:s");
    $comment->save();
   
    return Redirect('/blog');
}
}
