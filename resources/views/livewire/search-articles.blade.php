<div>
    <div class="row">
        <div class="col-12">
            <input type="text" class="form-control" wire:model.live="search">
        </div>
        <div class="col-12 mt-5">
            <h5>Elenco Articoli</h5>

            <ul>
                @foreach ($articles as $article)
                    <li>{{ $article->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
