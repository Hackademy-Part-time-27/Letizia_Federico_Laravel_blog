<x-layout title='crea articolo'>

    <div class="mt-5 m-5">
        <h1 class="text-center mb-5">Crea Articolo</h1> 
        <a href="{{route('articles.index') }}">indietro</a>
        
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

        <form action="{{ route('articles.store') }}" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf

            <div class="form-group ">
                <label for="title">titolo:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" >
            </div>
            @error('title')
                <small class="text-danger">{{$message}}</small> 
            @enderror

            <div class="form-group">
                <label for="categories">Categoria:</label>
                    @foreach ($categories as $category)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}"> 
                        <label  class="form-check-label" for="flexCheckDefault">
                            {{ $category->name }}
                        </label>
                      </div>

                    @endforeach
                </div>
            @error('categories')
                <small class="text-danger">{{ $message }}</small>  
            @enderror

            <div class="form-group">
                <label for="description">Descrizione:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }} </textarea>
            </div>
            @error('description')
                <small class="text-danger">{{ $message }}</small>    
            @enderror
            <div class="form-group">
                <label for="image">image:</label>
                <input type="file" class="form-control" id="image" name="image" rows="3"></input>
            </div>
            @error('image')
                <small class="text-danger">{{ $message }}</small>    
            @enderror

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" rows="10">{{ old('body') }} </textarea>
            </div>
            @error('body')
                <small class="text-danger">{{ $message }}</small>           
            @enderror
            <br>

            <button type="submit" class="btn btn-primary mt-3">Create Article</button>

           
        </form>
        </div>
</div>
</x-layout>