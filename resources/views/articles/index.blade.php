<x-layout title="tutti gli articoli">

<h1>Tutti gli articoli</h1>

<div class="mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Titolo</th>
                <th>Categoria</th>
                <th>Visibile</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as  $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->category}}</td>
                <td>@if ($article->visible)
                    <span>si</span>
                    @else
                    <span>no</span>
                    @endif
                </td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layout>