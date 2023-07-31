@extends('layouts.homeHeader')

@section('title', 'página de login')

@section('content')


<main class="main">

    <section class="form-section">
        <form  class="form link-border" action="/create" method="POST">
            @csrf
            <div class="input-label-form-div">
                <label >Nome da academia</label>
                <input type="text" placeholder="Digite o nome da academia" class="link-border" id="name" name="name">
            </div>
            <div class="input-label-form-div">
                <label >descrição da academia</label>
                <input type="text" placeholder="Digite a descrição da academia" class="link-border" id='description' name="description">
            </div>
            <button type="submit" class="link-border">criar academia</button>
        </form>
    </section>

</main>

@endsection