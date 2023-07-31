@extends('layouts.homeHeader')

@section('title', 'página de edição')

@section('content')


<main class="main">

    <section class="form-section">
        <form  class="form link-border" action="/academies/update/{{ $academie -> id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-label-form-div">
                <label >Nome da academia</label>
                <input type="text" placeholder="Digite o nome da academia" class="link-border" id="name" name="name" value="{{ $academie -> name}}">
            </div>
            <div class="input-label-form-div">
                <label >descrição da academia</label>
                <input type="text" placeholder="Digite a descrição da academia" class="link-border" id='description' name="description" value="{{ $academie -> description}}">
            </div>
            <button type="submit" class="link-border">editar academia</button>
        </form>
    </section>

</main>

@endsection