@extends('master')
@section('content')
    Submit here: <br /><br />
        
        
    {{Form::label('First Name')}} {{Form::text('first_name')}}
    {{Form::submit("Register", array("class"=>"btn btn-default"))}}
    {{Form::close()}}
        
        
@stop
