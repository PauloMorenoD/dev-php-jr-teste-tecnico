@extends('layouts.homeHeader')

@section('title', 'página home')

@section('content')
<form action="/home" class="search-form" method="GET">
    <input type="text" placeholder="digite uma busca..." name="search">
    <button type="submit">pesquisar</button>
</form>
<main>
    <section class="create-new-academy-section">
        <p>Academias existentes</p>
        <a href="/academies/create" class="add-outline">
        <ion-icon name="add-outline"></ion-icon>
        </a>
    </section>
    <section class="home-academies-section">

        @foreach($academies as $academie)

        <div class="home-academies-div">
            <div class="home-academies-info-icon-div">
                <ion-icon name="home-outline" class="icon"></ion-icon>
                <div class=" academy-info-div">
                    <p>{{$academie -> name}}</p>
                    <p>{{$academie -> description}}</p>
                </div>
            </div>

            <div class="div-edit-delete">
                <ion-icon name="pencil-outline"></ion-icon>
                <ion-icon name="trash-outline"></ion-icon>
            </div>
        </div>
        @endforeach
        @if(count($academies) >= 10)
            <div class="pagination-div">
                {{ $academies->links() }}
            </div>
        @endif
        @if(count($academies) == 0 && $search)
            <p class="not-found">Nenhum item encontrado! <a href="/home">ver todos</a></p>
        @elseif(count($academies) == 0)
            <p class="not-found">não há itens cadastrados</p>    
        @endif
    </section>
</main>

@endsection