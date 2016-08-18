@extends('master')
@section('content')
    
<div class=”container”>
 <div class=”col-md-12">
    
 <div class="pull-right">
    @if(Auth::check())  welcome {{ Auth::user()->name }} | <a href="/logout">Logout</a>@else<a href="/login">Sign in</a>@endif
<a href="/create"><div class="btn btn-success">
Create New Blog Post</div></a>
 </div>
 <table class="table">
 <thead>
 <tr>
 <th>ID</th>
 <th>BLOG TITLE</th>
 <th>BLOG Content</th>
 <th>EDIT BLOG</th>
 <th>Comment</th>
 </tr>
 </thead>
 <tbody>
     @foreach($data as $row)
 <tr>
 <td>{{$row->id}}</td>
 <td>{{$row->title}}</td>
 <td>{{$row->description}}</td>
 <td><a href="{{ url('edit/' . $row->id) }}"><div class="btn btn-primary">Edit Blog</div></a></td>
 <td><a href="{{ url('comment/?id=' . $row->id) }}"><div class="btn btn-danger">Comment</div></a></td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>
@stop