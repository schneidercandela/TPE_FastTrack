{include 'header.tpl'}
<main>
    {if $categoria}
        <h2>Ropa en la categoría: {$categoria->nombre}</h2>
        {if $productos}
            <ul>
                {foreach $productos as $producto}
                    <li>
                        <h3>{$producto->nombre}</h3>
                        <a class="link" href="{$base_url}detalleproducto/{$producto->id_producto}">Ver detalles</a>
                    </li>
                {/foreach}
            </ul>
        {else}
            <p>No hay productos en esta categoría</p>
        {/if}
    {else}
        <p>Categoría no encontrada</p>
    {/if}
</main>
{include 'footer.tpl'}