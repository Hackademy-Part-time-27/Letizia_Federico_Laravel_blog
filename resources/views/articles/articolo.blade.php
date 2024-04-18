<x-layout title='Articolo'>

    <div class="container mt-5 text-center bg-primary-subtle border border-primary border border-5 p-5">
        <h1>{{ $articolo['title'] }}</h1>

        <div class="my-3">
            Autore: {{ $articolo->user->name }} <br>
            <a href="Mailto:{{ $articolo->user->email }}">{{ $articolo->user->email }}</a>
        </div>

        <p class="p-2">Categoria: {{ $articolo->category->name }}</p>
        <p class="p-2">Descrizione: {{ $articolo['description'] }}</p>
        <p class="p-2">body: {{ $articolo['body'] }}</p>

        <a href="{{ route('articoli') }}" class="btn btn-primary">Torna agli articoli</a>
    </div>

   


</x-layout>
