@extends('layouts.main')

@section('title', 'página de registro')

@section('content')

<main class="main">
    <section class="form-section">
        <form action="" class="form link-border">
            <input type="text" placeholder="Digite seu nome" class="link-border">
            <input type="text" placeholder="Digite sua email" class="link-border">
            <input type="text" placeholder="Digite sua senha" class="link-border">

            <button class="link-border">Cadastrar-se</button>
        </form>
    </section>
</main>

@endsection