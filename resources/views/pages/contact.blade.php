@extends('layouts.default')

@section('title', $title)

@section('content')
    
    <h1>section contact</h1>

    <ul>
        
        @forelse ($numbers as $number)
        
            <li class="list-unstyled">
                {{ $number }}
            </li>

            @empty

            <li class="list-unstyled">Aucun chiffre dans le tableau</li>
            
        @endforelse

    </ul>


@endsection