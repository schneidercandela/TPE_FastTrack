{include 'header.tpl'}
<main>
    <div> 
        {foreach $productos as $producto}
            <a href="{$base_url}detalleproducto/{$producto->id_producto}">
                <h1>{$producto->nombre}</h1>
            </a>           
        {/foreach}
    </div>
</main>
{include 'footer.tpl'}