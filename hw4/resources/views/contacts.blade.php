@extends('layouts.default')

@section('content')
    <p>{{$address}}</p>
    <p>{{$post_code}}</p>
    <p>{{$phone}}</p>
    @if($email)
        <p>{{$email}}</p>
    @else
        <p>Не введен адрес электронной почты!</p>
    @endif
@stop