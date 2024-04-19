<x-layout title='Modifica articolo'>
    
    <div class="mt-5 m-5">
        <h1 class="text-center mb-5">Modifica Articolo</h1> 
        <a href="{{route('articles.index') }}">indietro</a>
        
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

        <form action="{{ route('articles.update', $article) }}" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            
            @method('PUT')

            <div class="form-group ">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}" >
            </div>
            @error('title')
                <small class="text-danger">{{$message}}</small> 
            @enderror

            <div class="form-group">
                <label for="categories">Categoria:</label>
                    @foreach ($categories as $category)
                    <div class="form-check">
                        <input class="form-check-input" @checked($article->categories->contains($category->id)) type="checkbox" name="categories[]" value="{{ $category->id }}"> 
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
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $article->description) }} </textarea>
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
                <textarea class="form-control" id="body" name="body" rows="10">{{ old('body', $article->body) }} </textarea>
            </div>
            @error('body')
                <small class="text-danger">{{ $message }}</small>           
            @enderror
            <br>

            <button type="submit" class="btn btn-primary mt-3">Modifica Articolo</button>

           
        </form>
        </div>
</div>
</x-layout>