<div class="input-field">
    <input type="text" name="nome" class="validate" value="{{ isset($papel->nome) ? $papel->nome : '' }}">
    <label>Nome do Papel</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" class="validate" value="{{ isset($papel->descricao) ? $papel->descricao : '' }}">
    <label>Descrição</label>
</div>
