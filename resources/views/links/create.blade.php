@extends('layouts.default')

@section('content')

<h1>Raccourcir un nouveau lien</h1>

<form action="{{ route('link.store') }}" method="post">

<div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="url">Lien à raccourcir</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="http://.....">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-md btn-primary">Raccourcir</button>
</div>

</form>

@stop