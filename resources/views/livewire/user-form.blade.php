<div class="rounded shadow-sm p-3">
    @if($userId)
    <h4>Modifica Utente</h4>
    @else
    <h4>Crea un nuovo Utente</h4>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <form wire:submit="submit" class="mt-4">
        <div class="row g-3">
            <div class="col-12">
                <label for="name">nome</label>
                <input type="text" id="name" class="form-control" wire:model="name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" wire:model="email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12">
                <label for="password">password</label>
                <input type="password" id="password" class="form-control" wire:model="password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12">
                <label for="photo">Foto</label>
                <input type="file" id="photo" class="form-control" wire:model="photo">
                @error('photo')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                @if($photo)
                <div class="mt-2">
                    <div class="text-end">
                        <button type="button" wire:click="removePhoto" class="btn btn-outline-secondary">X</button>
                    </div>
                    <img src="{{ $photo->temporaryUrl() }}" alt="" class="img-fluid">
                </div>
                @endif
            </div>
            <div class="col-12">
                @if($userId)
                <button type="submit" class="btn btn-primary mb-3">Modifica Utente</button>
                <button type="button" wire:click="userReset" class="btn btn-warning ms-auto">Crea Utente</button>
                @else
                <button type="submit" class="btn btn-primary">Crea Utente</button>
                @endif
            </div>
        </div>
    </form>
    


</div>
