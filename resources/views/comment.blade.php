@extends('master')
@section('content')

<div class="container">
 <div class=”col-md-12">
 <h1>Write Comment </h1>
 
 {{ Form::open(array('url' => array('storecomment',$_GET['id']), 'role' => 'form')) }}
 
 <div class="form-group">
  {{ Form::label('name', 'Your Name') }}
 {{ Form::text('name','', array('class' => 'form-control', 'placeholder'=> 'Your Name')) }}
 </div>
 <div class="form-group">
     {{ $errors->first("comment") }}
  {{ Form::label('comment', 'Comment') }}
 {{ Form::text('comment','', array('class' => 'form-control', 'placeholder'=> 'comment')) }}
 </div>
 {{ Form::submit('Comment', array('class' => 'btn btn-default')) }}
 
 {{ Form::close() }}
 </div>
 </div>
@stop
