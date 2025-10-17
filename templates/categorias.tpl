{include 'header.tpl'}
<main>
        <div> 
            {foreach $categorias as $categoria}
                    <a class="link" href="productosporcategoria/{$categoria->id}">
                        <h1>{$categoria->nombre}</h1>
                    </a>
            {/foreach}
        </div>
</main>
{include 'footer.tpl'}