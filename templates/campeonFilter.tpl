{include file = "header.tpl"}
<h1>Campeones por Facciones</h1>
<ul>
{foreach from=$campeonandfaccion item=$campeon}
    <li>{$campeon->campeon}</li>
    
{/foreach}
</ul>
<a href="facciones" type="button" class="btn btn-link">Volver a la tabla</a>
{include file = "footer.tpl"}