<x-layout title="tutti gli articoli">

<h1 class="text-center mt-5">Tutti gli articoli</h1>
<a href="{{'articoli/crea'}}">
<button class="m-3">indietro</button>
</a>
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