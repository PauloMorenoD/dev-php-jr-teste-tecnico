@extends('layouts.main')

@section('title', 'página de login')

@section('content')


<main class="main">
    <section class="form-section">
        <form action="" class="form link-border">
            <div class="input-label-form-div">
                <label >Email</label>
                <input type="text" placeholder="Digite seu email" class="link-border">
            </div>
            <div class="input-label-form-div">
                <label >Senha</label>
                <input type="text" placeholder="Digite sua senha" class="link-border">
            </div>

            <a href="/register" class="to-register-link">não possui conta ? cadastre-se</a>
            <button class="link-border">Entrar</button>
        </form>
    </section>

</main>

@endsection