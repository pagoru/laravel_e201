@extends('layouts.master')

@section('header')
    E201 - error
@stop
@section('content')
    <h2>Error!</h2>
    <h4><?php echo $error;?></h4>
    <br/><br/>
    <a href="/form">Retornar al formulari</a>
@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop