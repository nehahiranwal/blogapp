@extends('master')
@section('content')
    
<div class=”container”>
 <div class=”col-md-12">
    
 
 <table class="table">
 <thead>
 <tr>
 <th>BLOG </th>
 
 </tr>
 </thead>
 <tbody>
     @foreach($homecontent as $row)
 <tr>
 <td>{{$row->title}}</td>
 <td>{{substr($row->description,0,9)}}</td>
 <td><a href="{{ url('detail/' . $row->id) }}"><div class="btn btn-primary">Read More</div></a></td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>
@stop