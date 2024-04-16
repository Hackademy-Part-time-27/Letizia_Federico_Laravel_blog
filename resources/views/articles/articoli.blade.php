 <x-layout title='Articoli'>

    <div class="container mt-5">
        <h1 class="text-center">Articoli</h1>
        @if(empty($articoli))
            <p>Nessun articolo disponibile</p>
        @else
            @foreach($articoli as $articolo)
                <x-card
                    :title="$articolo->title"
                    :id="$articolo->id" 
                    :category="$articolo->category"
                    :description="$articolo->description"
                    :route="route('articolo', $articolo->id)"/>
            @endforeach
        @endif
    </div>

</x-layout>
    
