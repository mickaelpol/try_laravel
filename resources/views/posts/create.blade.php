@extends('layouts.default')

@section('content')

        <h1>Ajouter un nouvel article</h1>

        {{--  Formulaire d'edition d'un article  --}}
        {!! Form::open(['url' => route('news.store')]) !!}

        {{--  Input titre  --}}
        <div class="form-group">
            {!! Form::label('title', "titre de l'article") !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        
        {{--  Input slug  --}}
        <div class="form-group">
            {!! Form::label('slug', "URL") !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>
        
        {{--  Input content  --}}
        <div class="form-group">
            {!! Form::label('content', "Contenu") !!}
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
        
        {{--  bouton de validation du formulaire  --}}
        <button class="btn btn-primary btn-lg">Creer</button>
        
        {!! Form::close() !!}
        
@endsection