<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\blog;
class HomeController extends Controller
{
   public function home(){
     
   $homecontent=DB::table('blog')->get();
   
   return view('home')->with('homecontent',$homecontent);
       
   }
   public function detail($id)
 {
     // $comment =  comment::with('post_id')->get()->find($id);
   $comment =  DB::table('comment')->where('post_id', $id)->get(); 
   $post =  DB::table('blog')->where('id',$id)->get();  
   return view('detail')->with('post',$post)->with('comment',$comment);
 }
}
