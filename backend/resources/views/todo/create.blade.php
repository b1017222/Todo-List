@extends('todo/design')
@section('content')
@include('todo/test')
@include('todo/form', ['target' => 'store'])
@endsection