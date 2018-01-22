@extends('layouts.default')

@section('content')

<h1 class="alert alert-success">Bravo</h1>

<p>
    <a href="{{ action('LinksController@show', ['id' => $link->id]) }}" class="btn btn-primary">
        {{ route('link.show', $link) }}
    </a>
</p>

@stop