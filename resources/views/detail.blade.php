@extends('master')
@section('title', 'User Detail')
@section('content')
    
<div class="container">
    <div class="row">
 <div class="col-md-12">

    <div class="post_sec">
<h1 class="inner_heading inner_heading2">POST DETAIL</h1>
</div>
  <div class="row">
      <div class="post_sec">
        <div class="col-md-10 col-md-offset-1">
          <div class="article">
             
@foreach($post as $row)
<h1>{{$row->title}}</h1>
<ul class="im_meta_title">
              <li><a href="#"><i class="fa fa-calendar"></i> Posted on {{$row->updated_at}}</a></li>
             
            </ul>

<p>{{$row->description}}<p>
@endforeach
<div class="detail_sec">
    <div class="container">
 <h1>Comments</h1>
 <ul>
 @foreach($comment as $result)
  <li>{{$result->name}}
      <br>
 <p>{{$result->comment}}</p></li>

  @endforeach
  </ul>
  </div>
 </div
 
 
 </div>
 </div>
 </div>
     
     
@stop