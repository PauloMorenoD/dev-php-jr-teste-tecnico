@extends('layouts.homeHeader')

@section('title', 'página home')

@section('content')

<main>
    <section class="create-new-academy-section">
        <p>Academias existentes</p>
        <a href="/academies/create" class="add-outline">+</a>
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
    </section>

</main>

@endsection