<x-layout title="Recupero password">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="mt-5 text-center">Recupero password</h1>
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="m-5">
        <form action="/forgot-password" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Recupera password</button>
            </div>
        </form>
    </div>
</x-layout>