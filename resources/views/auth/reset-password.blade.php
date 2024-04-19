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
        <form action="/reset-password" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <input type="hidden" name="email" value="{{ old('email', request()->email) }}">
            <!-- <div class="row g-3">
                <div class="col-12">
                    <label for="email">Email</label>
                    
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div> -->

            <div class="row g-3 mt-3">
                <div class="col-12">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row g-3 mt-3">
                <div class="col-12">
                    <label for="password_confirmation">Conferma password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
            </div>


            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Aggiorna password</button>
            </div>
        </form>
    </div>
</x-layout>