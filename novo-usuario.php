<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST"> <!-- linha para page=salvar form com POST -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="date-nasc" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class=""btn btn-primary>Enviar</button>
    </div>
</form>