@extends('layouts.main')

@section('title', 'página de login')

@section('content')


<main class="main">
    <section class="form-section">
        <form  class="form link-border" action="/auth/login" method="GET">
            <div class="input-label-form-div">
                <label >Email</label>
                <input type="text" placeholder="Digite seu email" class="link-border" name="email">
            </div>
            <div class="input-label-form-div">
                <label >Senha</label>
                <input type="text" placeholder="Digite sua senha" class="link-border" name="password">
            </div>

            <a href="/user" class="to-register-link">não possui conta ? cadastre-se</a>
            <button type="submit" class="link-border">Entrar</button>
        </form>
    </section>

</main>

@endsection