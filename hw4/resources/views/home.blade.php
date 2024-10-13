@extends('layouts.default')

@section('content')
    <p>{{$name}}</p>
    @if($age > 18)
        <p>{{$age}}</p>
    @else
        <p>Ограничение. Возраст не соответствует требованиям!</p>
    @endif
    <p>{{$position}}</p>
    <p>{{$address}}</p>
@stop