<x-layout :title="$anime['title']">
    <div class="m-5">
        <h1 class="m-5">{{ $anime['title'] }}</h1>
        <h2 class="mt-5 ms-5">{{ $anime['title_japanese'] }}</h2>

        <div class="ms-5">
            <iframe width="560" height="315" src="{{ $anime['trailer']['embed_url']}}"></iframe>
        </div>

        <div class="ms-5">
            Punteggio: <strong>{{ $anime['score'] }}</strong>
        </div>
    </div>
</x-layout>