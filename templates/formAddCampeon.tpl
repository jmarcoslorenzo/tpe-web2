{if $logged}
<form class="form" action="add" method="POST">
<div class="mb-3">
<label class="form-label">ID Faccion</label>
<input type="text" name="id_faccion_fk" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Campeón</label>
<input type="text" name="campeon" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Rareza</label>
<input type="text" name="rareza" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Afinidad</label>
<input type="text" name="afinidad" class="form-control">
</div>
<button type="submit" class="btn btn-primary mt-2">Agregar Campeón</button>
</form
{/if}