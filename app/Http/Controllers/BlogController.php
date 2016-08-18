<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\blog;

class BlogController extends Controller
{
     public function index(){
        $data=blog::all(); 
       return view('blog',compact('data'));
       
   
      }
      public function create(){
        return view('create');  
      }
      public function store(Request $request)
 { 
 $this->validate($request, [
        'title'    => 'required',
       
    ]);

    $blog = new blog;
    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->updated_at = date("Y-m-d H:i:s");
    $blog->created_at = date("Y-m-d H:i:s");
    $blog->save();
   
    return Redirect('/blog');
}
public function edit(Request $request,$id)
 {
    
     $data = blog::find($id);
     return view('edit', compact('data'));
 }
  public function update(Request $request,$id)
 { 
 $this->validate($request, [
        'title'    => 'required',
       
    ]);

    $blog = blog::find($id);
    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->updated_at = date("Y-m-d H:i:s");
    $blog->created_at = date("Y-m-d H:i:s");
    $blog->save();
   
    return Redirect('/blog');
}
}
