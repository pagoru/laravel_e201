@extends('layouts.master')

@section('header')
    E201 - Resultat
@stop
@section('content')
    <h2>Biorritmes</h2>
    <h3><?php echo $name." [".$birthday."] ".$days;?> dias</h3>
    <br/><br/>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $e_physical;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $e_physical;?>%;">
        </div>
    </div>
    <h4>Energia física <?php echo $e_physical;?>%</h4>
    <br/><br/>
    <div class="progress">
        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $e_emotional;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $e_emotional;?>%;">
        </div>
    </div>
    <h4>Energia emocional <?php echo $e_emotional;?>%</h4>
    <br/><br/>
    <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $e_intellectual;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $e_intellectual;?>%;">
        </div>
    </div>
    <h4>Energia intelectual <?php echo $e_intellectual;?>%</h4>
    <br/><br/>
    <a href="/form">Retornar al formulari</a>
@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop