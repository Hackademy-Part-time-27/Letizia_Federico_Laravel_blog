<div>
    <div class="row">
        <div class="col-12">
            <input type="text" class="form-control" placeholder="Cerca Utenti" wire:model.live="search">
        </div>
        <div class="col-12 mt-5">
            <h5>Elenco Utenti</h5>

            <ul>
                @foreach ($users as $user)
                    <li>{{ $user->name }} <br> ({{$user->email}})</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
