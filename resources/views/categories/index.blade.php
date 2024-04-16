<x-layout title="elenco categorie">
    <h1 class="m-5 text-center">Elenco Categorie</h1>
    
    <div class="text-end m-5">
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Crea Categorie</a>
    </div>
    
    @if (session()->has('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <table class="table table-bordered m-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary">Modifica</a>
                        <form class="d-inline" action="{{ route('categories.destroy', $category )}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>