@extends('layouts.master')
@section('content')
    <h1>{{ $task->title }}</h1>
    <article>
        {{ $task->body }}
    </article>

    <p>{{ link_to('/tasks', 'Go Back', array('class'=>'btn btn-default') )}}</p>
@stop