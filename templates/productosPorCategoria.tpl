{include 'header.tpl'}
<main>
        <h2>Ropa en la categoría: {$categoria->nombre}</h2>
        <ul>
            {foreach $productos as $producto}
                <li>
                    <h3>{$producto->nombre}</h3>
                    <a class="link" href="detalleproducto/{$producto->id_producto}">Ver detalles</a>
                </li>
            {/foreach}
        </ul>
</main>
{include 'footer.tpl'}