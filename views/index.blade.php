@extends('base')
@section('content')
    Hello {{ auth()->user()->name }}
@endsection
