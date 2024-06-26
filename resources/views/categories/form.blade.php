<x-layout :title="$title">
    <h1 class="m-5">{{ $title }}</h1>
    <a href="{{ route('categories.index') }}" class="text-secondary m-5">indietro</a>

    <div class="m-5">

    @if (session()->has('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    
    <form action="{{ $action }}" method="post" class="m-5">
        @csrf

        @if ($category->id)
            @method("PUT")
        @endif

        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{old('name', $category->name)}}">
                @error('name')
                <small class="text-danger">{{$message}}</small> 
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">{{ $button }}</button>
            </div>
    </form>
</div>
</x-layout>