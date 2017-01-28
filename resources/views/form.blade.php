@extends('layouts.master')

@section('header')
    E201 - Formulari
@stop
@section('content')
    <h2>Formulari</h2>
    <h5>La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los
        animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes
        biorritmo
        s que afectan nuestro comportamiento en distintas maneras. Se ha
        comprobado estadísticamente que la energía física se comporta cíclicamente en
        periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en
        33 días. Al momento de na
        cer, cada ciclo comienza desde cero y empieza a subir en
        una fase positiva, durante la cual las energías y las capacidades son altas</h5>
    <br/>
    <form action="/result" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input name="name" type="text" class="form-control" placeholder="Nom" aria-describedby="basic-addon1">
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">d</span>
            <input name="birthday" type="text" class="form-control" placeholder="Aniversari DD-MM-AAAA" aria-describedby="basic-addon1">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop