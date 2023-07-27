@extends('layouts.main')

@section('title', 'página de registro')

@section('content')

<main class="main">
    <section class="form-section">
        <form action="" class="form link-border">

            <div class="input-label-form-div">
                <label >Nome</label>
                <input type="text" placeholder="Digite seu nome" class="link-border">
            </div>
            <div class="input-label-form-div">
                <label >Email</label>
                <input type="text" placeholder="Digite seu email" class="link-border">
            </div>
            <div class="input-label-form-div">
                <label >Senha</label>
                <input type="text" placeholder="Digite sua senha" class="link-border">
            </div>

            <button class="link-border">Cadastrar-se</button>
        </form>
    </section>
</main>

@endsection