<x-layout title="Crea Categoria">
    <h1 class="m-5">Crea Categoria</h1>
    <a href="{{ route('categories.index') }}" class="text-secondary m-5">indietro</a>

    <div class="m-5">
    <form action="{{ route('categories.store') }}" method="post" class="m-5">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                @error('name')
                <small class="text-danger">{{$message}}</small> 
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crea</button>
            </div>
    </form>
</div>
</x-layout>