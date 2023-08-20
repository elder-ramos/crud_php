<h1>Criar usuário</h1>
<form action="?page=usuario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="telefone">Número de telefone:</label>
        <input type="number" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label for="encomenda">Código da encomenda</label>
        <input type="text" name="encomenda" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>