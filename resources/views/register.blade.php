@extends('layouts.main')

@section('title', 'página de registro')

@section('content')


<main class="main">
    <section class="form-section">
        <form class="form link-border" action="/register" method="POST">
            @csrf
            <div class="input-label-form-div">
                <label>Nome</label>
                <input type="text" placeholder="Digite seu nome" class="link-border" id='name' name="name" required>
            </div>
            <div class="input-label-form-div">
                <label>Email</label>
                <input type="email" placeholder="Digite seu email" class="link-border" id="email" name="email" required>
            </div>
            <div class="input-label-form-div">
                <label>Senha</label>
                <input type="text" placeholder="Digite sua senha" class="link-border" id="password" name="password" required>
            </div>

            <button type="submit" class="link-border">Cadastrar-se</button>
        </form>
    </section>
</main>

@endsection