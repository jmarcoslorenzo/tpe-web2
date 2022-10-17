{include file="header.tpl"}


<table class="table">
  <thead>
    <tr>
    <th scope='col'>id</th>
    <th scope='col'>Campeon</th>
    <th scope='col'>Rareza</th>
    <th scope='col'>Afinidad</th>
    <th scope='col'></th>
    <th scope='col'></th>
    <th scope='col'></th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$campeon item=$campeones}
    <tr>
    <td>{$campeones->id}</td>
    <td>{$campeones->campeon}</td>
    <td>{$campeones->rareza}</td>
    <td>{$campeones->afinidad}</td>
    <td><a href='detalle/{$campeones->id}' type='button'>Detalles</a></td>
    {if $logged}
      <td><a href='formEdit/{$campeones->id}' type='button'>Editar</a></td>
      <td><a href='delete/{$campeones->id}' type='button'>Eliminar</a></td>
    {/if}

    </tr>
    {/foreach}
  </tbody>
</table>

<form method="POST" action="filter">
    <h3> Selecciona una faccion para filtrar sus campeones</h3>
        <select name="selected" class="form-selected">                                              
            {foreach from=$facciones item=$faccion }
                <option value="{$faccion->id_faccion}">{$faccion->faccion}</option>
            {/foreach}
            </select>
        <button type="submit"> Elegir </button>
    </form>

{include file="formAddCampeon.tpl"}
{include file="footer.tpl"}