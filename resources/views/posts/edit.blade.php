@extends('layouts.default')

@section('content')

        <h1>Editer</h1>

        {{--  Formulaire d'edition d'un article  --}}
        {!! Form::open(['method' => 'put', 'url' => route('news.update', $post)]) !!}

        {{--  Input titre  --}}
        <div class="form-group">
            {!! Form::label('title', "titre de l'article") !!}
            {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
        </div>
        
        {{--  Input slug  --}}
        <div class="form-group">
            {!! Form::label('slug', "URL") !!}
            {!! Form::text('slug', $post->slug, ['class' => 'form-control']) !!}
        </div>
        
        {{--  Input content  --}}
        <div class="form-group">
            {!! Form::label('content', "Contenu") !!}
            {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
        </div>
        
        {{--  Checkbox de mise en ligne de l'article  --}}
        <div class="form-group">
            <label>
                {!! Form::checkbox('online', 1, $post->online) !!}
                En ligne ?
            </label>
        </div>
        
        {{--  bouton de validation du formulaire  --}}
        <button class="btn btn-primary btn-lg">Editer</button>
        
        {!! Form::close() !!}
        
@endsection