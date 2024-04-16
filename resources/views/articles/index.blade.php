<x-layout title="tutti gli articoli">

<h1 class="text-center mt-5">Tutti gli articoli</h1>
<a href="{{'articles/create'}}">
<button class="m-3">indietro</button>
</a>
<div class="mt-5">
    <table class="table table-bordered text-center">
        <thead>
            <tr class="text-center">
                <th>#</th>
                <th>Titolo</th>
                <th>Categoria</th>
                <th>Visibile</th>
                <th>modifica</th>
                <th>elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as  $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>

                @if( $article->category_id )
                <td></td>
                @else
                <td>{{ $article->category->name }}</td>
                @endif

                <td>
                    @if ($article->visible)
                    <span>si</span>
                    @else
                    <span>no</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-secondary">modifica</a>
                </td>
                <td>
                    <form action="{{ route('articles.destroy', $article) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layout>