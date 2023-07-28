@extends('layouts.main')
 

<main class="main">
    <section class="form-section">
        <form action="" class="form link-border" method="POST">

            <div class="input-label-form-div">
                <label >Nome</label>
                <input type="text" placeholder="Digite seu nome" class="link-border" name="name" required>
            </div>
            <div class="input-label-form-div">
                <label >Email</label>
                <input type="email" placeholder="Digite seu email" class="link-border" name="email" required>
            </div>
            <div class="input-label-form-div">
                <label >Senha</label>
                <input type="text" placeholder="Digite sua senha" class="link-border" name="password" required>
            </div>

            <button class="link-border">Cadastrar-se</button>
        </form>
    </section>
</main>

@endsection