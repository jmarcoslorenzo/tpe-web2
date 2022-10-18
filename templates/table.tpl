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
  {foreach from=$campeones item=$campeon}
    <tr>
    <td>{$campeon->id}</td>
    <td>{$campeon->campeon}</td>
    <td>{$campeon->rareza}</td>
    <td>{$campeon->afinidad}</td>
    <td><a href='detalle/{$campeon->id}' type='button'>Detalles</a></td>
    {if $logged}
      <td><a href='formEdit/{$campeon->id}' type='button'>Editar</a></td>
      <td><a href='delete/{$campeon->id}' type='button'>Eliminar</a></td>
    {/if}

    </tr>
    {/foreach}
  </tbody>
</table>


{include file="formAddCampeon.tpl"}
{include file="footer.tpl"}