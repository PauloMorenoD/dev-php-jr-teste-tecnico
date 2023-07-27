@extends('layouts.main')

@section('title', 'página de login')

@section('content')


<main class="main">
    <section class="form-section">
        <form action="" class="form link-border">
            <input type="text" placeholder="Digite seu email" class="link-border">
            <input type="text" placeholder="Digite sua senha" class="link-border">

            <a href="/register" class="to-register-link">não possui conta ? cadastre-se</a>
            <button class="link-border">Entrar</button>
        </form>
    </section>
</main>

@endsection