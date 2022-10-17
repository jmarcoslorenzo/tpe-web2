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
  {foreach from=$faccionesbyid item=$facciones}
    <tr>
    <td>{$facciones->id_faccion}</td>
    <td>{$facciones->faccion}</td>
    <td>{$facciones->dominio}</td>
    {if $logged}
      <td><a href='formEditFacc/{$facciones->id_faccion}' type='button'>Editar</a></td>
      <td><a href='deleteFacciones/{$facciones->id_faccion}' type='button'>Eliminar</a></td>
    {/if}

    </tr>
    {/foreach}
  </tbody>
</table>
{include file="formAddFaccion.tpl"}
{include file="footer.tpl"}