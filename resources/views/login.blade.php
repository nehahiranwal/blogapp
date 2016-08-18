@extends('master')
@section('title', 'Login')
@section('content')
   <style type=”text/css”>
 .login-form {
 width: 248px;
 margin: 0 auto;
 }
 .container{
     text-align:center;
 }
 .login-form{
     text-align:center;
     border: 1px solid #ccc;
 }
 
 </style>  
 <div class="container">
     
 {{ Form::open(array('/login', 'role' => 'form', 'class' => 'login-form')) }}
 <h1>Login Form</h1>
 <div class="form-group">
     
     {{ $errors->first('email') }}
 {{ Form::label('email', 'Email Address') }}
 {{ Form::text('email','', array('class' => 'form-control', 'placeholder'=> 'Email')) }}
 </div>
 <div class="form-group">
     {{ $errors->first('password') }}
 {{ Form::label('passowrd', 'Password') }}
 {{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'Password')) }}
 </div>
 {{ Form::submit('Log In') }}
 {{ Form::close() }}
 
 </div>
@stop