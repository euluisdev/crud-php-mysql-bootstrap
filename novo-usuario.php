<h1 class="mb-5">Cadastrar Usuários</h1>

<form action="?page=salvar" method="POST">  <!-- linha para page=salvar form com POST -->
    <input type="hidden" name="acao" value="cadastrar">  <!-- a ação vai oculta, não vê a url -->
    <div class="form-floating mb-3">
        <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Digite seu nome</label>
    </div>
    <label class="mb-1">Sexo</label>
    <div class="form-floating mb-3">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
                <input type="radio" name="genero" value="masculino" id="option1" autocomplete="off" required> Masculino
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="genero" value="feminino" id="option2" autocomplete="off" required> Feminino
            </label>
        </div>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
        <label for="floatingInput">Seu melhor Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="senha" class="form-control" placeholder="Password" required>
        <label for="floatingPassword">Digite sua senha</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" name="data_nasc" class="form-control" required>
        <label for="floatingInput">Data de nascimento</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-intline-dark">Enviar</button>
    </div>
</form> 
