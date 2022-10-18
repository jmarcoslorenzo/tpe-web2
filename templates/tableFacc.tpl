{include file="header.tpl"}


<table class="table">
  <thead>
    <tr>
    <th scope='col'>ID</th>
    <th scope='col'>Faccion</th>
    <th scope='col'>Dominio</th>
    <th scope='col'></th>
    <th scope='col'></th>
    <th scope='col'></th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$facciones item=$faccion}
    <tr>
    <td>{$faccion->id_faccion}</td>
    <td>{$faccion->faccion}</td>
    <td>{$faccion->dominio}</td>
    {if $logged}
      <td><a href='formEditFacc/{$faccion->id_faccion}' type='button'>Editar</a></td>
      <td><a href='deleteFacciones/{$faccion->id_faccion}' type='button'>Eliminar</a></td>
    {/if}

    </tr>
    {/foreach}
  </tbody>
</table>
<h3> Selecciona una faccion para filtrar sus campeones</h3>
<form method="POST" action="filter">
        <select name="selected" class="form-selected">                                              
            {foreach from=$facciones item=$faccion }
                <option value="{$faccion->id_faccion}">{$faccion->faccion}</option>
            {/foreach}
            </select>
        <button type="submit"> Elegir </button>
    </form>
{include file="formAddFaccion.tpl"}
{include file="footer.tpl"}