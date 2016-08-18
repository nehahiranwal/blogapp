@extends('master')
@section('content')

<div class="container">
 <div class=”col-md-12">
 <h1>Write New Blog </h1>
 {{ Form::open(array('url' => '/blog', 'role' => 'form')) }}
 <div class=”form-group”>
  {{ $errors->first('title') }}
 {{ Form::label('title', 'Blog Title') }}
 {{ Form::text('title','', array('class' => 'form-control', 'placeholder'=> 'Title')) }}
 </div>
<div class="form-group">
{{ $errors->first("description") }}
 
 {{ Form::label('description', 'Blog Content') }}
 {{ Form::text('description','', array('class' => 'form-control', 'placeholder'=> 'Discription')) }}
 </div>
 {{ Form::submit('Publish Your Blog Post', array('class' => 'btn btn-default')) }}
 {{ Form::close() }}
 </div>
 </div>
@stop
