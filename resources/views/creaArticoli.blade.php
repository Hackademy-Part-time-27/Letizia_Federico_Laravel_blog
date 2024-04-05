<x-layout title='crea articolo'>

    <div class="mt-5 m-5">
        <h1 class="text-center mb-5">Crea Articolo</h1>

        <x-succes />

        <form action="{{ route('storeArticoli') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group ">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" >
            </div>
            @error('title')
                <small class="text-danger">{{$message}}</small> 
            @enderror

            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
            </div>
            @error('category')
                <small class="text-danger">{{ $message }}</small>  
            @enderror

            <div class="form-group">
                <label for="description">Description:</label>
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

            @if (session('success'))
                <div class="alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
        </form>
        </div>
</div>
</x-layout>