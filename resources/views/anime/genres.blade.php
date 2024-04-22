<x-layout title="Anime-generi">
    <div class="m-5">
        <h1>Anime-generi</h1>

        <div class="mt-5">
            <ul class="list-unstyled">
                @foreach($genres as $genre)
                <li>
                    <a href="{{ route('anime', $genre['mal_id']) }}">{{ $genre['name'] }} ({{ $genre['count'] }})</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>