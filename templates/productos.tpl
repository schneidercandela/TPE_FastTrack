{include 'header.tpl'}
<main>
        <div> 
            {foreach $productos as $producto}
                    <a class="link" href="producto/{$producto->id}">
                        <h1>{$producto->nombre}</h1>
                    </a>
            {/foreach}
        </div>
</main>
{include 'footer.tpl'}