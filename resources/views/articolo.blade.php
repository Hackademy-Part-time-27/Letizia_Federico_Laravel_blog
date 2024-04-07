<x-layout title='Articolo'>

    <div class="container mt-5 text-center bg-primary-subtle border border-primary border border-5 p-5">
        <h1>{{ $articolo['title'] }}</h1>
        <p class="p-2">id: {{ $articolo [ 'id' ]}} </p>
        <p class="p-2">Categoria: {{ $articolo['category'] }}</p>
        <p class="p-2">Descrizione: {{ $articolo['description'] }}</p>
        <a href="{{ route('articoli') }}" class="btn btn-primary">Torna agli articoli</a>
    </div>

   


</x-layout>
