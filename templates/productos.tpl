{include 'header.tpl'}
<main>
        <div> 
            {foreach $productos as $producto}
                    <a class="link" href="producto/{$producto->id}">
                        <h1>{$producto->nombre}</h1>
                    </a>
                    <a class="link" href="detalleproducto/{$producto->id_producto}">Ver detalles</a>
            {/foreach}
        </div>
</main>
{include 'footer.tpl'}