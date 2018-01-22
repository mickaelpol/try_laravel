@extends('layouts.default')

@section('content')
    <div class="container">

    
        <p>
            <a class="btn btn-primary" href="{{ route('news.create') }}">
                Creer un Nouvel article
            </a>
        </p>

        @foreach($posts as $post)
            <div class="col-lg-6">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
                <p>
                    <a class="btn btn-primary" href="{{ route('news.edit', $post) }}">
                        Editer
                    </a>
                </p>
                
                {{--  bouton de validation du formulaire  --}}
                <a href="{{ route('news.destroy', $post) }}" class="btn btn-danger btn-md">Supprimer l'article</a>
            </div>
        @endforeach

    </div>


@endsection