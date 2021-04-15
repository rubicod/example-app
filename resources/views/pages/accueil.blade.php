@extends('app')

@section('title', 'Hello city')

@section('content')
     <p> It's currently {{date('h:i A')}}</p>
    
@endsection