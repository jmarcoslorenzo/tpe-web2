{include file = "header.tpl"}
<h1>Campeones por Facciones</h1>
<ul>
{foreach from=$campeones item=$campeon}
    <li>{$campeones->campeon}</li>
    <li>{$campeones->rareza}</li>
    <li>{$campeones->afinidad}</li>
{/foreach}
</ul>
<a href="item" type="button" class="btn btn-link">Volver a la tabla</a>
{include file = "footer.tpl"}