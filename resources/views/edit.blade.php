@extends('master')
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce.min.js') }}"></script>
<script type="text/javascript">
	tinymce.init({
		selector : "textarea",
		plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages"
	}); 
</script>

<div class="container">
 <div class="col-md-12">
 <h1>Edit {{ $data->title }}</h1>
  {{ Form::model($data, array('url' => array('update', $data->id), 'method' => 'PUT')) }}
 <div class=”form-group”>
  
 {{ Form::label('title', 'Blog Title') }}
 <input required="required" type="text" name = "title" class="form-control" value="@if(!old('title')){{$data->title}}@endif{{ old('title') }}"/>
 </div>
<div class="form-group">

 {{ Form::label('description', 'Blog Content') }}
 <input required="required" type="text" name = "description" class="form-control" value="@if(!old('description')){{$data->description}}@endif{{ old('description') }}"/>

 </div>
 {{ Form::submit('Update', array('class' => 'btn btn-default')) }}
 {{ Form::close() }}
 </div>
 </div>
@stop