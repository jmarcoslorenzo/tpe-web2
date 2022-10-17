{if $logged}
    <form class="form" action="addFacciones" method="POST">
    <div class="mb-3">
    <label class="form-label">Facción</label>
    <input type="text" name="faccion" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">Dominio</label>
    <input type="text" name="dominio" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar Facción</button>
    </form
    {/if}